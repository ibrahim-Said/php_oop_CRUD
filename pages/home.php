<h1 class="display-4 text-center mb-5 mt-5">
Liste des produits
</h1>
<a class="btn btn-success" href="?p=produit.add">Ajouter <span><i class="fa fa-plus" aria-hidden="true"></i></span></a>
<br>
<br>
<?php
if($session->hasFlash()){
    foreach($session->getFlash() as $k=>$v){
        ?>
        <div class="alert alert-<?=$k;?>"><?=$v;?></div>
        <?php
    }
}
?>
<table class="table table-striped table-inverse table-responsive col-md-6 offset-md-3">
    <thead class="thead-inverse">
        <tr>
            <th>Id</th>
            <th>Produit</th>
            <th>Prix</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if($produits):
            foreach($produits as $k):
        ?>
            <tr>
                <td scope="row"><?=$k->id;?></td>
                <td><?=$k->name;?></td>
                <td><?=$k->prix;?> DT</td>
                <td>
                <a class="btn btn-warning" href="?p=produit.edit&id=<?=$k->id;?>">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
                <a class="btn btn-success" href="?p=produit.show&id=<?=$k->id;?>">
                <i class="fa fa-eye" aria-hidden="true"></i>
                </a>

                <form method='POST' action="?p=produit.delete">
                <input type="hidden" value="<?=$k->id;?>" name="id">
                <button class="btn btn-danger" type="submit"><span><i class="fa fa-trash" aria-hidden="true"></i></span></button>
                </form>
                </td>
            </tr>
            <?php
              endforeach;
            endif;
            ?>
        </tbody>
</table>