<?PHP
include "../core/evenementC.php";
include "../Entities/evenement.php";
include "../config.php";

if (isset($_POST['nom']) and isset($_POST['ville']) and isset($_POST['addr']) and isset($_POST['optionn']) and isset($_POST['etat']) and isset($_POST['image']) and isset($_POST['date_d']) and isset($_POST['date_f']) and isset($_POST['desc']) and isset($_POST['fin_insc'])){

   
  
$ev =new Evenement ($_POST['nom'],
					$_POST['ville'],
					$_POST['addr'],
					$_POST['optionn'],
					$_POST['etat'],
					$_POST['fin_insc'],
					$_POST['image'],
					$_POST['date_d'],
					$_POST['date_f'],
					$_POST['desc'],
					$_POST['num'] );



var_dump($ev);
$evC=new EvenementC();
$evC->ajouterE($ev);
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Evenement ajouter avec succé");
location="ajout_evenement.php";
</script>
</script>
<body>
</body>
</html>
 <?php
}
else{
	echo "vérifier les champs";

 ?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Une erreur c'est produit lors de l'ajout de l'evenement veuiller verifier les champs saisie !");
location="ajout_evenement.php";
</script>
</script>
<body>
</body>
</html>
 <?php
}
 ?>