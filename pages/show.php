<h1 class="display-4 text-center mb-5 mt-5">
Produit
</h1>
<hr>
<?php
if($prod):
?>
<h4><?=$prod->name;?></h4>
<h4><?=$prod->prix;?></h4>
<?php
else:
?>
<div class="alert alert-danger">
<p>
id incorrect
</p>
</div>
<?php
endif;
?>
<a href="?p=home" class="btn btn-primary">Retour</a>