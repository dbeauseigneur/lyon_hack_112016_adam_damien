<?php

namespace WCS\LyonGameBundle\Entity;

/**
 * StopOver
 */
class StopOver
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $sequence;

    /**
     * @var int
     */
    private $cost;

    /**
     * @var string
     */
    private $duration;

    /**
     * @var string
     */
    private $directive;


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
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return StopOver
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     *
     * @return StopOver
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return StopOver
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set directive
     *
     * @param string $directive
     *
     * @return StopOver
     */
    public function setDirective($directive)
    {
        $this->directive = $directive;

        return $this;
    }

    /**
     * Get directive
     *
     * @return string
     */
    public function getDirective()
    {
        return $this->directive;
    }
}

