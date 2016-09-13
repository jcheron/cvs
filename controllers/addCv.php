<?php
session_start();
$user=$_SESSION["user"];


if(count($_POST)>0){
	$user->addCv($_POST["accroche"]);
	include "views/cvsUser.php";
}else{
	include "views/addCv.php";
}
