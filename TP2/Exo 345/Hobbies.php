<?php
    require_once("template_header.php");
?>  
        <h1>Mes hobbies</h1>
        <?php
            require_once("template_menu.php");
            renderMenuToHTML("accueil");   
            ?>
            <div class=element-flexible>
                <h2>Gaming compétitif</h2> 
                <p>Permanent improving, remise en question</p>   
                <h2>Pop culture</h2>
                <p>Anime, musique</p>
            </div>
    <?php
        require_once("template_footer.php");
?>