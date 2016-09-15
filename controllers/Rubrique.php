<?php
namespace controllers;
class Rubrique extends BaseController {
	
	public function all($id){
		$user=$_SESSION["user"];
		$cv=$user->getCvs()[$id];
		$idCv=$id;
		include 'views/rubrique/all.php';
	}
	
	public function update($idCv,$id){
		$user=$_SESSION["user"];
		$cv=$user->getCvs()[$idCv];
		$rubrique=$cv->getRubriques()[$id];
		if(count($_POST)>0){
			$rubrique->setTitre($_POST["titre"]);
			$rubrique->setContenu($_POST["contenu"]);
			$this->all($idCv);
		}else{
			include 'views/rubrique/update.php';
		}
	}
}