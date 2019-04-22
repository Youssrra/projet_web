<?PHP
include "../core/loginC.php";
include "../Entities/inscription_login.php";
include "../config.php";

if (isset($_POST['login']) and isset($_POST['pwd']) and isset($_POST['email']) ) 
{
  
$i =new Inscription ($_POST['login'],
					$_POST['pwd'],
					$_POST['email'] );



var_dump($i);
$iC=new InccriptionC();
$iC->ajouterA($i);
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Vous ete maintenant un membre ");
location="login.html";
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
alert("Une erreur c'est produit lors de l'envois de vos données veuiller verifier les champs saisie !");
location="register.html";
</script>
</script>
<body>
</body>
</html>
 <?php
}
 ?>