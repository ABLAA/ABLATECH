<?php

    $bdd=new PDO ('mysql:host=localhost;dbname=ablatech;charset:utf8','root','');
    $name=$_POST['name'];
	$req=$bdd->query("DELETE FROM Latestproduct WHERE name='$name'");
	header('location:pageroot.php');



?>