<?php echo "<h1>".$cv->getAccroche()." - ".$cv->getDateCreation()."</h1>";
?>
<h2>Rubriques</h2>
<div class="list-group">
<?php
$index=0;
foreach ($cv->getRubriques() as $rubrique){
	echo "<div class='list-group-item'>";
	echo "<div class='list-group-item-heading'>".$rubrique->getTitre()."&nbsp;<a class='btn btn-xs btn-default' href='/cvs/rubrique/update/".$idCv."/".$index."'>...</a></div>";
	echo "<div class='list-group-item-text'>".$rubrique->getContenu()."</div>";
	echo "</div>";
	$index++;
}
?>
</div>