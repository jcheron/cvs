<?php
$url=$_GET["c"];
$urlParts=explode("/", $url);

include_once 'technics/autoload.php';

if(count($urlParts)>0){
	$ctrl=$urlParts[0];
	if(file_exists("controllers/".$ctrl.".php")){
		include 'views/header.php';
		require "controllers/".$ctrl.".php";
		include 'views/footer.php';

	}else{
		echo "Le contrôleur {$urlParts[0]} n'existe pas !";
	}
}

