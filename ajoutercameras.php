<?php



$bdd=new PDO ('mysql:host=localhost;dbname=ablatech;charset:utf8','root','');
$name=$_POST['name'];
$price=$_POST['price'];
$path=$_FILES["file"]["name"];
$description=$_POST['description'];



$req=$bdd->query("INSERT INTO cameras values ('$name','$price','images/".$path."','$description')");
    header('location:camerasroot.php');

	

?>