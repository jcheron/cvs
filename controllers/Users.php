<?php
namespace controllers;
use models\Cv;
use technics\Jquery;
use technics\Url;
class Users extends BaseController {
	
	public function index(){
		$user=$_SESSION["user"];
		include "views/vCvsUser.php";
		Jquery::getOn("click", ".addCv", Url::get("Users/addCv"), "#divResponse");
		Jquery::getOn("click", ".edit-cv", Url::get("Rubriques/all"), "#divResponse");
	}
	
	public function addCv(){
		$user=$_SESSION["user"];
		$cv=new Cv($user);
		$action="addCv";
		if(count($_POST)>0){
			$user->addCv($_POST["accroche"]);
			include "views/vCvsUser.php";
		}else{
			include "views/vEditCv.php";
		}
	}
	
	public function updateCv($idCv){
		$user=$_SESSION["user"];
		$cv=$user->getCvs()[$idCv];
		
		$action="updateCv";
		if(count($_POST)>0){
			$cv->setAccroche($_POST["accroche"]);
			include "views/vCvsUser.php";
		}else{
			include "views/vEditCv.php";
		}		
	}
	
	public function deleteCv($idCv){
		$user=$_SESSION["user"];
		$user->removeCv($idCv);
		include "views/vCvsUser.php";
	}
	
	public function showCv($id){
	
		$user=$_SESSION["user"];
		var_dump($user->getCvs()[$id]);
	}
	
	public function all(){
		echo "Liste des utilisateurs";
	}
}