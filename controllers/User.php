<?php
namespace controllers;
class User extends BaseController {
	
	public function index(){
		$user=$_SESSION["user"];
		include "views/cvsUser.php";
	}
	
	public function addCv(){
		$user=$_SESSION["user"];
	
	
		if(count($_POST)>0){
			$user->addCv($_POST["accroche"]);
			include "views/cvsUser.php";
		}else{
			include "views/addCv.php";
		}
	}
	
	public function showCv($id){
	
		$user=$_SESSION["user"];
		var_dump($user->getCvs()[$id]);
	}
	
	public function all(){
		echo "Liste des utilisateurs";
	}
}