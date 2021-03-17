<!DOCTYPE html>
<html>
    <head>
        <title>testConnexion</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>MySQL</h1>
        <?php 
            $nomduserveur = 'localhost';
            $nomdecompte = 'root';
            $motdepasse = '';

            $connexion = new mysqli($nomduserveur,$nomdecompte,$motdepasse);

            if (!$connexion) {
                die("Erreur : ".mysqli_connect_error());
            }
            echo "Connexion réussie";
            $resultat = $connexion->query("SELECT * FROM Utilisateur");
            foreach($resultat as $row) {
                echo "id = ".$row['id']."\n";
                echo "login = ".$row['login']."\n";
                echo "password = ".$row['password']."\n";
                echo "pseudo = ".$row['pseudo']."\n";
            }
            mysqli_close($connexion);
            ?>
    </body>
</html>