<?php
$requestedUrl = $_SERVER['REQUEST_URI'];
$requestedPath = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
$requestedUrl = str_replace($requestedPath, '', $requestedUrl);

if(empty($requestedUrl) || !isset($requestedUrl)) {
    if(!isLoggedIn()) {
        header("Location: ".$requestedPath."login/");
        exit();
    }
    header("Location: ".$requestedPath."home/");
    exit();
}

if(strpos($requestedUrl, 'home') !== FALSE) {
    if(!isLoggedIn()) {
        header("Location: ".$requestedPath."login/");
        exit();
    }
    require_once ACTION_DIR.'/home.php';
    exit();
}

if(strpos($requestedUrl, 'login') !== FALSE) {
    if(isLoggedIn()) {
        header("Location: ".$requestedPath."home/");
        exit();
    }
    require_once ACTION_DIR.'/login.php';
    exit();
}

if(strpos($requestedUrl, 'logout') !== FALSE) {
    session_destroy();
    header("Location: ".$requestedPath."login/");
    exit();
}

require_once ACTION_DIR.'/page-not-found.php';
exit();