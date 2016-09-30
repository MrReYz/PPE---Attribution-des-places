<?php 

?>
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

                    <form action="login.php" method="post">

                        <div class="field-wrap">
                            <label>
                                identifiant<span class="req">*</span>
                            </label>
                            <input type="text"required autocomplete="off" name="email"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Mot de passe<span class="req">*</span>
                            </label>
                            <input type="password"required autocomplete="off" name="password"/>
                        </div>
                        <button class="button button-block" name="connexion"/>S'identifier</button>

                    </form>

            </div>
            <div id="signup">   
                <h1>S'inscrire gratuitement</h1>

                <form action="subscribe.php" method="post">

                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                Prénom<span class="req">*</span>
                            </label>
                            <input type="text" required autocomplete="off" name="prenom"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Nom<span class="req">*</span>
                            </label>
                            <input type="text"required autocomplete="off" name="nom"/>
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Adresse e-mail<span class="req">*</span>
                        </label>
                        <input type="email"required autocomplete="off" name="email"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Mot de passe<span class="req">*</span>
                        </label>
                        <input type="password"required autocomplete="off" name="password"/>
                    </div>

                    <button type="submit" class="button button-block" name="subscribe"/>GO</button>

                </form>

        </div>


        </div><!-- tab-content -->

    </div> <!-- /form -->

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>




</body>
</html>
