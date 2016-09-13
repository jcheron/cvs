<?php

namespace models;

class Rubrique {
	private $id;
	private $titre;
	private $contenu;
	private $ordre;
	
	public function __construct($titre,$contenu){
		$this->titre=$titre;
		$this->contenu=$contenu;
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getTitre() {
		return $this->titre;
	}
	public function setTitre($titre) {
		$this->titre = $titre;
		return $this;
	}
	public function getContenu() {
		return $this->contenu;
	}
	public function setContenu($contenu) {
		$this->contenu = $contenu;
		return $this;
	}
	public function getOrdre() {
		return $this->ordre;
	}
	public function setOrdre($ordre) {
		$this->ordre = $ordre;
		return $this;
	}
	
}