<?php
    session_start();
    if (empty($_SESSION['username']) or empty($_SESSION['id'])) 
    { 
        echo "<script>alert(\"Вы вошли на сайт, как гость.\");</script>"; 
    }
    else
    { 
        echo "<script>alert(\"Вы вошли на сайт как ".$_SESSION['username']."\");</script>";
    }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="/images/1moto.png" type="image/png">
        <title>BikerBoyz</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
              body {
                background-color: black;
                background-image: url(images/background_main.jpg); 
                background-position: center;
                -moz-background-size: 100%; 
                -webkit-background-size: 100%; 
                -o-background-size: 100%; 
                background-size: 100%; 
                background-attachment: fixed;
                background-repeat: no-repeat;
                
            }
        </style>

    </head>
    <body>
	<?php if (isset($_SESSION['id'])) { ?>
        <form>
            <p><input  type="button" name="addEvent" value="Add event" size="20"></p>             
            <p><input  type="button" name="changeUserData" value="Settings" size="20"></p>
            <p></p>
        </form>
        <form class = "exit">
            <p><input  type="button" value="exit" onclick="location.href = 'logOff.php'" size="20"></p>
        </form>
	<?php } ?>
    </body>
</html>