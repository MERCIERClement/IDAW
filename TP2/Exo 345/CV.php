<?php
    require_once("template_header.php");
?>  
        <h1>Mon CV</h1>
        <?php
            require_once("template_menu.php");
            renderMenuToHTML("cv");   
            ?>
            <div class="element-flexible">
                <h2>Parcours scolaire</h2> 
                <h3>IMT Lille Douai</h3>
                <p>Etudiant ingénieur informatique polyvalent / Gestion de projet<p>
                <h3>Lycée Henri Wallon - Valenciennes</h3>
                <p>CPGE MPSI/MP 2017-2019</p>   
                <h3>Lycée Fénélon - Cambrai</h2>
                <p>BAC S Spé Maths 17.27 (Mention TB)</p>
                <h3>Collège Jacques Prévert Caudry</h3>
                <p>Brevet mention très bien</p>
                </div>

        <?php
        require_once("template_footer.php");
?>