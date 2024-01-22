<?php 

//include the required files
$uiConfig = __DIR__ . '/../../config/uiConfig/uiConfig.php';
$page = __DIR__ . '/../../components/login/component.php';

$title = "Diya | Framework Built for Simplicity";
$description = "Login Page";

include $uiConfig;

uiLanding(function() use ($page) {
    include $page;
})

?>