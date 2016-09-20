<?php
use technics\Url;
?>
<h1>Cvs de <?php echo $user->getPrenom()." ".$user->getNom()?></h1>
<div>
	<a class="btn btn-default addCv" href="<?php echo Url::get("Users/addCv")?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter un CV</a>
</div>
<div id="divResponse"></div>
<ul>
	<?php 
	$index=0;
	foreach ($user->getCvs() as $cv){
		echo "<li>".$cv->getAccroche()." - ".$cv->getDateCreation();
		echo " (".$cv->rubriquesCount()." rubrique(s))";
		echo "<a href='".\technics\Url::get("Rubriques/all/".$index).
		"' class='btn btn-xs btn-lnk edit-cv'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
				</a>";
		echo "<a href='".\technics\Url::get("Users/deleteCv/".$index).
		"' class='btn btn-xs btn-lnk'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
				</a></li>";
		$index++;
	}
	?>
</ul>
