<?php

require_once ('class.Spot.php');

class Note{

    private $id;

    private $lesSpots=array();

    function __construct($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLesSpots()
    {
        return $this->lesSpots;
    }



    public function setId($id)
    {
        $this->id = $id;
    }


    public function setLesSpots($lesSpots)
    {
        $this->lesSpots = $lesSpots;
    }
}