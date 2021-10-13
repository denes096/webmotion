<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice
 *
 * @ORM\Table(name="invoice")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InvoiceRepository")
 */
class Invoice
{
	public const TYPES = [
		0 => "Magánszemély",
		1 => "Cég"
	];

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="phone_number", type="integer", nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_number", type="string", length=255, nullable=true, unique=true)
     */
    private $taxNumber;

	/**
	 * @ORM\ManyToOne(targetEntity="Country")
	 * @ORM\JoinColumn(name="country", referencedColumnName="id")
	 */
    private $country;

    /**
     * @var int
     *
     * @ORM\Column(name="zip_code", type="integer")
     */
    private $zipCode;

	/**
	 * @ORM\ManyToOne(targetEntity="City")
	 * @ORM\JoinColumn(name="city", referencedColumnName="id")
	 */
	private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="street_and_number", type="string", length=255)
     */
    private $streetAndNumber;


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
     * Set type
     *
     * @param integer $type
     *
     * @return Invoice
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Invoice
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     *
     * @return Invoice
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return int
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set taxNumber
     *
     * @param string $taxNumber
     *
     * @return Invoice
     */
    public function setTaxNumber($taxNumber)
    {
        $this->taxNumber = $taxNumber;

        return $this;
    }

    /**
     * Get taxNumber
     *
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->taxNumber;
    }

    /**
     * Set country
     *
     * @param integer $country
     *
     * @return Invoice
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return int
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set zipCode
     *
     * @param integer $zipCode
     *
     * @return Invoice
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return int
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Invoice
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set streetAndNumber
     *
     * @param string $streetAndNumber
     *
     * @return Invoice
     */
    public function setStreetAndNumber($streetAndNumber)
    {
        $this->streetAndNumber = $streetAndNumber;

        return $this;
    }

    /**
     * Get streetAndNumber
     *
     * @return string
     */
    public function getStreetAndNumber()
    {
        return $this->streetAndNumber;
    }
}

