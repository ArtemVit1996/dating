<?php
# Function to validate the first name
function validFName($fname, $f3) {
    if (!empty($fname)) {
        # fname in not empty so check if its all alphabetic
        if (ctype_alpha($fname)) {
            # set a session variable to the input
            $_SESSION['fname'] = $fname;
            # set a f3 variable to the input
            $f3->set("fname", $fname);
            return true;
        } # input is not alphabetic, set an f3 to appropriate error
        else {
            $f3->set("errors['fname']", "Fist name must be alphabetic");
        }
    } # input is empty, set an f3 variable to appropriate error
    else {
        $f3->set("errors['fname']", "First name is required");
    }
}

# Function to validate the last name
function validLName($lname, $f3) {
    if (!empty($lname)) {
        # lname in not empty so check if its all alphabetic
        if (ctype_alpha($lname)) {
            # set a session variable to the input
            $_SESSION['lname'] = $lname;
            # set a f3 variable to the input
            $f3->set("lname", $lname);
            return true;
        } # input is not alphabetic, set an f3 to appropriate error
        else {
            $f3->set("errors['lname']", "Last name must be alphabetic");
        }
    } # input is empty, set an f3 variable to appropriate error
    else {
        $f3->set("errors['lname']", "Last name is required");
    }
}

# Function to validate the age
function validAge($age, $f3) {
    # check if the input is not empty and numeric
    if (!empty($age) && is_numeric($age)) {
        # check if age is in range(18-118)
        if (($age >= 18) && ($age <= 118)) {
            # set a session variable to the input
            $_SESSION['age'] = $age;
            # set a f3 variable to the input
            $f3->set("age", $age);
            return true;
        } # valid number but not in range
        else {
            $f3->set("errors['age']", "Age must be 18-118");
        }
    } # user did not enter a valid number
    else {
        $f3->set("errors['age']", "Please enter a valid age");
    }

}

# Function to validate phone
function validPhone($num, $f3) {
    if (!empty($num)) {
        if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $num)) {
            # set a session variable to the input
            $_SESSION['phone'] = $num;
            # set a f3 variable to the input
            $f3->set("phone", $num);
            return true;
        }
        else {
            $f3->set("errors['phone']",  "Enter in this format: 000-000-0000");
            $f3->set("phone", $num);
        }
    } # user did not enter a valid number
    else {
        $f3->set("errors['phone']", "Please enter a phone number");
    }
}

// function to validate the email
function validEmail($email, $f3) {
    # if entered email matches the right format
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        # set a session variable to the input
        $_SESSION['email'] = $email;
        # set a f3 variable to the input
        $f3->set("email", $email);
        return true;
    } # not a valid email
    else {
        $f3->set("email", $email);
        $f3->set("errors['email']", "Please enter a valid email");
    }
}

// function to validate outdoor options
function validOutdoor($outArray, $f3, $array) {
    $isValid = true;

    $_SESSION['outdoor'] = array();
    foreach ($outArray as $item) {
        if (in_array($item , $array)) {
            # set a session variable to the input
            array_push( $_SESSION['outdoor'], $item);
            # set a f3 variable to the input
            // $f3->set("outdoor", $option);
        }
        else {
            $f3->set("errors['outdoor']", "Not a valid option");
            $isValid = false;
        }

    }
    return $isValid;

    // see if selected is in that array
}

// function to validate indoor options
function validIndoor() {
    // make array of valid options
    // see if selected is in that array
}
