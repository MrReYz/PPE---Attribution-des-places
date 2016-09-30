<?php 
session_start();
if (!isset($_SESSION['login'])) {
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


        <link rel="stylesheet" href="css/style.css">




    </head>

    <body class="parking">
    <div id="block">
       <h1>League Parking</h1>
       <button>Reservation parking</button>
        <button><a href="logout.php">deconnexion</a></button>
        
    </div>
    </body>
</html>
