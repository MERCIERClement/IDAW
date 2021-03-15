<?php
    require_once("template_header.php"); ?>
    <form id="style_form" action="cv.php" method="GET">
    <select name="css">
    <option value="../css1">style1</option>
    <option value="../css2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
    </form>

    <?php require_once("template_menu.php");
    $currentPageId = 'cv';
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
    <h1 class="titre">My Resume</h1>
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
    <h2>Academic Background</h2> 
    <h3>IMT Lille Douai</h3>
    <p>Computer engineering student / Project Management<p>
    <h3>Lycée Henri Wallon - Valenciennes</h3>
    <p>Prepatory Classes MPSI/MP 2017-2019</p>   
    <h3>Lycée Fénélon - Cambrai</h2>
    <p>BAC S Spé Maths 17.27</p>
    <h3>Collège Jacques Prévert Caudry</h3>
    <p>Certificate 17/20</p>
</section>
    <?php
        require_once("template_footer.php");
    ?>