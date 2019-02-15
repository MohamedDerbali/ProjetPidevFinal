<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 12/02/2019
 * Time: 23:04
 */

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class EventCommentaire
 * @ORM\Entity
 */
class EventCommentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idEventCommentaire;



    /**
     * @ORM\Column(type="string",length=255)
     */
    private $textEventCommentaire;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEventCommentaire;


    /**
     * @ORM\ManyToOne(targetEntity="EventPublication")
     * @ORM\JoinColumn(referencedColumnName="idEventPublication")
     */
    private $EventPublication;


    /**
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $User;

    /**
     * @return mixed
     */
    public function getIdEventCommentaire()
    {
        return $this->idEventCommentaire;
    }

    /**
     * @param mixed $idEventCommentaire
     */
    public function setIdEventCommentaire($idEventCommentaire)
    {
        $this->idEventCommentaire = $idEventCommentaire;
    }

    /**
     * @return mixed
     */
    public function getTextEventCommentaire()
    {
        return $this->textEventCommentaire;
    }

    /**
     * @param mixed $textEventCommentaire
     */
    public function setTextEventCommentaire($textEventCommentaire)
    {
        $this->textEventCommentaire = $textEventCommentaire;
    }

    /**
     * @return mixed
     */
    public function getDateEventCommentaire()
    {
        return $this->dateEventCommentaire;
    }

    /**
     * @param mixed $dateEventCommentaire
     */
    public function setDateEventCommentaire($dateEventCommentaire)
    {
        $this->dateEventCommentaire = $dateEventCommentaire;
    }

    /**
     * @return mixed
     */
    public function getEventPublication()
    {
        return $this->EventPublication;
    }

    /**
     * @param mixed $EventPublication
     */
    public function setEventPublication($EventPublication)
    {
        $this->EventPublication = $EventPublication;
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