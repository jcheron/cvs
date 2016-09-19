<?php
use technics\Url;
?>
<h2>Ajout/modification d'un CV pour <?php echo $user->getPrenom()." ".$user->getNom()?></h2>
<form action="<?php Url::get("Users/".$action)?>" method="post">
<fieldset>
<legend>CV</legend>
<div class="form-group">
<label for="accroche">

</label>
<textarea class="form-control" id="accroche" name="accroche" placeholder="Entrez une accroche...">
<?php echo $cv->getAccroche()?>
</textarea>
<input class="btn btn-success" type="submit" value="Valider"></fieldset>
</div>
</form>