<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once("veondor/autoload.php");

// Instantiate the F3 Base class
$f3 = Base::instance();

// Default route
$f3->route('Get /', function() {
    echo '<h1>Dating website</h1>';
});