<?php
    require_once("template_header.php");
    require_once("template_menu.php");
    $currentPageId = "accueil";
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    if(isset($_GET['lang'])) {
        $currentPageLang = $_GET['lang'];   
    } 
    else {
        $currentPageLang = 'en';
    }
?>
<header class="bandeau_haut">
    <h1 class="titre">Clément Mercier</h1>
</header>
<?php
    renderMenuToHTML($currentPageId,$currentPageLang);
?>
<section class="corps">
<?php
    $pageToInclude = $currentPageId . ".php";
    if(is_readable($pageToInclude))
        require_once($pageToInclude);
    else
        require_once("error.php");
?>
    <h2>Welcome on my webiste</h2> 
                <p>Go through the differents tabs to know me</p>
</section>
    <?php
        require_once("template_footer.php");
    ?>