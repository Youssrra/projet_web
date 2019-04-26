<?php 

class PromotionC {
	
		public function ajouterP($p){
	

try {
	
 $dbcon = config::getConnexion();


	$stmt = $dbcon->prepare("insert into promotion 
(nom,article,date_d,date_f,description,nprix,aprix,taux,categorie,qt)values(:nom,:article,:date_d,:date_f,:description,:np,:ap,:taux,:categorie,:quantite)") ;
    $nom=$p->getNom();
    $article=$p->getArticle();
    $date_d=$p->getDateD();
    $date_f=$p->getDateF();
    $description=$p->getDescription();
    $quantite=$p->getQuantite();
	$categorie=$p->getCategorie()  ;
    $ap=$p->getAP() ;
	$np =$p->getNP() ;

	$num1 = (double) $ap;
	$num2 = (float) $np;

	$taux=(($ap-$num2)*100)/$ap ;

    $article="image_promotion/".$article ;
	$stmt->bindParam(":nom",$nom) ;
	$stmt->bindParam(":article",$article) ;
	$stmt->bindParam(":date_d", $date_d) ;
	$stmt->bindParam(":date_f", $date_f) ;
	$stmt->bindParam(":description", $description) ;
	$stmt->bindParam(":np", $num2) ;
	$stmt->bindParam(":ap", $ap) ;
	$stmt->bindParam(":taux", $taux) ;
$stmt->bindParam(":categorie", $categorie) ;
	$stmt->bindParam(":quantite", $quantite) ;
	$stmt->execute() ;
}
catch (PDOException $e) {
  print "Error !" .$e->getMessage() . "<br/>" ;
  die() ;
}
}



	function getAllPromotion(){
		$sql="SElECT * From promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function getAllPromotionToday(){
		$td=date("Y-m-d") ;
	
		$sql="SElECT * From promotion where date_d='".$td."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	

	function getAllPromotionS($keywords){
		$sql="SELECT * FROM promotion WHERE CONCAT(`id`,`taux`,`categorie`,`quantite`,`ap`,`np`,`nom`, `date_d`,`article`, `date_f` ,`description`) LIKE '%".$keywords."%'";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function getOrderPromotionS($regrouper){
	if ($regrouper === "date_d")
	{
		$sql="SELECT * FROM promotion ORDER BY date_d  ";
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
    	$sql="SELECT * FROM promotion ORDER BY date_f  ";
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

	function getOrderPromotionT($promu){
		$td=date("Y-m-d") ;
		$dd=$td ;
		list($y, $m, $d) = explode('-', $dd);
		

	if ($promu === "today")
	{
		$sql="SELECT * FROM promotion WHERE date_d='".$td."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    else if ($promu=== "promu")
    	{
    	$sql="SELECT * FROM promotion WHERE date_d < '".$td."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    	}
    	 else if ($promu=== "month")
    	{
    	$sql="SELECT * FROM promotion WHERE MONTH(date_d)='".$m."' OR MONTH(date_f)='".$m."'" ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    	}
    	else if ($promu=== "week")
    	{
    	$sql="SELECT * FROM promotion WHERE DAY(date_d) >= '".$d."' " ;
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


	function deletePromotion($id){
		$sql="DELETE FROM promotion where id= :id";
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

	function getPromotion($id){
		$sql="SELECT * from promotion where id=$id";
		$db = config::getConnexion();
		try{
		$compte=$db->query($sql);
		return $compte;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function modifierP($p,$id){
		$sql="UPDATE promotion SET id=:id,nom=:nom,description=:description,date_d=:date_d,date_f=:date_f WHERE id=:id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        $nom=$p->getNom();
        $date_d=$p->getDateD();
        $date_f=$p->getDateF();
        $description=$p->getDescription();
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date_d',$date_d);
		$req->bindValue(':date_f',$date_f);
		$req->bindValue(':description',$description);
	
           return $req;
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}
}





?>