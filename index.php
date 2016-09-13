<?php

$url=$_GET["c"];
$urlParts=explode("/", $url);

include_once 'technics/autoload.php';
session_start();

if(count($urlParts)>0){
	$ctrl=$urlParts[0];
	$ctrlName="controllers\\".$ctrl;
	if(class_exists($ctrlName)){
		include 'views/header.php';
		$ctrlInstance=new $ctrlName();
		if(count($urlParts)>1){
			$method=$urlParts[1];
			if(method_exists($ctrlInstance, $method)){
				call_user_method_array($method, $ctrlInstance, array_slice($urlParts, 2));
			}else{
				echo "La méthode {$method} n'existe pas sur le contrôleur {$ctrlName}!";
			}
		}else{
			$ctrlInstance->index();
		}
		include 'views/footer.php';

	}else{
		echo "Le contrôleur {$ctrlName} n'existe pas !";
	}
}

