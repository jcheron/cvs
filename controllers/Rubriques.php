<?php
namespace controllers;
use models\Rubrique;
class Rubriques extends BaseController {
	
	public function all($id){
		$user=$_SESSION["user"];
		$cv=$user->getCvs()[$id];
		$idCv=$id;
		include 'views/rubrique/vAll.php';
	}
	
	public function update($idCv,$id){
		$user=$_SESSION["user"];
		$cv=$user->getCvs()[$idCv];
		$action="update";
		$rubrique=$cv->getRubriques()[$id];
		if(count($_POST)>0){
			$rubrique->setTitre($_POST["titre"]);
			$rubrique->setContenu($_POST["contenu"]);
			$this->all($idCv);
		}else{
			include 'views/rubrique/vUpdate.php';
		}
	}
	
	public function add($idCv){
			$rubrique=new Rubrique("Titre", "Contenu");
			$id=$idCv;
			$action="add";
			if(count($_POST)>0){
				$user=$_SESSION["user"];
				$cv=$user->getCvs()[$idCv];
				$cv->addRubrique($_POST["titre"],$_POST["contenu"]);
				$this->all($idCv);
			}else{
				include 'views/rubrique/vUpdate.php';
			}
	}
}