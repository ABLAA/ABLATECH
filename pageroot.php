<?php

 try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=ablatech;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $req = "SELECT * FROM latestproduct";

    $latestproduct = $bdd->query($req);
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
       
  	<div class="navbar-inner" style="color:red"> 
    <a class="brand" href="pageroot.php" ><img src="themes/images/logoo.png" alt="ABLATECH"/> </a>
	 <ul  id="topMenu" class="nav pull-right">
      <li class=""> 	
      <br>
	  <button class="btn btn-success " data-toggle="modal" data-target="#ajoutModal" > add product </button>
    <!-- Modal -->
    <div class="modal fade" id="ajoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD PRODUCT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form enctype="multipart/form-data" method="POST" action="ajouterproduit.php"> 
            <div class="form-row">

              <div class="form-group col-md-6">
                <label for="inputname">NAME</label>
                <input type="text" name="name" class="form-control" id="aj_name" placeholder="name" required/>
              </div>
              <div class="form-group col-md-6">
                <label for="inputprice">PRICE</label>
                <input type="text" name="price" class="form-control" id="aj_price" placeholder="price" required/>
              </div>
              <div class="form-group col-md-6">
                <label for="inputprice">image</label>
                <input type="file" name="file" class="form-control" id="aj_price" placeholder="price" required/>
              </div>
            </div>
            <div class="form-row">
        
              <div class="form-group col-md-6">
                  <label for="inputdescription">description</label>
                  <input type="text" name="description" class="form-control" id="aj_description" placeholder="description" required/>
              </div>
            </div> 
          <input type="submit" value="confirm" class="btn btn-danger" >
      </form>
        </div>
      </div>
  </div>
</div>
</li>


  
      <li class="">
      <a href="#delete" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-md btn-danger">delete</span></a>
	  <div id="delete" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="signin" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>delete product</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm" action="delete.php" method="POST">
			  <div class="control-group">								
				<input type="text" id="inputfirstname" placeholder="product name" name="name" required/>
			  </div>
			  <br>
			  <input type="submit" value="confirm" class="btn btn-danger">
			</form>
		  </div>

    </div>
    </div>

</ul>
	
    
</div>
</div>
    <div class="Container">
	<a href="message.php"  >  <h2 style="margin-left: 1200px"> mail box </h2> </a>
</div>


<div id="mainBody">
	<div class="container">
	<div class="row">
		<div id="sidebar" class="span3">
		
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> ELECTRONICS </a>
				<ul>
				<li><br></li>
				<li><a href="Camerasroot.php"><i class="icon-chevron-right"></i>Cameras</a> <a href="#deletecameras" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-danger">delete all</span></a></li>
				<div id="deletecameras" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="deletecameras" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>please confirm the categorie name </h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm" action="deleteall.php" method="POST">
			  <div class="control-group">								
				<input type="text" id="inputfirstname" placeholder="product name" name="name" required/>
			  </div>
			  <br>
			  <input type="submit" value="confirm" class="btn btn-danger">
			</form>
		  </div>

          </div>
				<li><br></li>
				<li><a href="Computers.html"><i class="icon-chevron-right"></i>Computers</a><a role="button" href="Camerasroot.php"><span class="btn btn-danger">delete all</span></li>
				<li><br></li>
				<li><a href="mobliephone.html"><i class="icon-chevron-right"></i>Mobile Phone </a><a role="button" href="Camerasroot.php"><span class="btn btn-danger">delete all</span></li>
				<li><br></li>
				<li><a href="Sound.html"><i class="icon-chevron-right"></i>Sound  </a><a role="button" href="Camerasroot.php"><span class="btn btn-danger">delete all</span></li>
				<li><br></li>
				<li><a href="Sound.html"><i class="icon-chevron-right"></i> Vision </a><a role="button" href="Camerasroot.php"><span class="btn btn-danger">delete all</span></li>
				<li><br></li>
				<li><a href="Sound.html"><i class="icon-chevron-right"></i>tablets </a><a role="button" href="Camerasroot.php"><span class="btn btn-danger">delete all</span></li>
				<li><br></li>
				<li><a href="Sound.html"><i class="icon-chevron-right"></i>laptop </a><a role="button" href="Camerasroot.php"><span class="btn btn-danger">delete all</span></li>
				<li><br></li>
				<li><a href="Sound.html"><i class="icon-chevron-right"></i>mouse </a><a role="button" href="Camerasroot.php"><span class="btn btn-danger">delete all</span></li>
				<li><br></li>
				<li><a href="Sound.html"><i class="icon-chevron-right"></i>Equipments </a><a role="button" href="Camerasroot.php"><span class="btn btn-danger">delete all</span></li>				
				</ul>
			
				</li>
		</ul>

	    </div>
	 

		<h4 align="center">Latest Products </h4>
		<ul class="thumbnails">
				


		<?php
              foreach ($latestproduct as $latestproduct) {
                 
                 echo '
                 
                  
                 <li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

				  <a  href="'.$latestproduct["path"].'"><img src="'.$latestproduct["path"].'" alt=""/></a>
				  <div class="caption">


					  <h5>'.$latestproduct["name"].'</h5>
					  <p> 
						 '.$latestproduct["description"].'
					  </p>
					  <h4 style="text-align:center"> price :'.$latestproduct["price"].' $</h4>
				   
      <a href="#delete2" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-danger">delete product</span></a>
      <div id="delete2" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>please confirm the name of the product to delete</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm" action="delete.php" method="POST" >
			  <div class="control-group">								
				<input type="text" id="inputname" placeholder="name product" name="name" required/>
			  </div>
			  <br>
              	<input type="submit" value="confirm" class="btn btn-danger" required/>
              	</form>
              	<div class="modal-footer">
			<button type="button" data-dismiss="modal" aria-hidden="true">Close</button>
		        </div>
	      </div>
	  </div>

      <a href="#modify" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-success"> edit product </span></a>
          <div id="modify" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4 style="color:blue">please enter the new caracteristcs of the product</h4>
		  </div>
		  <div class="modal-body" style="color:green">
			<form class="form-horizontal loginFrm" enctype="multipart/form-data" action="modify.php" method="POST">
			<div class="control-group">	
			    <label for="inputname"> PLEASE confirm the product name</label>
				<input type="text" id="inputname" placeholder="name product" name="oldname" required/>
			  </div>
			  <div class="control-group">
			  	<label for="inputname">NEW product name</label>
				<input type="text" id="inputname" placeholder="name product" name="name" required/>
			  </div>
			  <div class="control-group">	
			  	<label for="inputname">NEW product price</label>
				<input type="text" id="inputprice" placeholder="price product" name="price" required/>
			  </div>
			  <div class="control-group">	
                <label for="inputprice">new image </label>
                <input type="file" name="file" class="form-control" id="aj_FILEe" placeholder="FILE" required/>
			  </div>
			   <div class="control-group">	
			   	<label for="inputname">NEW product description</label>
				<input type="text" id="inputdescription" placeholder="description product" name="description">
			  </div>
			    <br>
              	<input type="submit" value="edit" class="btn btn-success">
              	</form>
              	
	      </div>
	  </div>
	  </li> ';
            }

             
       ?>
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