        <?php
        if(isset($_GET['css'])) {
            $cssStyle = $_GET['css'];
            setcookie('cssstyle',$cssStyle,$path="/IDAW/TP3/Cookies");
            echo "<link rel='stylesheet' href='".$cssStyle.".css' type='text/css'
            media='screen' title='default' charset='UTF-8' />";
        } else 
            if(isset($_COOKIE['cssstyle'])) {
                $cssStyle = $_COOKIE['cssstyle'];
            echo "<link rel='stylesheet' href='".$cssStyle.".css' type='text/css'
            media='screen' title='default' charset='UTF-8' />";
            }  else 
            if (!isset($_GET['css'])) {
            echo "<link rel='stylesheet' href='../css1.css' type='text/css'
            media='screen' title='default' charset='UTF-8' />";
            }       
        ?>
        <!DOCTYPE html>
    <html>
        <head>
        <title>Clément Mercier</title>
        </head>
        <body>
        <?php 
            if (session_status() == 2) {
                echo "Bienvenue". $_SESSION['login'];
            }
            else 
            session_start(); 
            if(isset($_SESSION['login'])) {
            echo "Bienvenu ".$_SESSION['login'];
            echo "<a href='../deconnexion.php' target='_blank'>Déconnexion</a>";
            } ?>