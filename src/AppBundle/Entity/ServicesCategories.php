<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServicesCategories
 *
 * @ORM\Table(name="services_categories", indexes={@ORM\Index(name="parent_id", columns={"parent_id"})})
 * @ORM\Entity
 */
class ServicesCategories
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
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var \AppBundle\Entity\ServicesCategories
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ServicesCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;


}

