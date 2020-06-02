<?php

class Premium extends Regular
{
    // Instance variables
    private $_indoorInterests;
    private $_outdoorInterests;

    public function __construct($fname = "", $lname = "", $age = 0, $gender = "", $phone = "", $email = "",
                                $state = "", $seeking = "", $bio = "",$indoor = array(), $outdoor = array())
    {
        parent::__construct($fname, $lname, $age, $gender, $phone, $email, $state, $seeking, $bio);
        $this->setIndoor($indoor);
        $this->setOutdoor($outdoor);
    }

    // Setters
    public function setIndoor($indoor)
    {
        $this->_indoorInterests = $indoor;
    }
    public function setOutdoor($outdoor)
    {
        $this->_outdoorInterests = $outdoor;
    }

    // Getters
    public function getIndoor()
    {
        return $this->_indoorInterests;
    }
    public function getOutdoor()
    {
        return $this->_outdoorInterests;
    }

    // toString
    public function __toString()
    {
        $string = implode(", ",$this->_indoorInterests) . ", ";
        $string .= implode(", ", $this->_outdoorInterests);
        return $string;

    }
}