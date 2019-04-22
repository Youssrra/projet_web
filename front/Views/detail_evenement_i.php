<?PHP
include "../core/inscriptionEvC.php";
include "../config.php";
$editid =$_GET['detid'] ;
$iC=new InscriptionEvC();
$listeEvenement =$iC->getEvenementD($editid);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .bouton {
    border-radius:12px 0 12px 0;
    background: #478bf9;
    border:none;
    color:#fff;
    font:bold 12px Verdana;
    padding:6px 0 6px 0;
}
    </style>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Detail de l'evenement</title>

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
                                            foreach($listeEvenement as $row){
                                            ?>
                                    <h3 class="title-3 m-b-30">Evenement</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                

                                            <tbody>
                                                
                                                <tr>
                                                    <td>Nom</td>
                                                    <td><?php echo $row['nom'];?></td>
                                                </tr>

                                                <tr>
                                                    <td>Option</td>
                                                    <td><?php echo $row['optionn'];?></td>
                                                </tr>

                                                <tr>
                                                    <td>Cloture des inscription</td>
                                                    <td><?php echo $row['fin_insc'];?></td>
                                                </tr>

                                                <tr>
                                                    <td>Date de debut</td>
                                                    <td><?php echo $row['date_d'];?></td>
                                                </tr>

                                                <tr>
                                                    <td>Date de fin</td>
                                                    <td><?php echo $row['date_f'];?></td>
                                                </tr>

                                                <td><strong>Lieu</strong></div><td>

                                                <tr>
                                                    <td>Ville</td>
                                                    <td><?php echo $row['ville'];?></td>
                                                </tr>
                                                

                                                <tr>
                                                    <td>Etat/Provence</td>
                                                    <td><?php echo $row['etat'];?></td>
                                                </tr>
                        
                                                <tr>
                                                    <td>Addresse</td>
                                                    <td><?php echo $row['addrese'];?></td>
                                                </tr>
                                                <td><strong>Information suplementaire</strong></div><td>
                                                    <tr>
                                                    <br>
                                                    <td>Dercription</td>
                                                    <td><?php echo $row['description'];?></td>
                                                </tr>
 <tr>
                                                    <td>Image</td>
                                            <td><?php 
                                            $image_id=$row['image'] ;
                                             echo '<img src="'.$image_id.'" width="100" height="100" />'; ?></td>
                                                
                                                </tr>
  <?PHP
}
?>
                                            
                                                        </tbody>
                                        </table>
                                        <a href="inscription_evenement.php?detid=<?php echo $row['id'];?> "
                                     target="popup" 
                                    onclick="window.open('inscription_evenement.php?detid=<?php echo $row['id'];?>','popup','width=600,height=600'); return false;">
                                        <button type="submit" class="bouton" id="insert" name="submit" >Inscription</button></a>
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
