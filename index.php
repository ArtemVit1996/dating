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
// require the validation file
require_once("model/validation.php");
//require_once("classes/Regular.php");

// start a session (must be after the autoload file)
session_start();


// Instantiate the F3 Base class
$f3 = Base::instance();

// Default route
$f3->route('GET /', function() {
    // echo '<h1>Dating website</h1>';

    $view = new Template();
    echo $view->render('views/home.html');
});

// page1 route
$f3->route('GET|POST /page1', function($f3) {

    // If the form has been submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        # Check if user has opted out for premium membership
        if (!empty($_POST['membership'])) {
            $member = new Premium();
            echo "premium";

        }
        else {
            $member = new Regular();
            echo "regular <br>";
        }


        $isValid = true;
        if (!validFName($_POST['fname'], $f3)) {
            $isValid = false;
        }
        if (!validLName($_POST['lname'], $f3)) {
            $isValid = false;
        }
        if (!validAge($_POST['age'], $f3)) {
            $isValid = false;
        }
        if (!validPhone($_POST['phone'], $f3)) {
            $isValid = false;
        }

        if(isset($_POST['gender'])) {
            $f3->set("gender", $_POST['gender']);
        }

        if ($isValid) {
            # store all the valid fields in the member
            $member->setFname($_POST['fname']);
            $member->setLname($_POST['lname']);
            $member->setAge($_POST['age']);
            $member->setPhone($_POST['phone']);
            $member->setGender($_POST['gender']);
            # put the member into a session
            $_SESSION['member'] = $member;
            //echo $_SESSION['member'];
            //var_dump($_SESSION);
            # route to the next page (page2)
            $f3-> reroute('page2');
        }
    }

    $view = new Template();
    echo $view->render('views/page1.html');
});

// page2(profile) route
$f3->route('GET|POST /page2', function($f3) {
    //echo $_SESSION['member']->toString();

    // If the form has been submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        # Store not required fields in the session
        //$_SESSION['email'] = $_POST['email'];
        //$_SESSION['loc'] = $_POST['loc'];
        //$_SESSION['seeking'] = $_POST['gender'];
        //$_SESSION['bio'] = $_POST['bio'];

        # Set f3 variables to session variables to make items sticky
        $f3->set("loc", $_POST['loc']);
        $f3->set("bio", $_POST['bio']);
        $f3->set("seeking",$_POST['gender']);

        $isValid = true;
        if (!validEmail($_POST['email'], $f3)) {
            $isValid = false;
        }

        if ($isValid) {
            # set the user inputs into the member class(located in the session)
            $theMember = $_SESSION['member'];
            $theMember->setEmail($_POST['email']);
            $theMember->setState($_POST['loc']);
            $theMember->setSeeking($_POST['gender']);
            $theMember->setBio($_POST['bio']);

            // check to see if the class is Premium or Regular //method_exists ($theMember , 'setIndoor'
            if ($theMember instanceof Premium) {
                // **** Premium ******

                // route to Interest page
                $f3-> reroute('page3');
                //echo $theMember;
                //echo "im premium";
            }
            else {
                // **** Regular ****

                // route to the summary page
                $f3-> reroute('summary');
                //echo $theMember;
                //echo "im regular";
            }


        }
    }
    $view = new Template();
    echo $view->render('views/page2.html');
});

// page3(interests) route
$f3->route('GET|POST /page3', function($f3) {
    // grab the member class stored in a session
    $theMember = $_SESSION['member'];

    # array if valid outdoor activities
    $outdoor = array('Hiking', 'Biking', 'Snowboarding', 'Skiing',
        'Running', 'Roadtrips');
    # set an f3 outdoor array
    $f3->set('outdoor', $outdoor);


    # array of valid indoor activities
    $indoor = array('Game night', 'Movie night', 'Baking/cooking',
        'Video games', 'Writing', 'Reading');
    # set an f3 indoor array
    $f3->set('indoor', $indoor);
    //echo var_dump($indoor);

    // If the form has been submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $isValid = true;

        if (!validOutdoor($_POST['outdoor'], $f3, $outdoor, $theMember)) {
            $isValid = false;
        }

        if (!validIndoor($_POST['indoor'], $f3, $indoor, $theMember)) {
            $isValid = false;
        }

        if ($isValid) {
            // route to the summary page
            $f3-> reroute('summary');
        }

    }

    $view = new Template();
    echo $view->render('views/page3.html');
});

// summary route
$f3->route('GET /summary', function() {

    //session_destroy();

    $view = new Template();
    echo $view->render('views/summary.html');
    session_destroy();
});

// Run F3
$f3->run();