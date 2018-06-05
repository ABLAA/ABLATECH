<?php
    //connexion al base de données
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=ablatech;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());

    }
   
    $login=$_POST['e_mail'];
    $pw=$_POST['password'];
    $req = "SELECT * FROM client";
    $utilisateur=$bdd->query($req);
    
         if($login=="root@gmail.com" and $pw=="root")
          { header('location:pageroot.php') ;
          }
          else {echo '<script>alert("invalide password");window.location.replace("index.php");</script>';}

    
      foreach($utilisateur as $utilisateur)
      {
        if($login==$utilisateur['e_mail'] and $pw==$utilisateur['password'] and $login!="root@gmail.com" )
      
    {
      header('Location:pageclient.php');

    }
     else {
     
                  echo '<script>alert("invalide password");window.location.replace("index.php");</script>';



     }
    
}
    

?>
