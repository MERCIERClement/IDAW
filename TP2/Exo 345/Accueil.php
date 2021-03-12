<?php
    require_once("template_header.php");
?>     
    <h1>Mon profil</h1>
        <p>Etudiant ingénieur informatique polyvalent / Appétance pour la gestion de projet</p>
            <?php
            require_once("template_menu.php");
            renderMenuToHTML("accueil");   
            ?>
            <div class="element-flexible">
                <h2>Bienvenue sur mon site</h2> 
                <p>Naviguez entre les différents onglets pour en apprendre plus sur moi, mon parcours scolaire et mes hobbies</p>   
                </div>
    <?php
        require_once("template_footer.php");
?>