<?php
/*
 * Artem Vityuk
 * 4/28/2020
 * This file is used for all the "behind the scenes" code
 * It contains the required files, instantiations and routes
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once("vendor/autoload.php");

// start a session (must be after the autoload file)
session_start();

// Instantiate my classes
$f3 = Base::instance();
$validator = new Validate();
$controller = new Controller($f3);

// Default route
$f3->route('GET /', function() {
    $GLOBALS['controller']->home();
});

// page1 route
$f3->route('GET|POST /page1', function($f3) {
    $GLOBALS['controller']->page1();
});

// page2(profile) route
$f3->route('GET|POST /page2', function($f3) {
    $GLOBALS['controller']->page2();
});

// page3(interests) route
$f3->route('GET|POST /page3', function($f3) {
    $GLOBALS['controller']->page3();
});

// summary route
$f3->route('GET /summary', function() {
    $GLOBALS['controller']->summary();
});

// Run F3
$f3->run();