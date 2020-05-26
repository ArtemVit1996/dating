<?php
function validFName($fname) {
    $isValid = true;
    if (ctype_alpha($fname)) {
        $_SESSION['fname'] = $_POST['fname'];
    }
    else {
        $isValid = false;
    }
    return $isValid;
}

// function to validate the name
function validLName( $lname) {
    $isValid = true;
    // check if last name is all alphabetic
    if (ctype_alpha($lname)) {
        $_SESSION['lname'] = $_POST['lname'];
    }
    else {
        $isValid = false;
    }
    return $isValid;
}

// function to validate age
function validAge($age) {
    $isValid = true;
    // check if age is numeric 18-118
    // check if first name is all alphabetic
    if (($age >= 18) && ($age <= 118)) {
        $_SESSION['age'] = $_POST['age'];
    }
    else {
        $isValid = false;
    }
    return $isValid;
}

// function to validate phone
function validPhone() {
    // choose how to validate
}

// function to validate the email
function validEmail() {
    // make sure its valid
}

// function to validate outdoor options
function validOutdoor() {
    // make array of valid options
    // see if selected is in that array
}

// function to validate indoor options
function validIndoor() {
    // make array of valid options
    // see if selected is in that array
}
