<?php
    require_once("template_header.php");
    require_once("template_menu.php");
    $currentPageId = "accueil.php?page=accueil";
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
?>
<header class="bandeau_haut">
    <h1 class="titre">Clément Mercier</h1>
</header>
<?php
    renderMenuToHTML($currentPageId);
?>
<section class="corps">
<?php
    $pageToInclude = $currentPageId . ".php";
    if(is_readable($pageToInclude))
        require_once($pageToInclude);
    else
        require_once("error.php");
?>
    <h2>Bienvenue sur mon site</h2> 
                <p>Naviguez entre les différents onglets pour en apprendre plus sur moi, mon parcours scolaire et mes hobbies</p>
</section>
    <?php
        require_once("template_footer.php");
    ?>