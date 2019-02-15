<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 13/02/2019
 * Time: 00:33
 */

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Class EventCalendrier
 * @ORM\Entity
 */
class EventUserCalendrier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idEventUserCalendrier;


    /**
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumn(referencedColumnName="idEvent")
     */
    private $Evenement;

    /**
     * @return mixed
     */
    public function getIdEventUserCalendrier()
    {
        return $this->idEventUserCalendrier;
    }

    /**
     * @param mixed $idEventUserCalendrier
     */
    public function setIdEventUserCalendrier($idEventUserCalendrier)
    {
        $this->idEventUserCalendrier = $idEventUserCalendrier;
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




}