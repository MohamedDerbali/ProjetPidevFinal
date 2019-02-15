<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 12/02/2019
 * Time: 22:50
 */

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class EventPublication
 * @ORM\Entity
 */
class EventPublication
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idEventPublication;



    /**
     * @ORM\Column(type="string",length=255)
     */
    private $textEventPublication;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEventPublication;

    /**
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumn(referencedColumnName="idEvent")
     */
    private $Evenement;


    /**
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $User;

    /**
     * @return mixed
     */
    public function getIdEventPublication()
    {
        return $this->idEventPublication;
    }

    /**
     * @param mixed $idEventPublication
     */
    public function setIdEventPublication($idEventPublication)
    {
        $this->idEventPublication = $idEventPublication;
    }

    /**
     * @return mixed
     */
    public function getTextEventPublication()
    {
        return $this->textEventPublication;
    }

    /**
     * @param mixed $textEventPublication
     */
    public function setTextEventPublication($textEventPublication)
    {
        $this->textEventPublication = $textEventPublication;
    }

    /**
     * @return mixed
     */
    public function getEvenement()
    {
        return $this->Evenement;
    }

    /**
     * @param mixed $Evenement
     */
    public function setEvenement($Evenement)
    {
        $this->Evenement = $Evenement;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param mixed $User
     */
    public function setUser($User)
    {
        $this->User = $User;
    }

    /**
     * @return mixed
     */
    public function getDateEventPublication()
    {
        return $this->dateEventPublication;
    }

    /**
     * @param mixed $dateEventPublication
     */
    public function setDateEventPublication($dateEventPublication)
    {
        $this->dateEventPublication = $dateEventPublication;
    }




}