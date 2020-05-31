<?php

class Member
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

    /** Default constructor */
    public function __construct()
    {
        $this->_fname = "";
        $this->_lname = "";
        $this->_age = 0;
        $this->_gender = "";
        $this->_phone = "";
        $this->_email = "";
        $this->_state = "";
        $this->_seeking = "";
        $this->_bio = "";
    }


    /** toString() returns a String representation
     * of a member object
     * @return string */
    public function toString()
    {
        return $this->_age;
    }
}
