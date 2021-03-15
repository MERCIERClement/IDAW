<!DOCTYPE html>
<html>
    <head>
    <title>Clément Mercier</title>
        <?php
        if(isset($_GET['css'])) {
            $cssStyle = $_GET['css'];
            echo "<link rel='stylesheet' href='".$cssStyle.".css' type='text/css'
            media='screen' title='default' charset='UTF-8' />";
        } else {
            echo "<link rel='stylesheet' href='../css1.css' type='text/css'
            media='screen' title='default' charset='UTF-8' />";
        }
        ?>
    </head>
    <body>