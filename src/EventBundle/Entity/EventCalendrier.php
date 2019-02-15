<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 13/02/2019
 * Time: 00:29
 */

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Class EventCalendrier
 * @ORM\Entity
 */
class EventCalendrier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idEventCalendrier;

    /**
     * @ORM\Column(type="string",length=50)
     */
    private $nomEventCalendrier;


    /**
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $User;

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
    public function getIdEventCalendrier()
    {
        return $this->idEventCalendrier;
    }

    /**
     * @param mixed $idEventCalendrier
     */
    public function setIdEventCalendrier($idEventCalendrier)
    {
        $this->idEventCalendrier = $idEventCalendrier;
    }

    /**
     * @return mixed
     */
    public function getNomEventCalendrier()
    {
        return $this->nomEventCalendrier;
    }

    /**
     * @param mixed $nomEventCalendrier
     */
    public function setNomEventCalendrier($nomEventCalendrier)
    {
        $this->nomEventCalendrier = $nomEventCalendrier;
    }



}