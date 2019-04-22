<?PHP
include "../core/promotionC.php";
include "../Entities/promotion.php";
include "../config.php";
if (isset($_POST['nom']) and isset($_POST['image']) and isset($_POST['date_d']) and isset($_POST['date_f']) and isset($_POST['desc'])){

  
$pr=new Promotion($_POST['nom'],$_POST['image'],$_POST['date_d'],$_POST['date_f'],$_POST['desc']);

//var_dump($pr);
$prC=new PromotionC();
$prC->ajouterP($pr);
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Promotion ajouter avec succé");
location="ajout_promotion.php";
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
alert("Une erreur c'est produit lors de l'ajout de la promotion veuiller verifier les champs saisie !");
location="Gestions des promotions.php";
</script>
</script>
<body>
</body>
</html>
 <?php
}
 ?>