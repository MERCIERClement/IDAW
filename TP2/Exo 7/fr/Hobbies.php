<?php
    require_once("template_header.php");
    require_once("template_menu.php");
    $currentPageId = 'hobbies.php?page=hobbies';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
?>
<header class="bandeau_haut">
    <h1 class="titre">Mes hobbies</h1>
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
    <h2>Gaming compétitif</h2> 
    <p>Permanent improving, remise en question</p>   
    <h2>Pop culture</h2>
    <p>Anime, musique</p>
</section>
    <?php
        require_once("template_footer.php");
    ?>