<?php

namespace WCS\LyonGameBundle\Entity;

/**
 * TripEnglish
 */
class TripEnglish
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $tripName;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tripName
     *
     * @param string $tripName
     *
     * @return TripEnglish
     */
    public function setTripName($tripName)
    {
        $this->tripName = $tripName;

        return $this;
    }

    /**
     * Get tripName
     *
     * @return string
     */
    public function getTripName()
    {
        return $this->tripName;
    }
}

