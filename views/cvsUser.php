<h1>Cvs de <?php echo $user->getNom()?></h1>
<div>
	<a class="btn btn-default" href="User/addCv">Ajouter un CV...</a>
</div>
<ul>
	<?php 
	foreach ($user->getCvs() as $cv){
		echo "<li>".$cv->getAccroche()." - ".$cv->getDateCreation();
		echo " (".$cv->rubriquesCount()." rubrique(s))</li>";		
	}
	?>
</ul>
