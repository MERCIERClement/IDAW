<?php
    $users = array(
        'riri' => 'fifi',
        'yoda' => 'maitrejedi');
    $login="anonymours";
    $errorText = "";
    $successfullyLogged = false;

    if(isset($_GET['login']) && isset($_GET['password'])) {
        $tryLogin=$_GET['login'];    
        $tryPwd=$_GET['password'];
        if(array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd) {
            $successfullyLogged = true;
            $login = $tryLogin;
        } else {
            $errorText = "Erreur de login/password";
    }} else {
        $errorText = "Merci d'utiliser le formulaire de login";
    }
    if(!$successfullyLogged) {
        echo $errorText;
    } else {
        echo "<h1>Bienvenue ".$login."</h1>";
    }
?>