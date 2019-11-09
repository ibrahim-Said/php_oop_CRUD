<?php
namespace app\model;

use app\App;

class Produit
{
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getAll()
    {
        $produits = $this->db->query('select * from produits')->fetchAll();
        return $produits;
    }
    public function getById($id)
    {
        $produits = $this->db->query('select * from produits where id=?', [$id])->fetch();
        return $produits;
    }
    public function update($id, $nom, $prix)
    {
        $this->db->query('update produits set name=?,prix=? where id=?', [$nom, $prix, $id]);
    }
    public function store($nom, $prix)
    {
        $this->db->query('insert into produits set name=?,prix=?', [$nom, $prix]);
    }
    public function delete($id)
    {
        $this->db->query('delete from produits where id=?', [$id]);
    }
}