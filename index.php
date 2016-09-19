<?php

$url=$_GET["c"];
$urlParts=explode("/", $url);
$base_href="/cvs/";
include_once 'technics/autoload.php';
session_start();
$isAjax=(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

if(count($urlParts)>0){
	$ctrl=$urlParts[0];
	$ctrlName="controllers\\".$ctrl;
	if(class_exists($ctrlName)){
		if(!$isAjax)
			include 'views/vHeader.php';
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
		if(!$isAjax)
			include 'views/vFooter.php';

	}else{
		echo "Le contrôleur {$ctrlName} n'existe pas !";
	}
}

