<?php
    require_once("template_header.php");
?>     
    <h1>Mon profil</h1>
        <p>Etudiant ingénieur informatique polyvalent / Appétance pour la gestion de projet</p>
            <nav class="menu">
                <ul>
                <li><a id="currentpage" href="Accueil.php">Accueil</a></li>
                <li><a href="CV.php">CV</a></li>
                <li><a href="Hobbies.php">Hobbies</a></li>
                </ul>
            </nav>    
            <div class="element-flexible">
                <h2>Bienvenue sur mon site</h2> 
                <p>Naviguez entre les différents onglets pour en apprendre plus sur moi, mon parcours scolaire et mes hobbies</p>   
                </div>
    <?php
        require_once("template_footer.php");
?>