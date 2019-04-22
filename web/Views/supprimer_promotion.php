<?php
include "../config.php";
include "../core/promotionC.php";
$pC=new PromotionC();
$t=$pC->deletePromotion($_GET['delid']);
if ($t==1) {
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
alert("Promotion supprimer avec succé");
location="Gestions des promotions.php";
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
alert("Impossible de supprimer cette promotion");
location="Gestions des promotions.php";
</script>
</script>
<body>
</body>
</html>
<?php
}
?>


 
