<!DOCTYPE html>
<html>
    <head>
    <title>Clément Mercier</title>
        <?php
        if(isset($_GET['css'])) {
            $cssStyle = $_GET['css'];
            setcookie('cssstyle',$cssStyle);
            echo "<link rel='stylesheet' href='".$cssStyle.".css' type='text/css'
            media='screen' title='default' charset='UTF-8' />";
        } else if {
            if(isset($_COOKIE['cssstyle'])) {
                $cssStyle = $_COOKIE['cssstyle'];
            }
        }
        echo "<link rel='stylesheet' href='".$cssStyle.".css' type='text/css'
        media='screen' title='default' charset='UTF-8' />";
        }
        ?>
    </head>
    <body>