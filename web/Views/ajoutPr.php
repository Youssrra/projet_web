<?PHP
include "../core/promotionC.php";
include "../Entities/promotion.php";
include "../config.php";
if (isset($_POST['nom']) and isset($_POST['image']) and isset($_POST['date_d']) and isset($_POST['date_f']) and isset($_POST['desc']) and isset($_POST['ap']) and isset($_POST['np'])and isset($_POST['quantite']) and isset($_POST['categorie'])) {
	if (!empty($_POST['nom']) and !empty($_POST['image']) and !empty($_POST['date_d']) and !empty($_POST['date_f']) and !empty($_POST['desc']) and !empty($_POST['ap']) and !empty($_POST['np'])and !empty($_POST['quantite']) and !empty($_POST['categorie'])) {

  
$pr=new Promotion($_POST['nom'],$_POST['image'],$_POST['date_d'],$_POST['date_f'],$_POST['desc'],$_POST['ap'],$_POST['np'],$_POST['categorie'],$_POST['quantite']);

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
}}
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