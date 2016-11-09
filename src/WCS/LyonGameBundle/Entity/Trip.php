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
    private $tripenglish;

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
     * Add tripenglish
     *
     * @param \WCS\LyonGameBundle\Entity\TripEnglish $tripenglish
     *
     * @return Trip
     */
    public function addTripenglish(\WCS\LyonGameBundle\Entity\TripEnglish $tripenglish)
    {
        $this->tripenglish[] = $tripenglish;

        return $this;
    }

    /**
     * Remove tripenglish
     *
     * @param \WCS\LyonGameBundle\Entity\TripEnglish $tripenglish
     */
    public function removeTripenglish(\WCS\LyonGameBundle\Entity\TripEnglish $tripenglish)
    {
        $this->tripenglish->removeElement($tripenglish);
    }

    /**
     * Get tripenglish
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTripenglish()
    {
        return $this->tripenglish;
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
}
