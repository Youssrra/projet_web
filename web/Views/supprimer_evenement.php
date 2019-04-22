<?php
include "../config.php";
include "../core/EvenementC.php";
$eC=new EvenementC();
$t=$eC->deleteEvenement($_GET['delid']);
if ($t== 1) {
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Evenement supprimer avec succé");
location="Gestions des evenements.php";
</script>
</script>
<body>
</body>
</html>
<?php
}
else {
echo "" ;
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Impossible de supprimer cette évenement");
location="Gestions des evenements.php";
</script>
</script>
<body>
</body>
</html>
<?php
}
?>