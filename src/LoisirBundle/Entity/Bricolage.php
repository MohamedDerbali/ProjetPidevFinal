<?php

namespace LoisirBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bricolage
 *
 * @ORM\Table(name="bricolage")
 * @ORM\Entity(repositoryClass="LoisirBundle\Repository\BricolageRepository")
 */
class Bricolage
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
     * @ORM\Column(name="url_bri", type="string", length=255)
     */
    private $urlBri;

    /**
     * @var string
     *
     * @ORM\Column(name="tire_bri", type="string", length=255)
     */
    private $tireBri;

    /**
     * @var string
     *
     * @ORM\Column(name="description_bri", type="string", length=255)
     */
    private $descriptionBri;


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
     * Set urlBri
     *
     * @param string $urlBri
     *
     * @return Bricolage
     */
    public function setUrlBri($urlBri)
    {
        $this->urlBri = $urlBri;

        return $this;
    }

    /**
     * Get urlBri
     *
     * @return string
     */
    public function getUrlBri()
    {
        return $this->urlBri;
    }

    /**
     * Set tireBri
     *
     * @param string $tireBri
     *
     * @return Bricolage
     */
    public function setTireBri($tireBri)
    {
        $this->tireBri = $tireBri;

        return $this;
    }

    /**
     * Get tireBri
     *
     * @return string
     */
    public function getTireBri()
    {
        return $this->tireBri;
    }

    /**
     * Set descriptionBri
     *
     * @param string $descriptionBri
     *
     * @return Bricolage
     */
    public function setDescriptionBri($descriptionBri)
    {
        $this->descriptionBri = $descriptionBri;

        return $this;
    }

    /**
     * Get descriptionBri
     *
     * @return string
     */
    public function getDescriptionBri()
    {
        return $this->descriptionBri;
    }
    /**
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $client_bri;
}

