<?php

namespace WCS\LyonGameBundle\Entity;

/**
 * Language
 */
class Language
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $lang;


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
     * Set lang
     *
     * @param string $lang
     *
     * @return Language
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
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
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \WCS\LyonGameBundle\Entity\User $user
     *
     * @return Language
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
    private $trips;


    /**
     * Add trip
     *
     * @param \WCS\LyonGameBundle\Entity\Trip $trip
     *
     * @return Language
     */
    public function addTrip(\WCS\LyonGameBundle\Entity\Trip $trip)
    {
        $this->trips[] = $trip;

        return $this;
    }

    /**
     * Remove trip
     *
     * @param \WCS\LyonGameBundle\Entity\Trip $trip
     */
    public function removeTrip(\WCS\LyonGameBundle\Entity\Trip $trip)
    {
        $this->trips->removeElement($trip);
    }

    /**
     * Get trips
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTrips()
    {
        return $this->trips;
    }
}
