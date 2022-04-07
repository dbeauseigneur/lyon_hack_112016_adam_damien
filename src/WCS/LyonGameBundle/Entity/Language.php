<?php

namespace WCS\LyonGameBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

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
	public function getId(): int
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
	public function setLang(string $lang): Language
	{
		$this->lang = $lang;

		return $this;
	}

	/**
	 * Get lang
	 *
	 * @return string
	 */
	public function getLang(): string
	{
		return $this->lang;
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
		$this->users = new ArrayCollection();
	}

	/**
	 * Add user
	 *
	 * @param User $user
	 *
	 * @return Language
	 */
	public function addUser(User $user): Language
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
	private $tripEnglishs;


	/**
	 * Add tripEnglish
	 *
	 * @param TripEnglish $tripEnglish
	 *
	 * @return Language
	 */
	public function addTripEnglish(TripEnglish $tripEnglish): Language
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

	/**
	 * Get tripEnglishs
	 *
	 * @return Collection
	 */
	public function getTripEnglishs(): Collection
	{
		return $this->tripEnglishs;
	}


}
