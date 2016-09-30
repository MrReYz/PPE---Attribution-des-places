<?php 
session_start();
if (!isset($_SESSION['email'])) {
    header ('Location:index.php');
    exit();
}
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Sign-Up/Login Form</title>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">

        <link rel="stylesheet" href="css/style.css">




    </head>

    <body class="parking">
        <div id="block">
            <h1>League Parking</h1>
            <h2>reserver votre place</h2>
            <form id="formRE" action="reserver.php">
                <div class="group">
                    <label>date entrer</label>
                    <input type="datetime-local" class="inputRe">
                </div>
                <div class="group">
                    <label>date sortie </label>
                    <input type="datetime-local" class="inputRe">
                </div>
                <input style="width:50%; margin:auto;" type="submit" value="reserver" name="reserver">
            </form>
            <button><a href="logout.php">deconnexion</a></button>



        </div>
    </body>
</html>
