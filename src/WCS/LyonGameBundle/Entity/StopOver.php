<?php

namespace WCS\LyonGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
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

	/**
	 * @var \Doctrine\Common\Collections\Collection
	 */
	private $trips;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->trips = new \Doctrine\Common\Collections\ArrayCollection();
	}

	/**
	 * Add trip
	 *
	 * @param \WCS\LyonGameBundle\Entity\Trip $trip
	 *
	 * @return StopOver
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

	/**
	 * @var \WCS\LyonGameBundle\Entity\Pointerest
	 */
	private $pointerestStart;

	/**
	 * @var \WCS\LyonGameBundle\Entity\Pointerest
	 */
	private $pointerestStop;


	/**
	 * Set pointerestStart
	 *
	 * @param \WCS\LyonGameBundle\Entity\Pointerest $pointerestStart
	 *
	 * @return StopOver
	 */
	public function setPointerestStart(\WCS\LyonGameBundle\Entity\Pointerest $pointerestStart = null)
	{
		$this->pointerestStart = $pointerestStart;

		return $this;
	}

	/**
	 * Get pointerestStart
	 *
	 * @return \WCS\LyonGameBundle\Entity\Pointerest
	 */
	public function getPointerestStart()
	{
		return $this->pointerestStart;
	}

	/**
	 * Set pointerestStop
	 *
	 * @param \WCS\LyonGameBundle\Entity\Pointerest $pointerestStop
	 *
	 * @return StopOver
	 */
	public function setPointerestStop(\WCS\LyonGameBundle\Entity\Pointerest $pointerestStop = null)
	{
		$this->pointerestStop = $pointerestStop;

		return $this;
	}

	/**
	 * Get pointerestStop
	 *
	 * @return \WCS\LyonGameBundle\Entity\Pointerest
	 */
	public function getPointerestStop()
	{
		return $this->pointerestStop;
	}
}
