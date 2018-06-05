<?php

 try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=ablatech;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $req = "SELECT * FROM messages";

    $messages = $bdd->query($req);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
     
    <title>ABLATECH online Shopping </title>
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

    <a class="brand" href="pageroot.php" ><img src="themes/images/logoo.png" alt="ABLATECH"/> </a>
	</div>
</div>



<div id="mainBody">
	<div class="container">
	<div class="row">

  <h2>the clients messeges </h2>
  <table class="table">
    <thead>
      <tr>
        <th>name</th>
        <th>Email</th>
        <th>messages</th>
      </tr>
    </thead>
        <tbody>
	 				
		<?php
              foreach ($messages as $messages) {
                 
                 echo '
                 <div class="container">


      <tr>
        <td> '.$messages["name"].'</td>
        <td>'.$messages["e_mail"].'</td>
        <td>'.$messages["message"].'</td>
  
				 ';
            }

             
       ?>
  </tbody>
  </table>
</div>
</div>
</div>
</div>


              
		
<!-- Footer ================================================================== -->
	

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