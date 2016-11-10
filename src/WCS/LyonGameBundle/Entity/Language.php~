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
    private $tripEnglishs;


    /**
     * Add tripenglish
     *
     * @param \WCS\LyonGameBundle\Entity\TripEnglish $tripEnglish
     *
     * @return Language
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

    /**
     * Get tripEnglishs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTripEnglishs()
    {
        return $this->tripEnglishs;
    }



}
