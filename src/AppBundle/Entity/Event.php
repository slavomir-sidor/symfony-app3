<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event", indexes={@ORM\Index(name="Customer_ID", columns={"Customer_ID"}), @ORM\Index(name="Employee_ID", columns={"Employee_ID"}), @ORM\Index(name="Service_ID", columns={"Service_ID"}), @ORM\Index(name="price_id", columns={"Price_id"})})
 * @ORM\Entity
 */
class Event
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Price_id", type="integer", nullable=false)
     */
    private $priceId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="Discount", type="float", precision=10, scale=0, nullable=true)
     */
    private $discount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CreateDate", type="datetime", nullable=false)
     */
    private $createdate = 'CURRENT_TIMESTAMP';

    /**
     * @var \AppBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Customer_ID", referencedColumnName="id")
     * })
     */
    private $customer;

    /**
     * @var \AppBundle\Entity\Employee
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Employee_ID", referencedColumnName="id")
     * })
     */
    private $employee;

    /**
     * @var \AppBundle\Entity\Services
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Services")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Service_ID", referencedColumnName="id")
     * })
     */
    private $service;

    /**
     * @var \AppBundle\Entity\Prices
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Prices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="price_id", referencedColumnName="id")
     * })
     */
    private $price;


}

