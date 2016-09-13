<?php
include_once './../technics/autoload.php';

use models\Utilisateur;
session_start();

$user=new Utilisateur("HERON","jc");

$user->addCv();
$user->addCv();

$_SESSION["user"]=$user;
echo $user->getNom()."<br>";

echo "<hr>";

foreach ($user->getCvs() as $cv){
	echo $cv->getDateCreation()." - version n°".$cv->getVersion()."<br>";
}

echo "Nombre de cvs : ".$user->cvsCount()."<br>";
