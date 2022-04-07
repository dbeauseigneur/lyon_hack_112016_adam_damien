<?php

namespace WCS\LyonGameBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
	public function getId(): int
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
	public function setSequence(int $sequence): StopOver
	{
		$this->sequence = $sequence;

		return $this;
	}

	/**
	 * Get sequence
	 *
	 * @return int
	 */
	public function getSequence(): int
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
	public function setCost(int $cost): StopOver
	{
		$this->cost = $cost;

		return $this;
	}

	/**
	 * Get cost
	 *
	 * @return int
	 */
	public function getCost(): int
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
	public function setDuration(string $duration): StopOver
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
	 * Set directive
	 *
	 * @param string $directive
	 *
	 * @return StopOver
	 */
	public function setDirective(string $directive): StopOver
	{
		$this->directive = $directive;

		return $this;
	}

	/**
	 * Get directive
	 *
	 * @return string
	 */
	public function getDirective(): string
	{
		return $this->directive;
	}

	/**
	 * @var Collection
	 */
	private $trips;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->trips = new ArrayCollection();
	}

	/**
	 * Add trip
	 *
	 * @param Trip $trip
	 *
	 * @return StopOver
	 */
	public function addTrip(Trip $trip): StopOver
	{
		$this->trips[] = $trip;

		return $this;
	}

	/**
	 * Remove trip
	 *
	 * @param Trip $trip
	 */
	public function removeTrip(Trip $trip)
	{
		$this->trips->removeElement($trip);
	}

	/**
	 * Get trips
	 *
	 * @return Collection
	 */
	public function getTrips()
	{
		return $this->trips;
	}

	/**
	 * @var Pointerest
	 */
	private $pointerestStart;

	/**
	 * @var Pointerest
	 */
	private $pointerestStop;


	/**
	 * Set pointerestStart
	 *
	 * @param Pointerest $pointerestStart
	 *
	 * @return StopOver
	 */
	public function setPointerestStart(Pointerest $pointerestStart = null): StopOver
	{
		$this->pointerestStart = $pointerestStart;

		return $this;
	}

	/**
	 * Get pointerestStart
	 *
	 * @return Pointerest
	 */
	public function getPointerestStart(): Pointerest
	{
		return $this->pointerestStart;
	}

	/**
	 * Set pointerestStop
	 *
	 * @param Pointerest $pointerestStop
	 *
	 * @return StopOver
	 */
	public function setPointerestStop(Pointerest $pointerestStop = null): StopOver
	{
		$this->pointerestStop = $pointerestStop;

		return $this;
	}

	/**
	 * Get pointerestStop
	 *
	 * @return Pointerest
	 */
	public function getPointerestStop(): Pointerest
	{
		return $this->pointerestStop;
	}
}
