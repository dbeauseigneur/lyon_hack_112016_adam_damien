<?php

namespace WCS\LyonGameBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

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
	public function getId(): int
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
	public function setCost(string $cost): Trip
	{
		$this->cost = $cost;

		return $this;
	}

	/**
	 * Get cost
	 *
	 * @return string
	 */
	public function getCost(): string
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
	public function setDuration(string $duration): Trip
	{
		$this->duration = $duration;

		return $this;
	}

	/**
	 * Get duration
	 *
	 * @return string
	 */
	public function getDuration(): string
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
	public function setSlug(string $slug): Trip
	{
		$this->slug = $slug;

		return $this;
	}

	/**
	 * Get slug
	 *
	 * @return string
	 */
	public function getSlug(): string
	{
		return $this->slug;
	}

	/**
	 * @var Collection
	 */
	private $users;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->tripEnglish = new ArrayCollection();
		$this->users = new ArrayCollection();
	}


	/**
	 * Add user
	 *
	 * @param User $user
	 *
	 * @return Trip
	 */
	public function addUser(User $user): Trip
	{
		$this->users[] = $user;

		return $this;
	}

	/**
	 * Remove user
	 *
	 * @param User $user
	 */
	public function removeUser(User $user)
	{
		$this->users->removeElement($user);
	}

	/**
	 * Get users
	 *
	 * @return Collection
	 */
	public function getUsers()
	{
		return $this->users;
	}

	/**
	 * @var Collection
	 */
	private $stopOvers;


	/**
	 * Add stopOver
	 *
	 * @param StopOver $stopOver
	 *
	 * @return Trip
	 */
	public function addStopOver(StopOver $stopOver): Trip
	{
		$this->stopOvers[] = $stopOver;

		return $this;
	}

	/**
	 * Remove stopOver
	 *
	 * @param StopOver $stopOver
	 */
	public function removeStopOver(StopOver $stopOver)
	{
		$this->stopOvers->removeElement($stopOver);
	}

	/**
	 * Get stopOvers
	 *
	 * @return Collection
	 */
	public function getStopOvers(): Collection
	{
		return $this->stopOvers;
	}

	/**
	 * @var Collection
	 */
	private $tripEnglishs;


	/**
	 * Get tripEnglishs
	 *
	 * @return Collection
	 */
	public function getTripEnglishs(): Collection
	{
		return $this->tripEnglishs;
	}

	/**
	 * Add tripEnglish
	 *
	 * @param TripEnglish $tripEnglish
	 *
	 * @return Trip
	 */
	public function addTripEnglish(TripEnglish $tripEnglish): Trip
	{
		$this->tripEnglishs[] = $tripEnglish;

		return $this;
	}

	/**
	 * Remove tripEnglish
	 *
	 * @param TripEnglish $tripEnglish
	 */
	public function removeTripEnglish(TripEnglish $tripEnglish)
	{
		$this->tripEnglishs->removeElement($tripEnglish);
	}
}
