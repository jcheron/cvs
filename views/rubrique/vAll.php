<?php use technics\Url;
echo "<h1>".$cv->getAccroche()." - ".$cv->getDateCreation()."&nbsp;<a class='btn btn-lnk btn-xs' href='".Url::get("users/updateCv/".$idCv)."'>
		<span class='glyphicon glyphicon-update' aria-hidden='true'></span></a></h1>";
?>
<h2>Rubriques</h2>
<div class="list-group">
<div class='list-group-item active'><a href="<?php echo Url::get("rubriques/add/".$idCv)?>" class="btn btn-default">Ajouter une rubrique</a></div>
<?php
$index=0;
foreach ($cv->getRubriques() as $rubrique){
	echo "<div class='list-group-item'>";
	echo "<div class='list-group-item-heading'>".$rubrique->getTitre()."&nbsp;<a class='btn btn-xs btn-default' href='".Url::get("rubriques/update/".$idCv."/".$index)."'>...</a></div>";
	echo "<div class='list-group-item-text'>".$rubrique->getContenu()."</div>";
	echo "</div>";
	$index++;
}
?>
</div>