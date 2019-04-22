<?php
class Evenement {
	private $nom;
	private $ville;
	private $addrese;
	private $optionn;
	private $etat;
	private $fin_insc;
	private $image;
	private $date_d;
	private $date_f;
	private $description ;
	private $num ;


function __construct($nom,$ville,$addrese,$optionn,$etat,$fin_insc,$image,$date_d,$date_f,$description,$num){
		
	 $this->nom=$nom;
	 $this->ville=$ville;
	 $this->addrese=$addrese;
	 $this->optionn=$optionn;
	 $this->etat=$etat;
	 $this->fin_insc=$fin_insc;
	 $this->image= $image;
	 $this->date_d=$date_d;
	 $this->date_f=$date_f;
	 $this->description=$description;
	 $this->num=$num ;
	}
	
	public function getNom() {
	return $this->nom ; }
	public function getVille() {
	return $this->ville ;}
	public function getAddrese() {
	return $this->addrese ;}
	public function getOption() {
	return $this->optionn;}
	public function getEtat() {
	return $this->etat ;}
	public function getFinIn() {
	return $this->fin_insc ;}
	public function getImage() {
	return $this->image ;}
	public function getDateD() {
	return $this->date_d ;}
	public function getDateF() {
	return $this->date_f;}
	public function getDescription() {
	return $this->description ;}
	public function getNum() {
	return $this->num ;} 

	public function setNom($nom) {
	return $this->nom=$nom ;}
	public function setVille($ville) {
	return $this->ville=$ville ;}
	public function setAddrese($addrese) {
	return $this->addrese=$addrese ;}
	public function setOption($optionn) {
	return $this->optionn=$optionn;}
	public function setEtat($etat) {
	return $this->etat=$etat ;}
	public function setFinIn($fin_insc) {
	return $this->fin_insc=$fin_insc ;}
	public function setImage($image) {
	return $this->image=$image ;}
	public function setDateD($date_d) {
	return $this->date_d=$date_d ;}
	public function setDateF($date_f) {
	return $this->date_f=$date_f;}
	public function setDesc($description) {
	return $this->description=$description ; } 
	public function setNum($num) {
	return $this->num=$num ; } 


}
?>