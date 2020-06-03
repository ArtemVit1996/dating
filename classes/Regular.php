<?php

/**
 * Class Regular
 * Gets generated when a user does not choose a premium account
 */
class Regular
{
    // Instance variables
    private $_fname;
    private $_lname;
    private $_age;
    private $_gender;
    private $_phone;
    private $_email;
    private $_state;
    private $_seeking;
    private $_bio;

    /** Default constructor
     * @param string $fname for first name
     * @param string $lname for last
     * @param int $age for age
     * @param string $gender for gender
     * @param string $phone for phone
     * @param string $email for email
     * @param string $state for state
     * @param string $seeking for seeking
     * @param string $bio for bio
     */
    public function __construct($fname = "", $lname = "", $age = 0,
                                $gender = "", $phone = "", $email = "", $state = "",
                                $seeking = "", $bio = "")
    {
        $this->_fname = $fname;
        $this->_lname = $lname;
        $this->_age = $age;
        $this->_gender = $gender;
        $this->_phone = $phone;
        $this->_email = $email;
        $this->_state = $state;
        $this->_seeking = $seeking;
        $this->_bio = $bio;
    }


    /** toString() returns a String representation
     * of a member object
     * @return string
     */
    public function __toString()
    {
        $string = "fname: " . $this->_fname ."<br>";
        $string .= "lname: ". $this->_lname . "<br>";
        $string .= "age: " . $this->_age . "<br>";
        $string .= "gender: " . $this->_gender . "<br>";
        $string .= "phone: " . $this->_phone . "<br>";
        $string .= "email: " . $this->_email . "<br>";
        $string .= "location: " . $this->_state . "<br>";
        $string .= "seeking: " . $this->_seeking . "<br>";
        $string .= "bio: " . $this->_bio . "<br>";

        return $string;
    }

    // ******** Setters **********

    /**
     * Setter for the fname
     * @param $fname
     */
    public function setFname($fname)
    {
        $this->_fname = $fname;
    }

    /**
     * Setter for the lname
     * @param $lname
     */
    public function setLname($lname)
    {
        $this->_lname = $lname;
    }

    /**
     * Setter for the age
     * @param $age
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }

    /**
     * Setter for the gender
     * @param $gender
     */
    public function setGender($gender)
    {
        $this->_gender = $gender;
    }

    /**
     * Setter for the phone
     * @param $phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * Setter for the email
     * @param $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * Setter for the state
     * @param $state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * Setter for the seeking
     * @param $seeking
     */
    public function setSeeking($seeking)
    {
        $this->_seeking = $seeking;
    }

    /**
     * Setter for the bio
     * @param $bio
     */
    public function setBio($bio)
    {
        $this->_bio = $bio;
    }

    // ********** Getters *********

    /**
     * Getter for the fname
     * @return string the fname
     */
    public function getFname()
    {
        return $this->_fname;
    }

    /**
     * Getter for the lname
     * @return string the lname
     */
    public function getLname()
    {
        return $this->_lname;
    }

    /**
     * Getter for the the age
     * @return int the age
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * Getter for the gender
     * @return string the gender
     */
    public function getGender()
    {
        return $this->_gender;
    }

    /**
     * Getter for the phone
     * @return string the phone
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * Getter for the email
     * @return string the email
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * Getter for the state
     * @return string the state
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * Getter for the seeking
     * @return string the seeking
     */
    public function getSeeking()
    {
        return $this->_seeking;
    }

    /**
     * Getter for the bio
     * @return string the bio
     */
    public function getBio()
    {
        return $this->_bio;
    }

}

