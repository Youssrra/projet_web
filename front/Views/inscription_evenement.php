<link href="stylesheet-register.css" rel="stylesheet" id="bootstrap-css">
<!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>>-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--<script src="inscri_controle.js"></script>


<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<script src="inscri_controle.js"></script>
</head>
<body>

<div class="container" >
    <h1 class="well">Inscription</h1>
	<div class="col-lg-12 well">
	<div class="row">
		
<?php $detid=$_GET['detid']?>
		 <form method="post" action="ajout_inscription.php?detid=<?php echo $detid;?>" name="f" autocomplete="on" >
					<div class="col-sm-12">
						
<input type="hidden" name="id" value="<?php echo($detid) ;
?>" >
						<div class="row">
    						<div class="col-sm-6 form-group">
    							<label>Nom</label>
    							<input type="text" name="nom" placeholder="Enter votre Nom.." class="form-control">
    						</div>
    						<div class="col-sm-6 form-group">
    							<label>Prénom</label>
    							<input type="text" name="prenom" placeholder="Enter votre Prénom.." class="form-control">
    						</div>
	                    </div>
	                    <div >
  <label>Sexe</label>
  <div>
    <label>
      <input name="sexe" value="Homme" checked="checked" type="radio">
      Homme
    </label>
    <label>
      <input name="sexe" value="Femme" type="radio">
      Femme
    </label>
  </div>
</div><br>
    					<div class="form-group">
    						<label>Addresse Email</label>
    						<input type="text" name="email" placeholder="Enter votre Addresse Email.." class="form-control">
    					</div>	                    
						<div class="row">
						    <div class="col-sm-6 form-group">
								<label>Ville</label>
								<input type="text" name="ville" placeholder="Enter votre Ville.." class="form-control">
							</div>	
						</div>

						<div class="row">
						    <div class="col-sm-6 form-group">
								<label>Cellulaire</label>
								<input type="text" name="tel" placeholder="Enter votre Cellulaire..." class="form-control">
							</div>	
						</div>
				
					
                                    <div class="card-footer" align="center">

                                        <button type="submit" class="btn btn-primary btn-sm" id="insert" name="submit" style=" background-color: #FFFFFF ; color: #000000 " >

                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm" >
                                            <i class="fa fa-ban" ></i> Reset
                                        </button>
                                    </div>				
					</div>
				</form> 
				</div>
	</div>
	</div>
</body>
</html>