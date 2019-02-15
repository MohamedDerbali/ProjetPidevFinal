<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 12/02/2019
 * Time: 23:46
 */

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class EventInvitation
 * @ORM\Entity
 */
class EventInvitation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idEventInvitation;



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
     * @ORM\Column(type="integer")
     */
    private $idUserInvite;


    /**
     * @ORM\Column(type="date")
     */
    private $dateEventInvitation;



    /**
     * @ORM\Column(type="boolean")
     */
    private $confirmationEventInvitation;




    /**
     * @return mixed
     */
    public function getIdEventInvitation()
    {
        return $this->idEventInvitation;
    }

    /**
     * @param mixed $idEventInvitation
     */
    public function setIdEventInvitation($idEventInvitation)
    {
        $this->idEventInvitation = $idEventInvitation;
    }

    /**
     * @return mixed
     */
    public function getConfirmationEventInvitation()
    {
        return $this->confirmationEventInvitation;
    }

    /**
     * @param mixed $confirmationEventInvitation
     */
    public function setConfirmationEventInvitation($confirmationEventInvitation)
    {
        $this->confirmationEventInvitation = $confirmationEventInvitation;
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
    public function getIdUserInvite()
    {
        return $this->idUserInvite;
    }

    /**
     * @param mixed $idUserInvite
     */
    public function setIdUserInvite($idUserInvite)
    {
        $this->idUserInvite = $idUserInvite;
    }

    /**
     * @return mixed
     */
    public function getDateEventInvitation()
    {
        return $this->dateEventInvitation;
    }

    /**
     * @param mixed $dateEventInvitation
     */
    public function setDateEventInvitation($dateEventInvitation)
    {
        $this->dateEventInvitation = $dateEventInvitation;
    }






}