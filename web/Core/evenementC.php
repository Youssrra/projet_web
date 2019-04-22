<?php 

class EvenementC {
	
		public function ajouterE($e){
		
    
try {
 $dbcon = config::getConnexion();
	$stmt = $dbcon->prepare("insert into event (nom,ville,addrese,optionn,etat,description,date_d,date_f,fin_insc,image,nb_insc) values (:nom,:ville,:addrese,:optionn,:etat,:description,:date_d,:date_f,:fin_insc,:image,:num)") ;

    $nom=$e->getNom();
    $ville=$e->getVille();
    $addrese=$e->getAddrese();
    $optionn=$e->getOption();
    $etat=$e->getEtat();
    $description=$e->getDescription();
    $date_d=$e->getDateD();
    $date_f=$e->getDateF();
    $fin_insc=$e->getFinIn();
    $image=$e->getImage();
    $num=$e->getNum();


    

    $image="image_evenement/".$image ;
	$stmt->bindParam(":nom",$nom) ;
	$stmt->bindParam(":ville",$ville) ;
	$stmt->bindParam(":addrese",$addrese) ;
	$stmt->bindParam(":optionn",$optionn) ;
	$stmt->bindParam(":etat",$etat) ;
	$stmt->bindParam(":description", $description) ;
	$stmt->bindParam(":date_d", $date_d) ;
	$stmt->bindParam(":date_f", $date_f) ;
	$stmt->bindParam(":fin_insc", $fin_insc) ;
	$stmt->bindParam(":image", $image) ;
	$stmt->bindParam(":num", $num) ;
	$stmt->execute() ;
}
catch (PDOException $e) {
  print "Error !" .$e->getMessage() . "<br/>" ;
  die() ;
}
}

	function getAllEvenement(){
		$sql="SElECT * From event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function getAllEvenementS($keywords){
		$sql="SELECT * FROM event WHERE CONCAT(`id`, `nom`, `date_d`,`image`, `date_f` ,`description`,`optionn`,`fin_insc`,`etat`,`ville`,`nb_insc`,`addrese`) LIKE '%".$keywords."%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function getOrderEvenementS($regrouper){
	if ($regrouper === "date_d")
	{
		$sql="SELECT * FROM event ORDER BY date_d  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    else
    {
    	$sql="SELECT * FROM event ORDER BY date_f  ";
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

	function getOrderEvenementT($event){
		$td=date("Y-m-d") ;
		$dd=$td ;
		list($y, $m, $d) = explode('-', $dd);
		

	if ($event === "today")
	{
		$sql="SELECT * FROM event WHERE date_d='".$td."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    else if ($event === "passer")
    	{
    	$sql="SELECT * FROM event WHERE date_d < '".$td."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    	}
    	 else if ($event === "month")
    	{
    	$sql="SELECT * FROM event WHERE MONTH(date_d)='".$m."' OR MONTH(date_f)='".$m."'" ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    	}
    	else if ($event === "week")
    	{
    	$sql="SELECT * FROM event WHERE DAY(date_d) >= '".$d."' " ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    	}
    	else 
    			{
    		$s="no data";
		return $s ;

    	}
    	
	}


	function deleteEvenement($id){
		$sql="DELETE FROM event where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           return 1 ;        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function getEvenement($id){
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
	
}
?>