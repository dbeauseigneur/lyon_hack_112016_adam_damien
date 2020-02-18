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

	/**
	 * @var \WCS\LyonGameBundle\Entity\Trip
	 */
	private $trip;


	/**
	 * Set trip
	 *
	 * @param \WCS\LyonGameBundle\Entity\Trip $trip
	 *
	 * @return TripEnglish
	 */
	public function setTrip(\WCS\LyonGameBundle\Entity\Trip $trip = null)
	{
		$this->trip = $trip;

		return $this;
	}

	/**
	 * Get trip
	 *
	 * @return \WCS\LyonGameBundle\Entity\Trip
	 */
	public function getTrip()
	{
		return $this->trip;
	}

	/**
	 * @var \WCS\LyonGameBundle\Entity\Language
	 */
	private $language;


	/**
	 * Set language
	 *
	 * @param \WCS\LyonGameBundle\Entity\Language $language
	 *
	 * @return TripEnglish
	 */
	public function setLanguage(\WCS\LyonGameBundle\Entity\Language $language = null)
	{
		$this->language = $language;

		return $this;
	}

	/**
	 * Get language
	 *
	 * @return \WCS\LyonGameBundle\Entity\Language
	 */
	public function getLanguage()
	{
		return $this->language;
	}
}
