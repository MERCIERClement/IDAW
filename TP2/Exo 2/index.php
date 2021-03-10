<!DOCTYPE html>
<html>
    <head>
        <title>L'heure</title>
            <link rel="stylesheet" href="tp2.css">
            <meta charset="UTF-8">
    </head>
    <body>
        <h1>Il est cette heure là</h1>
        <?php
            date_default_timezone_set('Europe/Paris');
            echo date("H:i:s");
            sleep(1);
        ?>
    <body>
            
