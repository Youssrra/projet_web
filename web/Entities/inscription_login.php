<?php
class Inscription {
	private $login;
	private $pwd;
	private $email;
	

function __construct($login,$pwd,$email){
		
		$this->login=$login ;
		$this->pwd=$pwd ;
		$this->email=$email ;
	}
	
	public function getLogin() {
	return $this->login ; }
	public function getPwd() {
	return $this->pwd ; }
	public function getEmail() {
	return $this->email ; }

	public function setLogin($login) {
	return $this->login=$login ;}
	public function setArticle($pwd) {
	return $this->pwd=$pwd ;} 
	public function setDateD($email) {
	return $this->email=$email ;}
	
}
?>