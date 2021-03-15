<?php
    function renderMenuToHTML($currentPageId,$currentPageLang) {
        $mymenu = array(
            "accueil" => array("Accueil"),
            "cv" => array("CV"),
            "hobbies" => array("Hobbies")
        );
        echo 
        "<a href=../en/".$currentPageId.".php?page=".$currentPageId."&lang=fr>English</a>
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