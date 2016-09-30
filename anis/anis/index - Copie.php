
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>S'inscrire/S'identifier</title>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/normalize.css">


        <link rel="stylesheet" href="css/style.css">




    </head>
    <body class="parking">

        <div class="form">

            <ul class="tab-group">
                <li class="tab active"><a href="#login">S'identifier</a></li>
                <li class="tab"><a href="#signup">S'inscrire</a></li>

            </ul>

            <div class="tab-content">
                <div id="login">   
                    <h1>Bienvenue au Parking League</h1>

                    <form action="/" method="post">

                        <div class="field-wrap">
                            <label>
                                identifiant<span class="req">*</span>
                            </label>
                            <input type="text"required autocomplete="off" name="pseudo"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Mot de passe<span class="req">*</span>
                            </label>
                            <input type="password"required autocomplete="off" name="password"/>
                        </div>

                        <?php
                        // on teste si le visiteur a soumis le formulaire de connexion
                        if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {

                            if ((isset($_POST['pseudo']) && !empty($_POST['pseudo'])) && (isset($_POST['password']) && !empty($_POST['password']))) {

                                $base = mysqli_connect ('localhost', 'root', '', 'anis');
                                //mysqli_select_db ("essaie", $base)  or die("erreur de connexion a la base de donnees");

                                // on teste si une entrée de la base contient ce couple login / pass
                                $sql = 'SELECT * FROM admin WHERE login="'.mysqli_real_escape_string($base, $_POST['pseudo']).'" AND mot_de_passe="'.mysqli_real_escape_string($base,$_POST['password']).'"';

                                $req = mysqli_query($base, $sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
                                $data = mysqli_fetch_array($req);

                                mysqli_free_result($req);
                                mysqli_close($base);

                                // si on obtient une réponse, alors l'utilisateur est un membre
                                //var_dump($data);exit;
                                if ($data != null) {
                                    session_start();
                                    $_SESSION['login'] = $data['login'];
                                    header('Location: reserve.php');
                                    exit();
                                }
                                // sinon, alors la, il y a un gros problème :)
                                else {
                                        echo "<font color=\"red\"> Problème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.</font>";

                                    }

                                }
                            }
                                else {
                                    echo  "<font color=\"red\"> Au moins un des champs est vide.</font>";
                                }
                            }
                        ?>

                        <button class="button button-block" name="connexion" />S'identifier</button>

                    </form>

            </div>
            <div id="signup">   
                <h1>S'inscrire gratuitement</h1>

                <form action="/" method="post">

                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                Prénom<span class="req">*</span>
                            </label>
                            <input type="text" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label>
                                Nom<span class="req">*</span>
                            </label>
                            <input type="text"required autocomplete="off"/>
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Adresse e-mail<span class="req">*</span>
                        </label>
                        <input type="email"required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Mot de passe<span class="req">*</span>
                        </label>
                        <input type="password"required autocomplete="off"/>
                    </div>

                    <button type="submit" class="button button-block"/>GO</button>

                </form>

        </div>


        </div><!-- tab-content -->

    </div> <!-- /form -->

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>




</body>
</html>
