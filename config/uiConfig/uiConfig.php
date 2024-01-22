<?php

/** this file is used to configure the ui of the application 
 * this file should be placed in the config folder
 * the file name should be uiConfig.php
 * do not change the file name/function names
*/

$header = __DIR__ . "/../../layout/header.php";
$footer = __DIR__ . "/../../layout/footer.php";
$sidebar = __DIR__ . "/../../layout/dashboard/sidebar.php";
$topbar = __DIR__ . "/../../layout/dashboard/topbar.php";
$navmenu = __DIR__ . "/../../layout/landing/navMenu.php";
$footerlinks = __DIR__ . "/../../layout/landing/footerLinks.php";
$urlConfig = __DIR__ . "/../../config/uiConfig/urlConfig.php";

function uiDashboard($arg) {

    //this function is used to set the ui of the dashboard()
    // do not change the variables
    global $header, $footer, $sidebar, $topbar, $urlConfig, $server;
    //include the required files
    include $urlConfig;
    include $header;
    include $topbar;
        $arg();
    include $sidebar;
    include $footer;

} 

function uiLanding($arg) {

    //this function is used to set the ui of the dashboard()
    // do not change the variables
    global $header, $footer, $navmenu, $footerlinks, $urlConfig, $server;
    //include the required files
    include $urlConfig;
    include $header;
    include $navmenu;
    $arg();
    include $footerlinks;
    include $footer;

} 

?>