<?PHP
include "../core/inscriptionEvC.php";
include "../config.php";
$eC=new InscriptionEvC();
$listeEvenement =$eC->getEvenement();
 ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Evenement</title>
<meta charset="UTF-8">
<meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Roboto);
body,h1,h2 {
  font-family: 'Roboto', sans-serif;
}
.overlay:hover {
opacity: 1;
cursor: pointer;
}
.overlay {
position: absolute;
width: 100%;
height: 100%;
opacity: 0;
transition: all 0.35s ease;
-webkit-transition: all 0.35s ease;
-moz-transition: all 0.35s ease;
-o-transition: all 0.35s ease;
-ms-transition: all 0.35s ease;
border-radius: inherit;
left: 0;
top: 0;
bottom: 0;
right: 0;
}
.overlay {
background-color: rgba(33,154,200,0.75);
}
</style>
<script type="text/javascript">
	$('#myTab a').click(function (e) {
	 e.preventDefault();
	 $(this).tab('show');
});

$(function () {
$('#myTab a:last').tab('show');
})
</script>
</head>
<body>

 <!-- header_top -->
<div class="top_bg">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="#">Aide</a></li>|
					<li><a href="contact.html">Contact</a></li>|
					<li><a href="evenement.php">Evenement</a></li>
				</ul>
			</div>
			<div class="top_left">
				<h2><span></span> 54 168 811</h2>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- header -->
<div class="header_bg">
<div class="container">
	<div class="header">
	<div class="head-t">
		<div  style="float: left; margin-right: 100px;  width: 15px;">
			<a href="index.html"><img src="images/wapi_final.png"alt=""/> </a>
		</div>
        
        
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
				<div class="log">
					<div class="login" >
						<div  id="loginContainer" style="margin-top: 20px;"><a href="#" id="loginButton" ><span style="margin-top: 20px;">login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Adresse Email</label>
						                          <input type="text" name="email" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Mot de Passe</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Se souvenir de moi </i></label>
						            	</fieldset>
						            <span><a href="#"> Mot de pase oublié</a></span>
								</form>
							</div>
						</div>
					</div>
				</div>
				
			<div class="cart box_1">
				<a href="checkout.html">
					<h3> <span class="simpleCart_total">0.00 DT</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> article(s))<img src="images/bag.png" alt=""></h3>
				</a>	
				<p><a href="javascript:;" class="simpleCart_empty">(carte vide)</a></p>
				<div class="clearfix"> </div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
		<div class="search">
		    <form>
		    	<input type="text" value="" placeholder="chercher...">
				<input type="submit" value="">
                
			</form>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
		<!-- start header menu -->
		<ul class="megamenu skyblue" style="width: 1280px;" >
<li class="grid"><a class="color2" href="#">   Acceuil </a> </li>
			<li class="active grid"><a class="color1" href="index.html">Cuisines</a></li>
			<li class="grid"><a class="color2" href="#">Dressings</a> </li>
		<li class="active grid"><a class="color1" href="index.html">	Meuble Salle de bain </a> </li>
            
			<li class="grid"><a class="color2" href="#">  	Salon</a>
				<div class="megapanel" style="width: 500px;" "float: right";>
				
						
							<div class="h_nav">
								<ul>
									<li><a href="women.html">Séjour</a></li>
									<li><a href="women.html">Tables basses</a></li>
									<li><a href="women.html">Tables TV</a></li>
                                    <li><a href="women.html">Salle à manger</a></li> 
								</ul>	
							</div>							
					
                 
                    </div>
					<li class="active grid"><a class="color1" href="index.html"> Meuble de jardin </a> </li>
        <li class="grid"><a class="color2" href="#">Accessoires et décoration</a></li>
              
        </ul>
    </div>
    </div>
    </div>   

    <div class="map">
     	<img src="map.jpg" alt="" width="1250">
     </div>  

      
  <div class="col-md-12"><h2>Evènements à venir</h2></div>
  <?PHP
             foreach($listeEvenement as $row){
             	
         ?>
<a href="detail.php?detid=<?php echo $row['id'];?> "
                                     target="popup" 
                                    onclick="window.open('detail_evenement_i.php?detid=<?php echo $row['id'];?>','popup','width=600,height=600'); return false;">

         <div class="col-sm-4" >
  	
    <div class="thumbnail">
      <div class="overlay">
        <i class="fa fa-share md"></i>
      </div>
      <?php 
              $image_id=$row['image'] ;
              //echo '<img src="'.$image_id.'" width="50" height="50" />'; 

      echo '<img class="img-responsive" alt="a" src="'.$image_id.'" />' ?>
    </div>
    <div class="row">
      <div class="col-md-3">
      	   <?php 
      	$td=date("Y-m-d") ;
		$dd=$td ;
		list($y, $m, $d) = explode('-', $dd);
$a_mois = array ( '01' => 'Javn.', '02' => 'Févr.','03' => 'Mars','04' => 'Avr.','05' => 'Mai','06' => 'Juin','07' => 'Juill.','08' => 'Aout' ,'09' => 'Sept','10' => 'Oct.','11' => 'Nov.','12' => 'Déc.');
				$d=$row['date_d'];
			list($y, $m, $d) = explode('-', $d);
							    
?>
        <h3><span class="label label-info"><?php echo "$d $a_mois[$m]";?>
</span></h3>
      </div>
      <div class="col-md-9">
          <strong><?php echo $row['nom'];?></strong><br>
          <em>A <?php echo $row['ville'];?></em><br>
          <span class="small"><?php echo $row['date_d'];?>
 - <?php echo $row['date_f'];?>
</span>
      </div>
    </div>
</a>
  </div> 

     <?PHP
}
?>

 

	<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 

	
<div class="foot-top">
	<div class="container">
		<div class="col-md-6 s-c">
			<li>
				<div class="fooll">
					<h5>Trouvez-nous sur les réseaux sociaux</h5>
				</div>
			</li>
			<li>
				<div class="social-ic">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
						<li><a href="#"><i class="be"> </i></a></li>
						<li><a href="#"><i class="pp"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
				</div>
			</li>
				<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 s-c">
			<div class="stay">
						<div class="stay-left">
							<form>
								<input type="text" placeholder="Entrez votre adresse pour s'abonner aux newsletters" required="">
							</form>
						</div>
						<div class="btn-1">
							<form>
								<input type="submit" value="s'abonner">
							</form>
						</div>
							<div class="clearfix"> </div>
			</div>
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 cust">
			<h4>SERVICE CLIENT</h4>
				<li><a href="#">Centre d'aide </a></li>
				<li><a href="#">FAQ</a></li>
			
				<li><a href="#">Livraison</a></li>
		</div>
		<div class="col-md-2 abt">
			<h4>A PROPOS DE NOUS </h4>
				<li><a href="#">Nos Stories</a></li>
				<li><a href="contact.html">Contact</a></li>
		</div>
		<div class="col-md-2 myac">
			<h4>MON COMPTE</h4>
				<li><a href="register.html">S'inscrire</a></li>
				<li><a href="#">Mon panier</a></li>
			
				<li><a href="buy.html">Paiement</a></li>
		</div>
		<div class="col-md-5 our-st">
			<div class="our-left">
				<h4>NOS MAGASINS</h4>
			</div>
			<div class="our-left1">
				<div class="cr_btn">
					<a href="#">SOLO</a>
				</div>
			</div>
			<div class="our-left1">
				<div class="cr_btn1">
					<a href="#">BOGOR</a>
				</div>
			</div>
			<div class="clearfix"> </div>
				<li><i class="add"> </i>Jl. Haji Muhidin, Blok G no.69</li>
				<li><i class="phone"> </i>025-2839341</li>
				<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
			
		</div>
		<div class="clearfix"> </div>
			<p>Copyrights © 2015 Gretong. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
</body>
</html>
