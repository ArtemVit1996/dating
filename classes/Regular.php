<?php

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
        $string = $this->_fname . ", ";
        $string .= $this->_lname . ", ";
        $string .= $this->_age;
        return $string;
    }

    // ******** Setters **********
    public function setFname($fname)
    {
        $this->_fname = $fname;
    }
    public function setLname($lname)
    {
        $this->_lname = $lname;
    }
    public function setAge($age)
    {
        $this->_age = $age;
    }
    public function setGender($gender)
    {
        $this->_gender = $gender;
    }
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }
    public function setEmail($email)
    {
        $this->_email = $email;
    }
    public function setState($state)
    {
        $this->_state = $state;
    }
    public function setSeeking($seeking)
    {
        $this->_seeking = $seeking;
    }
    public function setBio($bio)
    {
        $this->_bio = $bio;
    }

    // ********** Getters *********
    public function getFname()
    {
        return $this->_fname;
    }
    public function getLname()
    {
        return $this->_lname;
    }
    public function getAge()
    {
        return $this->_age;
    }
    public function getGender()
    {
        return $this->_gender;
    }
    public function getPhone()
    {
        return $this->_phone;
    }
    public function getEmail()
    {
        return $this->_email;
    }
    public function getState()
    {
        return $this->_state;
    }
    public function getSeeking()
    {
        return $this->_seeking;
    }
    public function getBio()
    {
        return $this->_bio;
    }





}

// testing the class
//$member = new Regular("artem", "vit");
//echo $member->toString();
//$member2 = new Regular("artem", "vit");
//$member2->setGender("Maaan");
//$member2->setAge(44);
//echo $member2->toString();
