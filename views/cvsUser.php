<h1>Cvs de <?php echo $user->getNom()?></h1>
<div>
	<a class="btn btn-default" href="User/addCv">Ajouter un CV...</a>
</div>
<ul>
	<?php 
	$index=0;
	foreach ($user->getCvs() as $cv){
		echo "<li>".$cv->getAccroche()." - ".$cv->getDateCreation();
		echo " (".$cv->rubriquesCount()." rubrique(s))";
		echo "<a href='Rubrique/all/".$index."' class='btn btn-xs btn-primary'>...</a></li>";
		$index++;
	}
	?>
</ul>
