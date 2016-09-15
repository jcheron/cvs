<?php
use models\Utilisateur;
include_once './../technics/autoload.php';

session_start();

$user=new Utilisateur("DUPUY","Vincent");
$cv1=$user->addCv("Développeur web");
$cv1->addRubrique("Formation", "BTS SIO option SLAM - LT Sainte-Ursule");
$cv1->addRubrique("Compétences", "<ul><li>Frameworks web (CI, YII)</li><li>Bases de données SQL</li></ul>");


$user->addCv("Recherche de stage");

$_SESSION["user"]=$user;

var_dump($user);