<?php

    $bdd=new PDO ('mysql:host=localhost;dbname=ablatech;charset:utf8','root','');
    $name=$_POST['name'];
	$req=$bdd->query("TRUNCATE `cameras`");
	header('location:camerasroot.php');



?>