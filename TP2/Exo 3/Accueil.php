<?php
    require_once("template_header.php");
?>     
    <h1>Mon profil</h1>
        <p>Etudiant ingénieur informatique polyvalent / Appétance pour la gestion de projet</p>
        <div class="container">
            <nav class="menu">
                <ul>
                <li><a id="currentpage" href="Accueil.php">Accueil</a></li>
                <li><a href="CV.php">CV</a></li>
                <li><a href="Hobbies.php">Hobbies</a></li>
                </ul>
            </nav>    
            <div class="element-flexible">
                <h2>Petit conseil du jour</h2> 
                <p>Faites attention à la rue impaire</p>   
                </div>
        </div>
    <?php
        require_once("template_footer.php");
?>