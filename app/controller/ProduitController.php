<?php
namespace app\controller;

use app\model\Produit;
use app\App;
use app\Form;
use app\Session;
class ProduitController extends Controller{
    public function getAll(){
        $produit=new Produit(App::getDb());
        $produits=$produit->getAll();
        $session=Session::getInstance();
        $this->render('home',compact('produits','session'));
    }
    public function show(){
        $produit=new Produit(App::getDb());
        $id=intval($_GET['id']);
        if($id){
            $prod=$produit->getById($id);
        $this->render('show',compact('prod'));
        }else{
            $this->render('home',compact('prod'));
        }

    }
    public function create(){
        $form=new Form($_POST);
        $this->render('addproduit',compact('form'));
    }
    public function store(){
        $produit=new Produit(App::getDb());
        if($_POST){
            $produit->store($_POST['name'],$_POST['prix']);
            $session=Session::getInstance();
            $session->setFlash('success','votre produit a été ajouter avec succé !');
            header('location:?p=home');
            exit();
        }
    }
    public function edit(){
        $produit=new Produit(App::getDb());
        $id=intval($_GET['id']);
        if($id){
            $prod=$produit->getById($id);
            $form=new Form($prod);
            $this->render('edit',compact('prod','form'));
        }else{
            $session=Session::getInstance();
            $session->setFlash('danger','id incorrect !!');
        }
        if($_POST){
            $produit=new Produit(App::getDb());
        $id=$_GET['id'];
            $produit->update($id,$_POST['name'],$_POST['prix']);
            $session=Session::getInstance();
            $session->setFlash('success','votre produit a été modifier avec succé !');
            header('location:?p=home');
            exit();
        }
    }
    public function delete(){
        if($_POST){
            if(isset($_POST['id'])){
                $produit=new Produit(App::getDB());
                $produit->delete($_POST['id']);
                $session=Session::getInstance();
                $session->setFlash('success','votre produit a été supprimer avec succé !');
                header('location:?p=home');
                exit();

            }
        }
    }

}