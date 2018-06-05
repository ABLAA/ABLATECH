<?php



$bdd=new PDO ('mysql:host=localhost;dbname=ablatech;charset:utf8','root','');

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$e_mail=$_POST['e_mail'];
$password=$_POST['password'];





$req=$bdd->query("INSERT INTO client values ('$first_name','$last_name','$e_mail','$password')");
header('location:index.php');


?>