<?php
error_reporting(-1);
ini_set('error_reporting', 1);
ini_set('display_startup_errors', 1);

session_start();

$messages = [];

require_once __DIR__.'/config/base.php';
require_once SCRIPT_DIR.'/database.php';
require_once SCRIPT_DIR.'/utilities.php';
require_once SCRIPT_DIR.'/csrfProtection.php';
require_once SCRIPT_DIR.'/TemplateBuilder.php';

$templateBuilder = new TemplateBuilder();

require_once SCRIPT_DIR.'/router.php';