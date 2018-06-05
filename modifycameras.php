<?php


    $bdd=new PDO ('mysql:host=localhost;dbname=ablatech;charset:utf8','root','');
    $oldname=$_POST['oldname'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $path=$_FILES["file"]["name"];
    $description=$_POST['description'];



    $req=$bdd->query("UPDATE `cameras` SET `name` = '$name' , `price` = '$price' , `path` = 'images/".$path."' , `description` = '$description' WHERE `cameras`.`name` = '$oldname'");
    header('location:camerasroot.php');



?>