<?php

namespace LoisirBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Passion
 *
 * @ORM\Table(name="passion")
 * @ORM\Entity(repositoryClass="LoisirBundle\Repository\PassionRepository")
 */
class Passion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type_passion", type="string", length=255)
     */
    private $typePassion;

    /**
     * @var string
     *
     * @ORM\Column(name="description_carriere", type="string", length=255)
     */
    private $descriptionCarriere;


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
     * Set typePassion
     *
     * @param string $typePassion
     *
     * @return Passion
     */
    public function setTypePassion($typePassion)
    {
        $this->typePassion = $typePassion;

        return $this;
    }

    /**
     * Get typePassion
     *
     * @return string
     */
    public function getTypePassion()
    {
        return $this->typePassion;
    }

    /**
     * Set descriptionCarriere
     *
     * @param string $descriptionCarriere
     *
     * @return Passion
     */
    public function setDescriptionCarriere($descriptionCarriere)
    {
        $this->descriptionCarriere = $descriptionCarriere;

        return $this;
    }

    /**
     * Get descriptionCarriere
     *
     * @return string
     */
    public function getDescriptionCarriere()
    {
        return $this->descriptionCarriere;
    }
}

