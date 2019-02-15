<?php

namespace LoisirBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Association
 *
 * @ORM\Table(name="association")
 * @ORM\Entity(repositoryClass="LoisirBundle\Repository\AssociationRepository")
 */
class Association
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
     * @ORM\Column(name="name_assoc", type="string", length=255)
     */
    private $nameAssoc;

    /**
     * @var int
     *
     * @ORM\Column(name="nbre_membre", type="integer")
     */
    private $nbreMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="description_assoc", type="string", length=255)
     */
    private $descriptionAssoc;

    /**
     * @var string
     *
     * @ORM\Column(name="type_assoc", type="string", length=255)
     */
    private $typeAssoc;


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
     * Set nameAssoc
     *
     * @param string $nameAssoc
     *
     * @return Association
     */
    public function setNameAssoc($nameAssoc)
    {
        $this->nameAssoc = $nameAssoc;

        return $this;
    }

    /**
     * Get nameAssoc
     *
     * @return string
     */
    public function getNameAssoc()
    {
        return $this->nameAssoc;
    }

    /**
     * Set nbreMembre
     *
     * @param integer $nbreMembre
     *
     * @return Association
     */
    public function setNbreMembre($nbreMembre)
    {
        $this->nbreMembre = $nbreMembre;

        return $this;
    }

    /**
     * Get nbreMembre
     *
     * @return int
     */
    public function getNbreMembre()
    {
        return $this->nbreMembre;
    }

    /**
     * Set descriptionAssoc
     *
     * @param string $descriptionAssoc
     *
     * @return Association
     */
    public function setDescriptionAssoc($descriptionAssoc)
    {
        $this->descriptionAssoc = $descriptionAssoc;

        return $this;
    }

    /**
     * Get descriptionAssoc
     *
     * @return string
     */
    public function getDescriptionAssoc()
    {
        return $this->descriptionAssoc;
    }

    /**
     * Set typeAssoc
     *
     * @param string $typeAssoc
     *
     * @return Association
     */
    public function setTypeAssoc($typeAssoc)
    {
        $this->typeAssoc = $typeAssoc;

        return $this;
    }

    /**
     * Get typeAssoc
     *
     * @return string
     */
    public function getTypeAssoc()
    {
        return $this->typeAssoc;
    }
    /**
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $client_assoc;
}

