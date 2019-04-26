 <?php
        include "../core/promotionC.php";
        include "../config.php";
        $editid =$_GET['editid'] ;
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
    <title>Modification d'une promotion</title>

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

<style type="text/css">
    .hide {
  display: none;
}
</style>
<script language="JavaScript" type="text/javascript">
 function CloseAndRefresh() 
  {
     opener.location.reload(true);
     self.close();
  }



</script>

</head>

<body>
    <?PHP
                                            foreach($listepromotion as $row){
                                            ?>

     <form action="modifierPr.php?id=<?php echo $row['id'];?>" method="post" nctype="multipart/form-data">
        <br>
        <br>
        
   
                                        <div align="center"><strong>Promotion</strong></div>
                                         
                                

                                    <div class="card-body card-block">
                                       
                                            <div class="row form-group">
                                                
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Nom</label>
                                                </div>
                                                </div>

                                                   <div class="row form-group" style="width: 1100px;">
                                               
                                                <div class="col-12 col-md-9" style="width: 800px;">
                                                    <input type="text" id="text-input" name="nom" placeholder="Nom de la promotion.." class="form-control" required="required" value="<?php echo $row['nom'];?>" >

                                            
                                                </div>
                                            </div>
                                        </div>
                                            
                                                 
                                                <div class="card-body card-block">
                                                <div class="row form-group">

                                                    <div class="col col-md-3">
                                                    <label class=" form-control-label" id="image">Image de l'article</label>
                                                    <br>
                                                    <?php 
                                            $image_id=$row['article'] ;
                                             echo '<img src="'.$image_id.'" width="100" height="100" />'; ?>
                                                         <input type="file" name="image" />

                                                    </div>
                                                    </div>
                                                </div> 
                                                




                                                 <hr>
                    
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Durée de la promotion </p>
                                                </div>
                                            </div>
                                        </div>
<br>
                                            <div class="row form-group">
                                                <div class="col col-sm-3">
                                                    <label>Debut de la promotion</label>
                                                    <input type="Date" name="date_d" required="required" placeholder="Date de debut de la promotion" value="<?php echo $row['date_d'];?>"/>
                                                </div>
                                                </div>

                                                <div class="row form-group">
                                                <div class="col col-sm-3">
                                                    <label>Fin de la promotion</label>
                                                    <input type="Date" name="date_f" required="required" placeholder="Date de fin de la promotion" value="<?php echo $row['date_f'];?>"/>
                                                </div>
                                                </div>


                                                <hr>
                                                             <div class="card-body card-block">
                                       
                                            <div class="row form-group">
                                                
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Ancien prix</label>
                                                </div>
                                                </div>

                                                   <div class="row form-group" style="width: 1100px;">
                                               
                                                <div class="col-12 col-md-9" style="width: 800px;">
                                                    <input type="text" id="text-input"  name="ap" placeholder="Ancien prix .." class="form-control" required="required" value="<?php echo $row['aprix'];?>" >

                                                </div>
                                            </div>
                                        </div>

                                         <div class="card-body card-block">
                                       
                                            <div class="row form-group">
                                                
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Nouveau prix</label>
                                                </div>
                                                </div>

                                                   <div class="row form-group" style="width: 1100px;">
                                               
                                                <div class="col-12 col-md-9" style="width: 800px;">
                                                    <input type="text" id="text-input"  name="np" placeholder="Ancien prix .." class="form-control" required="required" value="<?php echo $row['nprix'];?>">

                                                </div>
                                            </div>
                                        </div>



                                        <div class="card-body card-block">
                                       
                                            <div class="row form-group">
                                                
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Quantité disponible </label>
                                                </div>
                                                </div>

                                                   <div class="row form-group" style="width: 1100px;">
                                               
                                                <div class="col-12 col-md-9" style="width: 800px;">
                                                    <input type="number" name="quantite" placeholder="Quantité disponible.." class="form-control" required="required" min="1" value="1" value="<?php echo $row['qt'];?>">

                                            
                                                </div>
                                            </div>
                                        </div>



                                         <div class="col col-md-3">
                                                    <label class=" form-control-label">Categorie</label>
                                                </div>


                                        <select class="form-control" name="categorie" value="<?php echo $row['categorie'];?>">
                                        <option  value="Categorie">Categorie</option>
                                        <option  value="Sallon"   >Sallon</option>
                                        <option  value="Chambre"   >Chambre</option>
                                        <option  value="Salle de bain">Salle de bain</option>
                                        <option  value="Cuisine">Cuisine</option>
                                        </select>
                                                <hr>

                                                <div class="card-body card-block">
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="desc" id="textarea-input" rows="9" placeholder="Contenue..." class="form-control"></textarea>
                                                </div>
                                            </div>   
                                        </div>

                                                <hr>

                                                <div class="card-body card-block">
                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input name="desc" id="textarea-input" rows="9"  class="form-control" value="<?php echo $row['description'];?>" height="100" >
                                                        
                                    



                                                </div>
                                            </div>   
                                        </div>
                                        <?PHP
}
?>
                                                <hr>
                                                     <div class="card-footer" align="center">
                                        <button type="submit" class="btn btn-primary btn-sm" onclick="controleP();" >

                                            <i class="fa fa-dot-circle-o"></i> Editer
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Annuler
                                        </button>

                                        <a href="../views/Gestions des promotions.php" class="btn btn-secondary">Retour </a>


</form>

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
    <script src="js/controle.js" ></script>
</body>

</html>
 </script>  
<!-- end document-->