<?php
    function renderMenuToHTML($currentPageId,$currentPageLang) {
        $mymenu = array(
            "accueil" => array("Home"),
            "cv" => array("Resume"),
            "hobbies" => array("Hobbies")
        );
        echo 
        "<a href=../fr/".$currentPageId.".php?page=".$currentPageId."&lang=fr>Français</a>
        <nav class='menu'>
        <ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            if($currentPageId == $pageId) {
                echo 
                "<li><a id='currentpage' href=".$pageId.".php?page=".$currentPageId."&lang=".$currentPageLang.">".$pageParameters[0]."</a></li>";
            } else {
                echo 
                "<li><a href=".$pageId.">".$pageParameters[0]."</a></li>";
            }
        }
        echo
        "</ul>
        </nav>";
    }
?>