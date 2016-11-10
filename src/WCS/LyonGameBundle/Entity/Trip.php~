<?php

namespace WCS\LyonGameBundle\Entity;

/**
 * Trip
 */
class Trip
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $cost;

    /**
     * @var string
     */
    private $duration;

    /**
     * @var string
     */
    private $slug;


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
     * Set cost
     *
     * @param string $cost
     *
     * @return Trip
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
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
     * @return Trip
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Trip
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tripenglish = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Add user
     *
     * @param \WCS\LyonGameBundle\Entity\User $user
     *
     * @return Trip
     */
    public function addUser(\WCS\LyonGameBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \WCS\LyonGameBundle\Entity\User $user
     */
    public function removeUser(\WCS\LyonGameBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $stopOvers;


    /**
     * Add stopOver
     *
     * @param \WCS\LyonGameBundle\Entity\StopOver $stopOver
     *
     * @return Trip
     */
    public function addStopOver(\WCS\LyonGameBundle\Entity\StopOver $stopOver)
    {
        $this->stopOvers[] = $stopOver;

        return $this;
    }

    /**
     * Remove stopOver
     *
     * @param \WCS\LyonGameBundle\Entity\StopOver $stopOver
     */
    public function removeStopOver(\WCS\LyonGameBundle\Entity\StopOver $stopOver)
    {
        $this->stopOvers->removeElement($stopOver);
    }

    /**
     * Get stopOvers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStopOvers()
    {
        return $this->stopOvers;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tripEnglishs;


    /**
     * Get tripenglishs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTripEnglishs()
    {
        return $this->tripenglishs;
    }

    /**
     * Add tripEnglish
     *
     * @param \WCS\LyonGameBundle\Entity\TripEnglish $tripEnglish
     *
     * @return Trip
     */
    public function addTripEnglish(\WCS\LyonGameBundle\Entity\TripEnglish $tripEnglish)
    {
        $this->tripEnglishs[] = $tripEnglish;

        return $this;
    }

    /**
     * Remove tripEnglish
     *
     * @param \WCS\LyonGameBundle\Entity\TripEnglish $tripEnglish
     */
    public function removeTripEnglish(\WCS\LyonGameBundle\Entity\TripEnglish $tripEnglish)
    {
        $this->tripEnglishs->removeElement($tripEnglish);
    }
}
