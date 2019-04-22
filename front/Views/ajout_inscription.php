<?PHP
include ('../core/inscriptionEvC.php');
include ('../entities/inscriptionEv.php');

//$inCC=new InscriptionEvC();
//$total=$inCC->CalculIE($_GET['detid']) ;
if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['sexe']) and isset($_POST['email']) and isset($_POST['ville']) and isset($_POST['tel'])){
	
    $inE=new InscriptionEv($_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['email'],$_POST['ville'],$_POST['tel'],$_GET['detid']) ;

$inEC=new InscriptionEvC();
$inEC->ajouterI($inE);
$v=$_GET['detid'] ;
$inEC->moinE($v);
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Votre inscription a bien été envoyer");
 window.close();
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
alert("Une erreur c'est produite lors de l'envoi de votre inscription veuiller verifier les champs saisie !");
window.close();
</script>
</script>
<body>
</body>
</html>
 <?php
}
 ?>