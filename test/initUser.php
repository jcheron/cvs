<?php
use models\Utilisateur;
include_once './../technics/autoload.php';

session_start();

$user=new Utilisateur("DUPUY","Vincent");
$cv1=$user->addCv();
$cv1->addRubrique("Formation", "BTS SIO option SLAM - LT Sainte-Ursule");

$user->addCv();

$_SESSION["user"]=$user;

var_dump($user);