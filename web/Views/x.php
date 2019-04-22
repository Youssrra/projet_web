<?PHP
include "../core/promotionC.php";
include "../config.php";
$pC=new PromotionC();

 $x= $_POST['x'];
 $dd="date_d" ;
 $df="date_f" ;
$xx= $_POST['xx'];
 if(isset($_POST['filtre']) && $trier != "trien")
{
   
    $listepromotion=$pC->getOrderPromotionT($xx);
}
else
{
    $listepromotion =$pC->getAllPromotion();
}
?>
<!DOCTYPE html>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Gestions des promotions</title>

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

 <!-- Pop up script -->    
<script language="JavaScript">

</script>


 <!-- End of popp uos-->
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
      

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
           

            
                                <!--  Data table-->
                            <br><br><br><br>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <form action="" method="POST">
                                 <h3 class="title-5 m-b-35">Promotions</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select name="x" >
                                                <option value="rien">Regrouper par</option>
                                                <option value="date_d" >Date de debut</option>
                                                <option value="date_f">Date de fin</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select  name="xx">
                                                <option selected="selected" value="promu">promu</option>
                                                <option value="today">Aujourd'hui</option>
                                                <option value="week">Cette semaine</option>
                                                <option value="month">Ce mois ci</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                       
                               
                                <button  type="submit" name="filtre" class="btn btn-primary btn-sm" >
                                
                                </button>
                                       

                                             </form>

                                    </div>
                                    <div class="table-data__tool-right">
                                        <input class="au-btn au-btn-icon au-btn--green au-btn--small" type=button value="Ajouter" onClick="javascript:popUp('ajout_promotion.php')">

                                            

                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option >Exporter</option>
                                                <option value="">PDF</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                            
                                                <th>Id</th>
                                                <th>Nom</th>
                                                <th>Article</th>
                                                <th>date debut</th>
                                                <th>date fin</th>
                                                <th>Description</th>
                                            
                                        </thead>
                                        <tbody>
                                            <?PHP
                                            foreach($listepromotion as $row){
                                            ?>
                                            <tr class="tr-shadow">
                                                 <td><?php echo $row['id'];?></td>
                                                <td><?php echo $row['nom'];?></td>
                                                <td class="desc"><?php 
                                            $image_id=$row['article'] ;
                                             echo '<img src="'.$image_id.'" width="50" height="50" />'; ?></td>
                                                 <td><?php echo $row['date_d'];?></td>
                                               <td><?php echo $row['date_f'];?></td>
                                                   <td><?php echo $row['description'];?></td>
                                                    <td><?php echo $xx ?></td>

                                                
                                                <td>
                                                    <div class="table-data-feature">
                                            
                                                       
                                                        
<button class="item" data-toggle="tooltip" data-placement="top" title="Supprimer">
    <a href="supprimer_promotion.php?delid=<?php echo $row['id'];?>">
     <i class="zmdi zmdi-delete"></i>
</a>
 </button>

 <button class="item" data-toggle="tooltip" data-placement="top" title="Editer">
    <a href="modifier_promotion.php?editid=<?php echo $row['id'];?>">
     <i class="zmdi zmdi-edit"></i>
</a>
 </button>

  <button class="item" data-toggle="tooltip" data-placement="top" title="Detail">
     
      <a href="detail_promotion.php?detid=<?php echo $row['id'];?> "  target="_blank">
<i class="zmdi zmdi-eye"></i>
    
</a>
 </button>

                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr class="spacer"></tr>
                                                                
                                            </tr>
                                               <?PHP
}
?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Wappi. All rights reserved. by <a href="https://colorlib.com">Minds blowers</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
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

    <script src="js/popup.js"></script>

</body>

</html>

