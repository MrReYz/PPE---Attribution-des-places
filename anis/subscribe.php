
<?php
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['subscribe'])) {

    $cnx = mysqli_connect ('localhost', 'root', '', 'anis');
    //mysqli_select_db ("essaie", $base)  or die("erreur de connexion a la base de donnees");

    // on teste si une entrée de la base contient ce couple login / pass
    $query = "INSERT INTO `anis`.`utilisateur` (`Id_utilisateur`, `nom`, `prenom`, `email`, `password`, `fil_d_attente`) VALUES (NULL, '".$_POST['nom']."', '".$_POST['prenom']."', '".$_POST['email']."', '".$_POST['password']."', NULL);";
    $result = mysqli_query($cnx,$query) or die("erreur!!");

    mysqli_close($cnx);
    echo "ajout avec succ&eacute; <a href=\"index.php\">retour</a>";
    } else{
        echo  "<font color=\"red\"> Au moins un des champs est vide.</font>";
}

?>
