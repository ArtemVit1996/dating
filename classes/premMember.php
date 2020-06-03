<?php

/**
 * Class Premium
 * Gets generated when the user chooses to go premium
 */
class Premium extends Regular
{
    // Instance variables

    private $_indoorInterests;
    private $_outdoorInterests;

    /**
     * Premium constructor.
     * @param string $fname the fname
     * @param string $lname the lname
     * @param int $age the age
     * @param string $gender the gender
     * @param string $phone the phone
     * @param string $email the email
     * @param string $state the state
     * @param string $seeking the seeking
     * @param string $bio the bio
     * @param array $indoor the indoor array
     * @param array $outdoor the outdoor array
     */
    public function __construct($fname = "", $lname = "", $age = 0, $gender = "", $phone = "", $email = "",
                                $state = "", $seeking = "", $bio = "", $indoor = array(), $outdoor = array())
    {
        parent::__construct($fname, $lname, $age, $gender, $phone, $email, $state, $seeking, $bio);
        $this->_indoorInterests = $indoor;
        $this->_outdoorInterests = $outdoor;
    }

    // Setters

    /**
     * Sets selected items into indoor array
     * @param $indoor array item
     */
    public function setIndoor($indoor)
    {
        array_push($this->_indoorInterests, $indoor);
        //$this->_indoorInterests = $indoor;
    }

    /**
     * Sets selected items into outdoor array
     * @param $outdoor array item
     */
    public function setOutdoor($outdoor)
    {
        array_push($this->_outdoorInterests, $outdoor);
        //$this->_outdoorInterests = $outdoor;
    }

    // Getters

    /**
     * Returns the indoor array
     * @return array the indoor array
     */
    public function getIndoor()
    {
        return $this->_indoorInterests;
    }

    /**
     * Returns the outdoor array
     * @return array the outdoor array
     */
    public function getOutdoor()
    {
        return $this->_outdoorInterests;
    }

    // toString

    /**
     * Class toString
     * @return string
     */
    public function __toString()
    {
        $string = implode(", ",$this->_indoorInterests) . ", ";
        $string .= implode(", ", $this->_outdoorInterests);
        return $string;

    }
}