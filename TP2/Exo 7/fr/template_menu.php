<?php
    function renderMenuToHTML($currentPageId) {
        $mymenu = array(
            "accueil.php?page=accueil" => array("Accueil"),
            "cv.php?page=cv" => array("CV"),
            "hobbies.php?page=hobbies" => array("Hobbies")
        );
        echo 
        "<nav class='menu'>
        <ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            if($currentPageId == $pageId) {
                echo 
                "<li><a id='currentpage' href=".$pageId.">".$pageParameters[0]."</a></li>";
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