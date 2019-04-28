<?PHP
include "../core/promotionC.php";
include "../config.php";
$editid =$_GET['detid'] ;
$pC=new PromotionC();
$listepromotion =$pC->getPromotion($editid);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Detail de la promotion</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <?PHP
                                            foreach($listepromotion as $row){
                                            ?>
                                    <h3 class="title-3 m-b-30">Promotion</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                
                                                <tr>
                                                    <td>Identifiant</td>
                                                    <td><?php echo $row['id'];?></td>

                                                </tr>
                                                <tr>
                                                    <td>Nom</td>
                                                    <td><?php echo $row['nom'];?></td>
                                                </tr>

                                                <tr>
                                                    <td>Date de debut</td>
                                                    <td><?php echo $row['date_d'];?></td>
                                                </tr>

                                                <tr>
                                                    <td>Date de fin</td>
                                                    <td><?php echo $row['date_f'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Categorie</td>
                                                    <td><?php echo $row['categorie'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Ancien pric</td>
                                                    <td><?php echo $row['aprix'];?>DT.</td>
                                                </tr>

                                                <tr>
                                                    <td>Nouveau prix </td>
                                                    <td><?php echo $row['nprix'];?>DT.</td>
                                                </tr>
                                                <tr>
                                                    <td>Taux de la promotion </td>
                                                    <td><?php echo $row['taux'];?>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Quantiter</td>
                                                    <td><?php echo $row['qt'];?></td>
                                                </tr>

                                                    <br>
                                                    <td>Dercription</td>
                                                    <td><?php echo $row['description'];?></td>
                                                </tr>

                                                <tr>
                                                    <td>Article</td>
                                            <td><?php 
                                            $image_id=$row['article'] ;
                                             echo '<img src="'.$image_id.'" width="100" height="100" />'; ?></td>
                                                
                                                </tr>
  <?PHP
}
?>
                                            
                                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--  END TOP CAMPAIGN-->


                                 <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
