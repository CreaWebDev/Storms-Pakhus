<?php
//Først skal flg. defineres:
define("SITENAME", "Storms Pakhus Styleguide");
define("JSONFILE", "data/pages.json");
define("STARTPAGE", "home");

//Således læses json filen:
function GetJsonData() {
    $content = file_get_contents(JSONFILE);
    
    //Og indholdet afkodes med _decode:
    $json = json_decode($content);
    
    //Til slut bedes om et array med alle sider:
    return $json->pages;
}

//Denne function skaber menuen med et "foreach", som løber alle sider igennem (via $page som er alias for $pages)
//og finder valuen "menuTitle", som den skriver ud til skærmen med "echo".
function Menu() {
    $pages = GetJsonData();
    foreach($pages as $page) {
        echo '<a href = "?page=' . $page->id . '">' . $page->menuTitle . '</a>';
    }
}

//Her er funktionen, som via GET genererer de enkelte sider:
function GetCurrentPage() {
    $currentPageId = STARTPAGE;
    if(isset($_GET["page"])) {
        $currentPageId = $_GET["page"];
    }

//Med "if" angives det, at den kun skal finde én side ad gangen, nemlig dén med "$currentPageId":
    $pages = GetJsonData();
    foreach($pages as $page) {
        if($page->id == $currentPageId) {
            $currentPage = $page;
        }
    }

//Og til sidst kommandoen, som får den aktive side vist:
    return $currentPage;
}
?>
