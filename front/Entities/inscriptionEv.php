<?php
class InscriptionEv {
	private $nom;
	private $prenom;
	private $sexe;
	private $email;
	private $ville ;
	private $tel ;
	private $evenement ;

function __construct($nom,$prenom,$sexe,$email,$ville,$tel,$evenement){
		
		$this->nom=$nom ;
		$this->prenom=$prenom ;
		$this->sexe=$sexe ;
		$this->email=$email;
		$this->ville=$ville ;
		$this->tel=$tel ;
		$this->evenement=$evenement ;
	}
	
	public function getNom() {
	return $this->nom ; }
	public function getPrenom() {
	return $this->prenom ; }
	public function getSexe() {
	return $this->sexe ; }
	public function getEmail() {
	return $this->email ; }
	public function getVille() {
	return $this->ville ; }
	public function getTel() {
	return $this->tel ;}
	public function getEvent() {
	return $this->evenement ;}

	public function setNom($nom) {
	return $this->nom=$nom ;}
	public function setPrenom($prenom) {
	return $this->prenom=$prenom ;} 
	public function setSexe($sexe) {
	return $this->sexe=$sexe ;}
	public function setEmail($email) {
	return $this->email=$email;}
	public function setVille($ville) {
	return $this->ville=$ville;}
	public function setTel($tel) {
	return $this->tel=$tel ; }
	public function setEvent($evenement) {
	return $this->evenement=$evenement ; } 


}
?>