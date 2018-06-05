<?php



$bdd=new PDO ('mysql:host=localhost;dbname=ablatech;charset:utf8','root','');


$name=$_POST['name'];
$e_mail=$_POST['e_mail'];
$message=$_POST['message'];





$req=$bdd->query("INSERT INTO messages values ('$name','$e_mail','$message')");
    header('location:contact.html');


?>