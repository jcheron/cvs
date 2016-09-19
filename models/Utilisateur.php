<?php
namespace models;

class Utilisateur {
	private $id;
	private $nom;
	private $prenom;
	private $adresse;
	private $cp;
	private $ville;
	private $tel;
	private $mail;

	/**
	 * cvs de l'utilisateur
	 * @var array
	 */
	private $cvs;
	
	public function __construct($nom,$prenom=NULL){
		$this->prenom=$prenom;
		$this->nom=$nom;
		$this->cp=14000;
		$this->cvs=array();
	}
	
	
	/**
	 * Retourne le nom de l'utilisateur 
	 */
	public function getNom(){
		return $this->nom;
	}
	
	/**
	 * Modifie le nom de l'utilisateur
	 * @param string $nom
	 */
	public function setNom($nom){
		$this->nom=$nom;
		return $this;
	}
	
	/**
	 * Retourne le nombre de CVs de l'utilisateur
	 */
	public function cvsCount(){
		return count($this->cvs);
	}
	
	/**
	 * Ajoute un cv à la liste des cvs de l'utilisateur
	 * @param string $accroche
	 * @return Cv retourne le cv ajouté
	 */
	public function addCv($accroche=NULL){
		$cv=new Cv($this);
		$cv->setAccroche($accroche);
		$this->cvs[]=$cv;
		return $cv;
	}
	
	public function getCvs() {
		return $this->cvs;
	}
	
	public function removeCv($index){
		unset($this->cvs[$index]);
	}
	
	/**
	 * Ajoute une rubrique dans le CV à la position $index de l'utilisateur
	 * @param int $index
	 * @param string $titre
	 * @param string $contenu
	 * @return Rubrique|boolean la rubrique ajoutée ou faux si aucun cv ne se trouve à la position $index
	 */
	public function addCvRubrique($index,$titre,$contenu){
		$result=false;
		if($index<count($this->cvs)){
			$result=$this->cvs[$index]->addRubrique($titre,$contenu);
		}
		return $result;
	}
	public function getPrenom() {
		return $this->prenom;
	}
	public function setPrenom($prenom) {
		$this->prenom = $prenom;
		return $this;
	}
	
	
}