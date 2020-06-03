<?php

/**
 * Class Validate that contains methods
 * that validate user give data
 * @author Artem Vityuk
 * @version 1.0
 */
class Validate
{
    # Function to validate the first name
    /**
     * Function to validate the first name
     * @param $fname string first name
     * @param $f3 f3 variable
     * @return bool true if valid
     */
    function validFName($fname, $f3) {
        if (!empty($fname)) {
            # fname in not empty so check if its all alphabetic
            if (ctype_alpha($fname)) {
                # set a session variable to the input
                //$_SESSION['fname'] = $fname;
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

    /**
     * Function to validate the last name
     * @param $lname string the last name
     * @param $f3 fat-free variable
     * @return bool true if valid
     */
    function validLName($lname, $f3) {
        if (!empty($lname)) {
            # lname in not empty so check if its all alphabetic
            if (ctype_alpha($lname)) {
                # set a session variable to the input
                //$_SESSION['lname'] = $lname;
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

    /**
     * Function to validate age
     * @param $age int the age
     * @param $f3 fat-free variable
     * @return bool true if valid
     */
    function validAge($age, $f3) {
        # check if the input is not empty and numeric
        if (!empty($age) && is_numeric($age)) {
            # check if age is in range(18-118)
            if (($age >= 18) && ($age <= 118)) {
                # set a session variable to the input
                //$_SESSION['age'] = $age;
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

    /**
     * Function to validate the phone
     * @param $num int the phone
     * @param $f3 fat-free variable
     * @return bool true if valid
     */
    function validPhone($num, $f3) {
        if (!empty($num)) {
            if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $num)) {
                # set a session variable to the input
                //$_SESSION['phone'] = $num;
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

    /**
     * Function to validate the email
     * @param $email string the email
     * @param $f3 fat-free variable
     * @return bool true if valid
     */
    function validEmail($email, $f3) {
        # if entered email matches the right format
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            # set a session variable to the input
            //$_SESSION['email'] = $email;
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

    /**
     * Function to validate the outdoor interests
     * @param $outArray array of outdoor interests
     * @param $f3 fat-free variable
     * @param $array array of valid options
     * @param $obj premium of regular class
     * @return bool true if valid
     */
    function validOutdoor($outArray, $f3, $array, $obj) {
        $isValid = true;

        $_SESSION['outdoor'] = array();
        if (isset($outArray)) {
            foreach ($outArray as $item) {
                if (in_array($item , $array)) {
                    # set a session variable to the input
                    //array_push( $_SESSION['outdoor'], $item);
                    # pass the item to the member class
                    $obj->setOutdoor($item);
                }
                else {
                    $f3->set("errors['outdoor']", "Not a valid option");
                    $isValid = false;
                }

            }
        }

        return $isValid;
    }

// function to validate indoor options

    /**
     * Function to validate the outdoor interests
     * @param $inArray array of indoor interests
     * @param $f3 fat-free variable
     * @param $array array of valid options
     * @param $obj premium of regular class
     * @return bool true if valid
     */
    function validIndoor($inArray, $f3, $array, $obj) {
        $isValid = true;

        $_SESSION['indoor'] = array();
        if (isset($inArray)) {
            foreach ($inArray as $item) {
                if (in_array($item , $array)) {
                    # set a session variable to the input
                    //array_push( $_SESSION['indoor'], $item);
                    # pass the item to the member class
                    $obj->setIndoor($item);
                }
                else {
                    $f3->set("errors['indoor']", "Not a valid option");
                    $isValid = false;
                }

            }
        }
        return $isValid;
    }
}


