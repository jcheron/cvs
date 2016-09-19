<form method="post" action="/cvs/rubriques/<?php echo $action."/".$idCv."/".$id ?>">
	<div class="form-group">
		<label>Titre<input type="text" id="titre" name="titre" class="form-control" value="<?php echo $rubrique->getTitre() ?>"></label>
	</div>
	<div class="form-group">
		<label>Contenu</label><textarea id="contenu" name="contenu" class="form-control"><?php echo $rubrique->getContenu() ?></textarea></label>
	</div>
	<input type="submit" value="Valider" class="btn btn-default">
</form>