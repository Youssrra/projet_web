<?php
class Promotion {
	private $nom;
	private $article;
	private $date_d;
	private $date_f;
	private $description ;

function __construct($nom,$article,$date_d,$date_f,$description){
		
		$this->nom=$nom ;
		$this->article=$article ;
		$this->date_d=$date_d ;
		$this->date_f=$date_f;
		$this->description=$description ;
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


}
?>