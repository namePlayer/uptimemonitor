<?php
/*
 *
 *  Base Configuration File
 *
 * */

# Database Connection
define("DB_HOST", "127.0.0.1");
define("DB_NAME", "UptimeMonitor");
define("DB_USER", "root");
define("DB_PASS", "");

# Configure Directories
define("ACTION_DIR", __DIR__.'/../action/');
define("CONFIG_DIR", __DIR__.'/../config/');
define("SCRIPT_DIR", __DIR__.'/../scripts/');
define("TEMPLATE_DIR", __DIR__.'/../template/');
define("PAGE_TEMPLATE_DIR", __DIR__.'/../template/page/');
define("ELEMENT_TEMPLATE_DIR", __DIR__.'/../template/element/');