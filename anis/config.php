<?php


   function Connection_mySql(){

       $connexion = mysqli_connect('localhost', 'root', '')
	     or die("erreur de connexion au serveur");
        mysqli_select_db($connexion,"baseassoc") or die("erreur de connexion a la base de donnees");
       

	   return $connexion;	 

   }
?>
   
   
   
   
   <?php 
    /*try 
{
    $bdd = new PDO('mysql:host=localhost; bdname=parking','root','');
}
catch(Exception $e)
{
    die("erreur de connexion");
}
if (isset($_POST['submit']))
    
{
$login = $_POST['login'];
  $mdp = sha1($_POST['mdp']);
  
  $requete = $bdd->query("SELECT * FROM user WHERE mdp ='".$mdp."' AND login ='".$login."'");
  if($reponse = $requete->fetch())
  {
   $_SESSION['connecte'] = true;
   $_SESSION['id'] = $reponse['id'];
   header("Location:index.php");
   die();
  }
        else
            echo"Login ou Mot de Passe incorrect";
 }*/
?>  