<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 12/02/2019
 * Time: 22:43
 */

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class EventReclamation
 * @ORM\Entity
 */
class EventReclamation
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idEventReclamation;



    /**
     * @ORM\Column(type="string",length=255)
     */
    private $textEventReclamation;


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
    public function getIdEventReclamation()
    {
        return $this->idEventReclamation;
    }

    /**
     * @param mixed $idEventReclamation
     */
    public function setIdEventReclamation($idEventReclamation)
    {
        $this->idEventReclamation = $idEventReclamation;
    }

    /**
     * @return mixed
     */
    public function getTextEventReclamation()
    {
        return $this->textEventReclamation;
    }

    /**
     * @param mixed $textEventReclamation
     */
    public function setTextEventReclamation($textEventReclamation)
    {
        $this->textEventReclamation = $textEventReclamation;
    }

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->Event;
    }

    /**
     * @param mixed $Event
     */
    public function setEvent($Event)
    {
        $this->Event = $Event;
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




}