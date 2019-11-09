<?php
use app\controller\ProduitController;
use app\Autoloader;

define("ROOT", dirname(__DIR__));
require('../app/Autoloader.php');
Autoloader::register();
$p = "";
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'homr';
}
if ($p === 'home') {
    $controller = new ProduitController();
    $controller->getAll();
} elseif ($p === 'produit.show') {
    $controller = new ProduitController();
    $controller->show();
} elseif ($p === 'produit.delete') {
    $controller = new ProduitController();
    $controller->delete();
}
elseif ($p === 'produit.add') {
    $controller = new ProduitController();
    $controller->create();
}
elseif ($p === 'produit.save') {
    $controller = new ProduitController();
    $controller->store();
}
elseif ($p === 'produit.edit') {
    $controller = new ProduitController();
    $controller->edit();
}
else {
    $controller = new ProduitController();
    $controller->getAll();
}
