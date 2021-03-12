<?php
    function renderMenuToHTML($currentPageId) {
        $mymenu = array(
            "accueil" => array("Accueil"),
            "cv" => array("CV"),
            "hobbies" => array("Hobbies")
        );
        echo 
        "<nav class='menu'>
        <ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            if($currentPageId == $pageId) {
                echo 
                "<li><a class='currentpage' href=".$pageId.">".$pageParameters[0]."</a></li>";
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