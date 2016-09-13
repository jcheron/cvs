<h1>Ajout d'un CV pour <?php echo $user->getNom()?></h1>
<form action="addCv" method="post" class="form">
<fieldset>
<legend>Nouveau CV</legend>
<textarea class="form-control" id="accroche" name="accroche" placeholder="Entrez une accroche...">
</textarea>
<input class="btn btn-success" type="submit" value="Créer le CV"></fieldset>
</form>