<?php

// Set the reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL ^ (E_NOTICE | E_DEPRICATED));

// Databse access credentiaols
define("DB_NAME", "changelog_hub");
define("DB_PORT", 3306);
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_host", "127.0.0.1");