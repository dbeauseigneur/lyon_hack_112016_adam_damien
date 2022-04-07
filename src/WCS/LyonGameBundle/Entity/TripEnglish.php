<?php

namespace WCS\LyonGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
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
	public function getId(): int
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
	public function setTripName(string $tripName): TripEnglish
	{
		$this->tripName = $tripName;

		return $this;
	}

	/**
	 * Get tripName
	 *
	 * @return string
	 */
	public function getTripName(): string
	{
		return $this->tripName;
	}

	/**
	 * @var Trip
	 */
	private $trip;


	/**
	 * Set trip
	 *
	 * @param Trip $trip
	 *
	 * @return TripEnglish
	 */
	public function setTrip(Trip $trip = null): TripEnglish
	{
		$this->trip = $trip;

		return $this;
	}

	/**
	 * Get trip
	 *
	 * @return Trip
	 */
	public function getTrip(): Trip
	{
		return $this->trip;
	}

	/**
	 * @var Language
	 */
	private $language;


	/**
	 * Set language
	 *
	 * @param Language $language
	 *
	 * @return TripEnglish
	 */
	public function setLanguage(Language $language = null): TripEnglish
	{
		$this->language = $language;

		return $this;
	}

	/**
	 * Get language
	 *
	 * @return Language
	 */
	public function getLanguage(): Language
	{
		return $this->language;
	}
}
