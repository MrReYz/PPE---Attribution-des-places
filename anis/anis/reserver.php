<?php 
if (isset($_POST['reserver'])) {

    $cnx = mysqli_connect ('localhost', 'root', '', 'anis');
    //mysqli_select_db ("essaie", $base)  or die("erreur de connexion a la base de donnees");

    // on teste si une entrée de la base contient ce couple login / pass
    $query = "INSERT INTO `anis`.`attribut` (`date_fin`, `id_place`, `Id_utilisateur`, `date_debut`) VALUES (NULL, '', '', '');";
    $result = mysqli_query($cnx,$query) or die("erreur!!");

    mysqli_close($cnx);
    echo "ajout avec succ&eacute; <a href=\"index.php\">retour</a>";
    } else{
        echo  "<font color=\"red\"> Au moins un des champs est vide.</font>";
}
?>

/* pas fini !!!!!!!!!!!!!
