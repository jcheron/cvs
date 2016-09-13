<h1>Ajout d'un CV pour <?php echo $user->getNom()?></h1>
<form action="User/addCv" method="post">
<fieldset>
<legend>Nouveau CV</legend>
<div class="form-group">
<label for="accroche">

</label>
<textarea class="form-control" id="accroche" name="accroche" placeholder="Entrez une accroche...">
</textarea>
<input class="btn btn-success" type="submit" value="Créer le CV"></fieldset>
</div>
</form>