<?php
class Promotion {
	private $nom;
	private $article;
	private $date_d;
	private $date_f;
	private $description ;
	private $quantite ;
	private $categorie ;
	private $np ;
	private $ap ;

function __construct($nom,$article,$date_d,$date_f,$description,$ap,$np,$categorie,$quantite){
		
		$this->nom=$nom ;
		$this->article=$article ;
		$this->date_d=$date_d ;
		$this->date_f=$date_f;
		$this->description=$description ;

		$this->quantite=$quantite ;
		$this->categorie=$categorie ;
		$this->np=$np ;
		$this->ap=$ap ;

	}
	
	public function getNom() {
	return $this->nom ; }
	public function getArticle() {
	return $this->article ; }
	public function getDateD() {
	return $this->date_d ; }
	public function getDateF() {
	return $this->date_f ; }
	public function getDescription() {
	return $this->description ;}
	
	public function getQuantite() {
	return $this->quantite ;}
	public function getCategorie() {
	return $this->categorie ;}
	public function getAP() {
	return $this->ap ;}
	public function getNP() {
	return $this->np ;}


	public function setNom($nom) {
	return $this->nom=$nom ;}
	public function setArticle($article) {
	return $this->article=$article ;} 
	public function setDateD($date_d) {
	return $this->date_d=$date_d ;}
	public function setDateF($date_f) {
	return $this->date_f=$date_f;}
	public function setDesc($description) {
	return $this->description=$description ; } 

	public function setQuantite() {
	return $this->quantite=$quantite ;}
	public function setCategorie() {
	return $this->categorie=$categorie  ;}
	public function setAP() {
	return $this->ap=$ap ;}
	public function setNP() {
	return $this->np=$np ;}

}
?>