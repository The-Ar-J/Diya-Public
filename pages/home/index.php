<?php 

//include the required files
$uiConfig = __DIR__ . '/../../config/uiConfig/uiConfig.php';
$page = __DIR__ . '/../../components/home/component.php';

$title = "Diya | Framework Built for Simplicity";
$description = "Home Page";

include $uiConfig;

uiDashboard(function() use ($page) {
    include $page;
})

?>