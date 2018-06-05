<?php

 try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=ablatech;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $req = "SELECT * FROM cameras";

    $cameras = $bdd->query($req);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
     
    <title>ELECTROTECH online Shopping </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->

	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/> 
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
  
	<style type="text/css" id="enject"></style>
  </head>
<body>
 

<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
       
  	  <div class="navbar-inner" style="color:pink"> 

    <a class="brand" href="index.php"><img src="themes/images/logoo.png" alt="ABLATECH"/></a>
	
     <ul  id="topMenu" class="nav pull-right">
	   <li class=""><a href="contact.html"> CONTACT US <img src="themes/images/no.jpg"/></a></li>
	   <li class=""><a href="aboutus.html"> ABOUT US  <img src="themes/images/yes.jpg"/></a></li>
         

	    <li class=""> 	
	      <a href="#signin" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">sign in</span></a>
	       <div id="signin" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="signin" aria-hidden="false" >
		   <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>sign in</h3>
		    </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm" action="ajouterUtilisateur.php" method="POST" >
			  <div class="control-group">								
				<input type="text" id="inputfirstname" placeholder="first name" name="first_name" required/>
			  </div>
			  <div class="control-group">								
				<input type="text" id="inputlastname" placeholder="last name" name="last_name" required/>
			  </div>
			  <div class="control-group">								
				<input type="Email" id="inputemail"  placeholder="Email" name="e_mail" required/>
			  </div>
			  <div class="control-group">
				<input type="password" id="inputpassword" placeholder="Password" name="password" required/>
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
			  <input type="submit" class="btn btn-success">

			</form>		
			<div class="modal-footer">
			<button type="button" data-dismiss="modal" aria-hidden="true">Close</button>
		    </div>
		  </div>
	</div>
     </li>

	 <li class="">
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login </h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm" action="type.php" method="POST" >
			  <div class="control-group">																
				<input type="Email" id="inputemail" placeholder="Email" name="e_mail" required/>
			  </div>
			  <div class="control-group">
				<input type="password" id="inputpassword" placeholder="Password" name="password" required/>
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
				
			<input type="submit" class="btn btn-success" required/>
			</form>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>



<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="themes/images/carousel/12.jpg" alt=""/></a>
				
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="themes/images/carousel/14.jpg" alt=""/></a>
			<div class="carousel-caption">
				  
			</div>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="themes/images/carousel/15.jpg" alt=""/></a>
			
		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>


<div id="mainBody">
	<div class="container">
	<div class="row">
		<div id="sidebar" class="span3">
		
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> ELECTRONICS</a>
				<ul>
				<li><br></li>
				<li><a href="Cameras.html"><i class="icon-chevron-right"></i>Cameras</a></li>
				<li><br></li>
				<li><a href="Computers.html"><i class="icon-chevron-right"></i>Computers</a></li>
				<li><br></li>
				<li><a href="mobliephone.html"><i class="icon-chevron-right"></i>Mobile Phone </a></li>
				<li><br></li>
				<li><a href="Sound.html"><i class="icon-chevron-right"></i>Sound  </a></li>
				<li><br></li>
				<li><a href="Sound.html"><i class="icon-chevron-right"></i> Vision </a></li>
				<li><br></li>
				<li><a href="Sound.html"><i class="icon-chevron-right"></i>tablets </a></li>
				<li><br></li>
				<li><a href="Sound.html"><i class="icon-chevron-right"></i>laptop </a></li>
				<li><br></li>
				<li><a href="Sound.html"><i class="icon-chevron-right"></i>mouse </a></li>
				<li><br></li>
				<li><a href="Sound.html"><i class="icon-chevron-right"></i>Equipments </a></li>				
				</ul>
			
				</li>
		</ul>

	    </div>
	 

		<h2 align="center">cameras</h2>
		<ul class="thumbnails">
				


		<?php
              foreach ($cameras as $cameras) {
                 
                 echo '
                 
                  
                 <li class="span3">
				  <div class="thumbnail">
				  <a  href="'.$cameras["path"].'"><img src="'.$cameras["path"].'" alt=""/></a>
				  <div class="caption">


					  <h5>'.$cameras["name"].'</h5>
					  <p> 
						 '.$cameras["description"].'
					  </p>
					  <h4 style="text-align:center"> price :'.$cameras["price"].' </a></h4>

	                   <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-primary ">buy now </span></a>

					</div>
				</div> 
				</li>
				';


              
              }

             
              ?>
          </div>
      </div>
  </div>
</ul>
</div>
</div>
</div>


              
		
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
				
			<div id="socialMedia" class="span4 pull-right">
				<h3>Join Us On SOCIAL MEDIA </h3>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
			 <div class="span3">
				<h4>FORM MORE INFORMATION</h4>
				<a href="contact.html">CONTACT</a>  
				<a href="register.html">REGISTRATION</a>  
				
			 </div>
			<div class="span3">
				<h4>LEARN MORE ABOUT OUR OFFERS</h4>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				
			 </div>
		 </div>
	</div><!-- Container End -->
	</div><!-- Container End -->
	</div>

<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>


	

	
</div>
<span id="themesBtn"></span>
</body>
</html>