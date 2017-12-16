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

//Og indholdet afkodes med _decode:
function Menu() {
    $pages = GetJsonData();
    foreach($pages as $page) {
        echo '<a href = "?page=' . $page->id . '">' . $page->menuTitle . '</a>';
    }
}

//Her laves en funktion, som via GET genererer de enkelte sider. "page" er et alias for "pages":
function GetCurrentPage() {
    $currentPageId = STARTPAGE;
    if(isset($_GET["page"])) {
        $currentPageId = $_GET["page"];
    }

    $pages = GetJsonData();
    foreach($pages as $page) {
        if($page->id == $currentPageId) {
            $currentPage = $page;
        }
    }
    return $currentPage;
}
?>