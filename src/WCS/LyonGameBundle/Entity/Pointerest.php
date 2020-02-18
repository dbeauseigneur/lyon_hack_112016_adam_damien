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
	public function getId()
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
	public function setLatitude($latitude)
	{
		$this->latitude = $latitude;

		return $this;
	}

	/**
	 * Get latitude
	 *
	 * @return string
	 */
	public function getLatitude()
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
	public function setLongitude($longitude)
	{
		$this->longitude = $longitude;

		return $this;
	}

	/**
	 * Get longitude
	 *
	 * @return string
	 */
	public function getLongitude()
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
	public function setAltitude($altitude)
	{
		$this->altitude = $altitude;

		return $this;
	}

	/**
	 * Get altitude
	 *
	 * @return string
	 */
	public function getAltitude()
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
	public function setGeometry($geometry)
	{
		$this->geometry = $geometry;

		return $this;
	}

	/**
	 * Get geometry
	 *
	 * @return string
	 */
	public function getGeometry()
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
	public function setIdSitra1($idSitra1)
	{
		$this->idSitra1 = $idSitra1;

		return $this;
	}

	/**
	 * Get idSitra1
	 *
	 * @return string
	 */
	public function getIdSitra1()
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
	public function setType($type)
	{
		$this->type = $type;

		return $this;
	}

	/**
	 * Get type
	 *
	 * @return string
	 */
	public function getType()
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
	public function setTypeDetail($typeDetail)
	{
		$this->typeDetail = $typeDetail;

		return $this;
	}

	/**
	 * Get typeDetail
	 *
	 * @return string
	 */
	public function getTypeDetail()
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
	public function setNom($nom)
	{
		$this->nom = $nom;

		return $this;
	}

	/**
	 * Get nom
	 *
	 * @return string
	 */
	public function getNom()
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
	public function setAdresse($adresse)
	{
		$this->adresse = $adresse;

		return $this;
	}

	/**
	 * Get adresse
	 *
	 * @return string
	 */
	public function getAdresse()
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
	public function setCodepostal($codepostal)
	{
		$this->codepostal = $codepostal;

		return $this;
	}

	/**
	 * Get codepostal
	 *
	 * @return integer
	 */
	public function getCodepostal()
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
	public function setCommune($commune)
	{
		$this->commune = $commune;

		return $this;
	}

	/**
	 * Get commune
	 *
	 * @return string
	 */
	public function getCommune()
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
	public function setTelephone($telephone)
	{
		$this->telephone = $telephone;

		return $this;
	}

	/**
	 * Get telephone
	 *
	 * @return string
	 */
	public function getTelephone()
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
	public function setFax($fax)
	{
		$this->fax = $fax;

		return $this;
	}

	/**
	 * Get fax
	 *
	 * @return string
	 */
	public function getFax()
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
	public function setTelephonefax($telephonefax)
	{
		$this->telephonefax = $telephonefax;

		return $this;
	}

	/**
	 * Get telephonefax
	 *
	 * @return string
	 */
	public function getTelephonefax()
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
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get email
	 *
	 * @return string
	 */
	public function getEmail()
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
	public function setSiteweb($siteweb)
	{
		$this->siteweb = $siteweb;

		return $this;
	}

	/**
	 * Get siteweb
	 *
	 * @return string
	 */
	public function getSiteweb()
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
	public function setFacebook($facebook)
	{
		$this->facebook = $facebook;

		return $this;
	}

	/**
	 * Get facebook
	 *
	 * @return string
	 */
	public function getFacebook()
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
	public function setClassement($classement)
	{
		$this->classement = $classement;

		return $this;
	}

	/**
	 * Get classement
	 *
	 * @return string
	 */
	public function getClassement()
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
	public function setOuverture($ouverture)
	{
		$this->ouverture = $ouverture;

		return $this;
	}

	/**
	 * Get ouverture
	 *
	 * @return string
	 */
	public function getOuverture()
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
	public function setTarifsenclair($tarifsenclair)
	{
		$this->tarifsenclair = $tarifsenclair;

		return $this;
	}

	/**
	 * Get tarifsenclair
	 *
	 * @return string
	 */
	public function getTarifsenclair()
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
	public function setTarifsmin($tarifsmin)
	{
		$this->tarifsmin = $tarifsmin;

		return $this;
	}

	/**
	 * Get tarifsmin
	 *
	 * @return string
	 */
	public function getTarifsmin()
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
	public function setTarifsmax($tarifsmax)
	{
		$this->tarifsmax = $tarifsmax;

		return $this;
	}

	/**
	 * Get tarifsmax
	 *
	 * @return string
	 */
	public function getTarifsmax()
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
	public function setProducteur($producteur)
	{
		$this->producteur = $producteur;

		return $this;
	}

	/**
	 * Get producteur
	 *
	 * @return string
	 */
	public function getProducteur()
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
	public function setGid($gid)
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
