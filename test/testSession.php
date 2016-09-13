<?php
include_once './../technics/autoload.php';

session_start();

$user=$_SESSION["user"];
echo $user->getNom();
echo "<hr>";

foreach ($user->getCvs() as $cv){
	echo $cv->getDateCreation()." - version n°".$cv->getVersion()."<br>";
}