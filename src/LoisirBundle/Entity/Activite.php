<?php

namespace LoisirBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="activite")
 * @ORM\Entity(repositoryClass="LoisirBundle\Repository\ActiviteRepository")
 */
class Activite
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
     * @ORM\Column(name="nom_atelier", type="string", length=255)
     */
    private $nomAtelier;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulty", type="string", length=255)
     */
    private $difficulty;

    /**
     * @var int
     *
     * @ORM\Column(name="nbre_pts", type="integer")
     */
    private $nbrePts;


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
     * Set nomAtelier
     *
     * @param string $nomAtelier
     *
     * @return Activite
     */
    public function setNomAtelier($nomAtelier)
    {
        $this->nomAtelier = $nomAtelier;

        return $this;
    }

    /**
     * Get nomAtelier
     *
     * @return string
     */
    public function getNomAtelier()
    {
        return $this->nomAtelier;
    }

    /**
     * Set difficulty
     *
     * @param string $difficulty
     *
     * @return Activite
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return string
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set nbrePts
     *
     * @param integer $nbrePts
     *
     * @return Activite
     */
    public function setNbrePts($nbrePts)
    {
        $this->nbrePts = $nbrePts;

        return $this;
    }

    /**
     * Get nbrePts
     *
     * @return int
     */
    public function getNbrePts()
    {
        return $this->nbrePts;
    }
    /**
     * @ORM\ManyToOne(targetEntity="Passion")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $passion;
}

