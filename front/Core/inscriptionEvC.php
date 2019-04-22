<?php

class InscriptionEvC {

	public function ajouterI($in){
		include "../config.php" ;

		try {
			$dbcon = config::getConnexion();

			$stmt = $dbcon->prepare("insert into event_inscri (nom,prenom,sexe,email,ville,tel,evenement) values (:nom,:prenom,:sexe,:email,:ville,:tel,:evenement)") ;

			$nom=$in->getNom();
			$prenom=$in->getPrenom();
			$sexe=$in->getSexe();
			$email=$in->getEmail();
			$ville=$in->getVille();
			$tel=$in->getTel();
			$evenement=$in->getEvent();

			$stmt->bindParam(":nom",$nom) ;
			$stmt->bindParam(":prenom", $prenom) ;
			$stmt->bindParam(":sexe", $sexe) ;
			$stmt->bindParam(":email", $email) ;
			$stmt->bindParam(":ville", $ville) ;
			$stmt->bindParam(":tel", $tel) ;
			$stmt->bindParam(":evenement",$evenement) ;
			$stmt->execute() ;
}
catch (PDOException $e) {
  print "Error !" .$e->getMessage() . "<br/>" ;
  die() ;


}
}

 
    	function moinE($id){
   
		$db = config::getConnexion();
		try{
		$stmt = $db->prepare("UPDATE event SET nb_insc=nb_insc-1 where id=$id") ;
        $stmt->execute() ;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    	}


	function getEvenementD($id){
		$sql="SELECT * from event where id=$id";
		$db = config::getConnexion();
		try{
		$compte=$db->query($sql);
		return $compte;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function getEvenementt(){
		
		$td=date("Y-m-d") ;
		$dd=$td ;
		list($y, $m, $d) = explode('-', $dd);

    	$sql="SELECT * FROM event WHERE nb_insc > 0 AND date_d > '".$td."' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    	}
  
    	

	}

?>