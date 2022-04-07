<?php

namespace WCS\LyonGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Pointerest
 */
class Pointerest
{
	/**
	 * @var integer
	 */
	private $id;

	/**
	 * @var string
	 */
	private $latitude;

	/**
	 * @var string
	 */
	private $longitude;

	/**
	 * @var string
	 */
	private $altitude;

	/**
	 * @var string
	 */
	private $geometry;

	/**
	 * @var string
	 */
	private $idSitra1;

	/**
	 * @var string
	 */
	private $type;

	/**
	 * @var string
	 */
	private $typeDetail;

	/**
	 * @var string
	 */
	private $nom;

	/**
	 * @var string
	 */
	private $adresse;

	/**
	 * @var integer
	 */
	private $codepostal;

	/**
	 * @var string
	 */
	private $commune;

	/**
	 * @var string
	 */
	private $telephone;

	/**
	 * @var string
	 */
	private $fax;

	/**
	 * @var string
	 */
	private $telephonefax;

	/**
	 * @var string
	 */
	private $email;

	/**
	 * @var string
	 */
	private $siteweb;

	/**
	 * @var string
	 */
	private $facebook;

	/**
	 * @var string
	 */
	private $classement;

	/**
	 * @var string
	 */
	private $ouverture;

	/**
	 * @var string
	 */
	private $tarifsenclair;

	/**
	 * @var string
	 */
	private $tarifsmin;

	/**
	 * @var string
	 */
	private $tarifsmax;

	/**
	 * @var string
	 */
	private $producteur;

	/**
	 * @var integer
	 */
	private $gid;

	/**
	 * @var string
	 */
	private $dateCreation;

	/**
	 * @var string
	 */
	private $lastUpdate;

	/**
	 * @var string
	 */
	private $lastUpdateFme;


	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * Set latitude
	 *
	 * @param string $latitude
	 *
	 * @return Pointerest
	 */
	public function setLatitude(string $latitude): Pointerest
	{
		$this->latitude = $latitude;

		return $this;
	}

	/**
	 * Get latitude
	 *
	 * @return string
	 */
	public function getLatitude(): string
	{
		return $this->latitude;
	}

	/**
	 * Set longitude
	 *
	 * @param string $longitude
	 *
	 * @return Pointerest
	 */
	public function setLongitude(string $longitude): Pointerest
	{
		$this->longitude = $longitude;

		return $this;
	}

	/**
	 * Get longitude
	 *
	 * @return string
	 */
	public function getLongitude(): string
	{
		return $this->longitude;
	}

	/**
	 * Set altitude
	 *
	 * @param string $altitude
	 *
	 * @return Pointerest
	 */
	public function setAltitude(string $altitude): Pointerest
	{
		$this->altitude = $altitude;

		return $this;
	}

	/**
	 * Get altitude
	 *
	 * @return string
	 */
	public function getAltitude(): string
	{
		return $this->altitude;
	}

	/**
	 * Set geometry
	 *
	 * @param string $geometry
	 *
	 * @return Pointerest
	 */
	public function setGeometry($geometry): Pointerest
	{
		$this->geometry = $geometry;

		return $this;
	}

	/**
	 * Get geometry
	 *
	 * @return string
	 */
	public function getGeometry(): string
	{
		return $this->geometry;
	}

	/**
	 * Set idSitra1
	 *
	 * @param string $idSitra1
	 *
	 * @return Pointerest
	 */
	public function setIdSitra1(string $idSitra1): Pointerest
	{
		$this->idSitra1 = $idSitra1;

		return $this;
	}

	/**
	 * Get idSitra1
	 *
	 * @return string
	 */
	public function getIdSitra1(): string
	{
		return $this->idSitra1;
	}

	/**
	 * Set type
	 *
	 * @param string $type
	 *
	 * @return Pointerest
	 */
	public function setType(string $type): Pointerest
	{
		$this->type = $type;

		return $this;
	}

	/**
	 * Get type
	 *
	 * @return string
	 */
	public function getType(): string
	{
		return $this->type;
	}

	/**
	 * Set typeDetail
	 *
	 * @param string $typeDetail
	 *
	 * @return Pointerest
	 */
	public function setTypeDetail(string $typeDetail): Pointerest
	{
		$this->typeDetail = $typeDetail;

		return $this;
	}

	/**
	 * Get typeDetail
	 *
	 * @return string
	 */
	public function getTypeDetail(): string
	{
		return $this->typeDetail;
	}

	/**
	 * Set nom
	 *
	 * @param string $nom
	 *
	 * @return Pointerest
	 */
	public function setNom(string $nom): Pointerest
	{
		$this->nom = $nom;

		return $this;
	}

	/**
	 * Get nom
	 *
	 * @return string
	 */
	public function getNom(): string
	{
		return $this->nom;
	}

	/**
	 * Set adresse
	 *
	 * @param string $adresse
	 *
	 * @return Pointerest
	 */
	public function setAdresse(string $adresse): Pointerest
	{
		$this->adresse = $adresse;

		return $this;
	}

	/**
	 * Get adresse
	 *
	 * @return string
	 */
	public function getAdresse(): string
	{
		return $this->adresse;
	}

	/**
	 * Set codepostal
	 *
	 * @param integer $codepostal
	 *
	 * @return Pointerest
	 */
	public function setCodepostal(int $codepostal): Pointerest
	{
		$this->codepostal = $codepostal;

		return $this;
	}

	/**
	 * Get codepostal
	 *
	 * @return integer
	 */
	public function getCodepostal(): int
	{
		return $this->codepostal;
	}

	/**
	 * Set commune
	 *
	 * @param string $commune
	 *
	 * @return Pointerest
	 */
	public function setCommune(string $commune): Pointerest
	{
		$this->commune = $commune;

		return $this;
	}

	/**
	 * Get commune
	 *
	 * @return string
	 */
	public function getCommune(): string
	{
		return $this->commune;
	}

	/**
	 * Set telephone
	 *
	 * @param string $telephone
	 *
	 * @return Pointerest
	 */
	public function setTelephone(string $telephone): Pointerest
	{
		$this->telephone = $telephone;

		return $this;
	}

	/**
	 * Get telephone
	 *
	 * @return string
	 */
	public function getTelephone(): string
	{
		return $this->telephone;
	}

	/**
	 * Set fax
	 *
	 * @param string $fax
	 *
	 * @return Pointerest
	 */
	public function setFax(string $fax): Pointerest
	{
		$this->fax = $fax;

		return $this;
	}

	/**
	 * Get fax
	 *
	 * @return string
	 */
	public function getFax(): string
	{
		return $this->fax;
	}

	/**
	 * Set telephonefax
	 *
	 * @param string $telephonefax
	 *
	 * @return Pointerest
	 */
	public function setTelephonefax(string $telephonefax): Pointerest
	{
		$this->telephonefax = $telephonefax;

		return $this;
	}

	/**
	 * Get telephonefax
	 *
	 * @return string
	 */
	public function getTelephonefax(): string
	{
		return $this->telephonefax;
	}

	/**
	 * Set email
	 *
	 * @param string $email
	 *
	 * @return Pointerest
	 */
	public function setEmail(string $email): Pointerest
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get email
	 *
	 * @return string
	 */
	public function getEmail(): string
	{
		return $this->email;
	}

	/**
	 * Set siteweb
	 *
	 * @param string $siteweb
	 *
	 * @return Pointerest
	 */
	public function setSiteweb(string $siteweb): Pointerest
	{
		$this->siteweb = $siteweb;

		return $this;
	}

	/**
	 * Get siteweb
	 *
	 * @return string
	 */
	public function getSiteweb(): string
	{
		return $this->siteweb;
	}

	/**
	 * Set facebook
	 *
	 * @param string $facebook
	 *
	 * @return Pointerest
	 */
	public function setFacebook(string $facebook): Pointerest
	{
		$this->facebook = $facebook;

		return $this;
	}

	/**
	 * Get facebook
	 *
	 * @return string
	 */
	public function getFacebook(): string
	{
		return $this->facebook;
	}

	/**
	 * Set classement
	 *
	 * @param string $classement
	 *
	 * @return Pointerest
	 */
	public function setClassement(string $classement): Pointerest
	{
		$this->classement = $classement;

		return $this;
	}

	/**
	 * Get classement
	 *
	 * @return string
	 */
	public function getClassement(): string
	{
		return $this->classement;
	}

	/**
	 * Set ouverture
	 *
	 * @param string $ouverture
	 *
	 * @return Pointerest
	 */
	public function setOuverture(string $ouverture): Pointerest
	{
		$this->ouverture = $ouverture;

		return $this;
	}

	/**
	 * Get ouverture
	 *
	 * @return string
	 */
	public function getOuverture(): string
	{
		return $this->ouverture;
	}

	/**
	 * Set tarifsenclair
	 *
	 * @param string $tarifsenclair
	 *
	 * @return Pointerest
	 */
	public function setTarifsenclair(string $tarifsenclair): Pointerest
	{
		$this->tarifsenclair = $tarifsenclair;

		return $this;
	}

	/**
	 * Get tarifsenclair
	 *
	 * @return string
	 */
	public function getTarifsenclair(): string
	{
		return $this->tarifsenclair;
	}

	/**
	 * Set tarifsmin
	 *
	 * @param string $tarifsmin
	 *
	 * @return Pointerest
	 */
	public function setTarifsmin(string $tarifsmin): Pointerest
	{
		$this->tarifsmin = $tarifsmin;

		return $this;
	}

	/**
	 * Get tarifsmin
	 *
	 * @return string
	 */
	public function getTarifsmin(): string
	{
		return $this->tarifsmin;
	}

	/**
	 * Set tarifsmax
	 *
	 * @param string $tarifsmax
	 *
	 * @return Pointerest
	 */
	public function setTarifsmax(string $tarifsmax): Pointerest
	{
		$this->tarifsmax = $tarifsmax;

		return $this;
	}

	/**
	 * Get tarifsmax
	 *
	 * @return string
	 */
	public function getTarifsmax(): string
	{
		return $this->tarifsmax;
	}

	/**
	 * Set producteur
	 *
	 * @param string $producteur
	 *
	 * @return Pointerest
	 */
	public function setProducteur(string $producteur): Pointerest
	{
		$this->producteur = $producteur;

		return $this;
	}

	/**
	 * Get producteur
	 *
	 * @return string
	 */
	public function getProducteur(): string
	{
		return $this->producteur;
	}

	/**
	 * Set gid
	 *
	 * @param integer $gid
	 *
	 * @return Pointerest
	 */
	public function setGid($gid): Pointerest
	{
		$this->gid = $gid;

		return $this;
	}

	/**
	 * Get gid
	 *
	 * @return integer
	 */
	public function getGid()
	{
		return $this->gid;
	}

	/**
	 * Set dateCreation
	 *
	 * @param string $dateCreation
	 *
	 * @return Pointerest
	 */
	public function setDateCreation($dateCreation)
	{
		$this->dateCreation = $dateCreation;

		return $this;
	}

	/**
	 * Get dateCreation
	 *
	 * @return string
	 */
	public function getDateCreation()
	{
		return $this->dateCreation;
	}

	/**
	 * Set lastUpdate
	 *
	 * @param string $lastUpdate
	 *
	 * @return Pointerest
	 */
	public function setLastUpdate($lastUpdate)
	{
		$this->lastUpdate = $lastUpdate;

		return $this;
	}

	/**
	 * Get lastUpdate
	 *
	 * @return string
	 */
	public function getLastUpdate()
	{
		return $this->lastUpdate;
	}

	/**
	 * Set lastUpdateFme
	 *
	 * @param string $lastUpdateFme
	 *
	 * @return Pointerest
	 */
	public function setLastUpdateFme($lastUpdateFme)
	{
		$this->lastUpdateFme = $lastUpdateFme;

		return $this;
	}

	/**
	 * Get lastUpdateFme
	 *
	 * @return string
	 */
	public function getLastUpdateFme()
	{
		return $this->lastUpdateFme;
	}
}
