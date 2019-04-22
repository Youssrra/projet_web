<?PHP
include "../core/evenementC.php";
include "../Entities/evenement.php";
include "../config.php";
$dbcon= config::getConnexion();

$id = $_GET['id'] ;
$nom = $_POST['nom'] ;
$optionn = $_POST['optionn'] ;
$ville = $_POST['ville'] ;
$etat = $_POST['etat'] ;
$addrese = $_POST['addrese'] ;
$date_d = $_POST['date_d'] ;
$date_f = $_POST['date_f'] ;
$fin_insc = $_POST['fin_insc'] ;
$description = $_POST['desc'] ;
$image = $_POST['image'] ;
$num = $_POST['num'] ;

$image="image_evenement/".$image ;
try {
	$stmt = $dbcon->prepare("UPDATE event SET id=:id,nom=:nom,
											  ville=:ville,
											  addrese=:addrese,
											  optionn=:optionn,
											  etat=:etat,
											  description=:description,
											  date_d=:date_d,
											  date_f=:date_f,
											  fin_insc=:fin_insc,
											  nb_insc=:num,
											  image=:image 
											  WHERE 
											  id=:id") ;
	$stmt->bindParam(":id", $id) ;

	$stmt->bindParam(":nom",$nom) ;
	$stmt->bindParam(":ville",$ville) ;
	$stmt->bindParam(":addrese",$addrese) ;
	$stmt->bindParam(":optionn",$optionn) ;
	$stmt->bindParam(":etat",$etat) ;
	$stmt->bindParam(":description", $description) ;
	$stmt->bindParam(":date_d", $date_d) ;
	$stmt->bindParam(":date_f", $date_f) ;
	$stmt->bindParam(":fin_insc", $fin_insc) ;
	
	$stmt->bindParam(":num", $num) ;
	$stmt->bindParam(":image", $image) ;

	$stmt->execute() ;
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Evenement modifier avec succé");
location="Gestions des evenements.php";
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
alert("Une erreur c'est produit lors de la modification de cette évenement veuiller verifier les champs saisie !");
location="Gestions des evenements.php";
</script>
</script>
<body>
</body>
</html>
<?php
}

 ?>	