<?PHP
include "../core/promotionC.php";
include "../Entities/promotion.php";
include "../config.php";
$dbcon= config::getConnexion();

$id = $_GET['id'] ;
$nom = $_POST['nom'] ;
$article = $_POST['image'] ;
$date_d = $_POST['date_d'] ;
$date_f = $_POST['date_f'] ;
$description = $_POST['desc'] ; 
$quantite = $_POST['quantite'] ; 
$categorie= $_POST['categorie'] ; 
$ap= $_POST['ap'] ; 
$np= $_POST['np'] ; 
$article="image_promotion/".$article ;
try {
	$stmt = $dbcon->prepare("UPDATE promotion SET id=:id,nom=:nom,article=:article,description=:description,date_d=:date_d,date_f=:date_f,qt=:quantite,categorie=:categorie,aprix=:ap,nprix=:np WHERE id=:id") ;

	

	$num1 = (double) $ap;
	$num2 = (float) $np;

	  $taux=(($ap-$num2)*100)/$ap ;

	$stmt->bindParam(":id", $id) ;
	$stmt->bindParam(":nom", $nom) ;
	$stmt->bindParam(":article", $article) ;
	$stmt->bindParam(":date_d", $date_d) ;
	$stmt->bindParam(":date_f", $date_f) ;
	$stmt->bindParam(":description", $description) ;
  
    $stmt->bindParam(":np", $num2) ;
	$stmt->bindParam(":ap", $ap) ;
	$stmt->bindParam(":taux", $taux) ;
    $stmt->bindParam(":categorie", $categorie) ;
	$stmt->bindParam(":quantite", $quantite) ;
	$stmt->execute() ;
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Promotion modifier avec succé");
location="Gestions des promotions.php";
</script>
</script>
<body>
</body>
</html>
 
 <?php
}
catch (PDOException $e) {
  print "Error !" .$e->getMessage() . "<br/>" ;
  die() ;
  ?>

<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Une erreur c'est produit lors de la modification de cette promotion veuiller verifier les champs saisie !");
location="Gestions des promotions.php";
</script>
</script>
<body>
</body>
</html>
<?php
}

 ?>	