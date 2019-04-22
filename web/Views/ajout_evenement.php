<?php include "../config.php"; ?>
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
    <title>Evenement</title>

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
     <form action="ajoutEv.php" method="post" nctype="multipart/form-data">
        <br>
        <br>
        
   
                                        <div align="center"><strong>Evénement</strong></div>
                                       
                                    

                                    <div class="card-body card-block">
                                       
                                            <div class="row form-group">
                                                
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Nom</label>
                                                </div>
                                                </div>

                                                   <div class="row form-group" style="width: 1100px;">
                                               
                                                <div class="col-12 col-md-9" style="width: 800px;">
                                                    <input type="text" id="text-input" name="nom" placeholder="Nom de l'événement.." class="form-control" required="required" >

                                            
                                                </div>
                                            </div>
                                        </div>
                                            
                                                
                                                <div class="card-body card-block">
                                                <div class="row form-group">

                                                    <div class="col col-md-3">
                                                    <label class=" form-control-label" id="image">Image</label>
                                                         <input type="file" name="image" />

                                                    </div>
                                                    </div>
                                                </div>
                                                




<hr>

    
                                    

                                                 <div class="row form-group">

                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Options de l'événement</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <label class="form-check-label ">
                                                                <input type="radio" name="optionn" value="public" class="form-check-input" >Public
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label class="form-check-label ">
                                                                <input type="radio" name="optionn" value="priver" class="form-check-input">Priver
                                                            </label>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                   
                                          <div id="date_cloture">
                                             <hr>
                                               <div class="card-body card-block" >
                                            <div class="row form-group">
                                                
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Clôture des inscriptions </p>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-sm-3">
                                                    <label>Date :</label>
                                                    <input type="Date" name="fin_insc" placeholder="Date de clôture des inscriptions"/>
                                                </div>
                                                </div>
                                          </div>
                                      </div>

                                                <hr>

                                                <div class="card-body card-block">
                                            <div class="row form-group">
                                                
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Lieu </p>
                                                </div>
                                            </div>
                                        </div>
                                            
                                               

                                                <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-sm-3">
                                                    <label>ville</label>
                                                    <input type="text" name="ville" placeholder="ville.." class="form-control" required="required">
                                                </div>
                                                </div>
                                            </div>

                                                 <div class="row form-group">
                                                <div class="col col-sm-3">
                                                    <label>Etat/Province</label>
                                                    <input type="text" name="etat" placeholder="Tunis,Manouba.." class="form-control" required="required">
                                                </div>
                                                </div>

                                                    <div class="row form-group">
                                                <div class="col col-sm-3">
                                                    <label>Adresse</label>
                                                    <input type="text" name="addr" placeholder="2 Rue le caire..." class="form-control" required="required">
                                                </div>
                                            </div>

                                            <hr>

                                                <div class="card-body card-block">
                                            <div class="row form-group">
                                                
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Programme de l'évenement </p>
                                                </div>
                                            </div>
                                        </div>

                                            <div class="row form-group">
                                                <div class="col col-sm-3">
                                                    <label>Debut de l'évenement</label>
                                                    <input type="Date" name="date_d" required="required" placeholder="Date du debut de l'évenement"/>
                                                </div>
                                                </div>

                                                <div class="row form-group">
                                                <div class="col col-sm-3">
                                                    <label>Fin de l'évenement</label>
                                                    <input type="Date" name="date_f" required="required" placeholder="Date de fin de l'évenement"/>
                                                </div>
                                                </div>

                                                

                                                <hr>
                                                 <div class="card-body card-block">
                                       
                                            <div class="row form-group">
                                                
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Nombre d'inscriptions </label>
                                                </div>

                                            </div>
                                           <div class="row form-group" style="width: 1100px;">
                                               
                                                <div class="col-12 col-md-9" style="width: 800px;">
                                                    <input type="number" id="text-input" name="num" placeholder="Nombre d'inscriptions a l'événement.." class="form-control" required="required" >

                                            
                                                </div>
                                            </div>
                                        </div>

                                                <div class="card-body card-block">
                                            <div class="row form-group">
                                                
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Information additionelle</p>
                                                </div>
                                            </div>


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
                 
                        
                                    <div class="card-footer" align="center">
                                        <button type="submit" class="btn btn-primary btn-sm" onclick="controle();" id="insert" name="insert" >

                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>


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
        <script src="js/controle.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/controle.js" ></script>
</body>

</html>
 </script>  
<!-- end document-->