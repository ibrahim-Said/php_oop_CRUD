<h1 class="display-4 mt-5 mb-5 text-center">Ajouter un produit</h1>
<form method="POST" action="?p=produit.save">
<?=$form->input('text','name','produit...');?>
<?=$form->input('number','prix');?>
<button class="btn btn-success" type="submit">Ajouter</button>
<a class="btn btn-light" href="?p=home" type="submit">Retour</a>
</form>

