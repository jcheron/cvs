<?php
namespace models;
class Cv {
	private $id;
	private $version;
	private $dateCreation;
	private $accroche;
	private $utilisateur;
	private $rubriques;
	
	public function __construct($utilisateur){
		$this->version=1;
		$this->utilisateur=$utilisateur;
		$this->dateCreation=date("Y-m-d");
		$this->rubriques=array();
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getVersion() {
		return $this->version;
	}
	public function setVersion($version) {
		$this->version = $version;
		return $this;
	}
	public function getDateCreation() {
		return $this->dateCreation;
	}
	public function setDateCreation($dateCreation) {
		$this->dateCreation = $dateCreation;
		return $this;
	}
	public function getAccroche() {
		return $this->accroche;
	}
	public function setAccroche($accroche) {
		$this->accroche = $accroche;
		return $this;
	}
	public function getUtilisateur() {
		return $this->utilisateur;
	}
	public function setUtilisateur($utilisateur) {
		$this->utilisateur = $utilisateur;
		return $this;
	}
	/**
	 * Ajoute une rubrique au CV
	 * @param string $titre
	 * @param string $contenu
	 */
	public function addRubrique($titre,$contenu){
		$rubrique=new Rubrique($titre, $contenu);
		$this->rubriques[]=$rubrique;
		return $rubrique;
	}
	
	public function rubriquesCount(){
		return count($this->rubriques);
	}
	public function getRubriques() {
		return $this->rubriques;
	}
	
	
}