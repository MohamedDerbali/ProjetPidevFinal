<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 13/02/2019
 * Time: 01:11
 */

namespace DonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class DonPotCompagne
 * @ORM\Entity
 */
class DonPotCompagne
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idPotCompagne;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFinPot;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ddescriptionPot;

    /**
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $User;

    /**
     * @return mixed
     */
    public function getIdDonPotCompagne()
    {
        return $this->idDonPotCompagne;
    }

    /**
     * @param mixed $idDonPotCompagne
     */
    public function setIdDonPotCompagne($idDonPotCompagne)
    {
        $this->idDonPotCompagne = $idDonPotCompagne;
    }

    /**
     * @return mixed
     */
    public function getDateFinPot()
    {
        return $this->dateFinPot;
    }

    /**
     * @param mixed $dateFinPot
     */
    public function setDateFinPot($dateFinPot)
    {
        $this->dateFinPot = $dateFinPot;
    }

    /**
     * @return mixed
     */
    public function getDdescriptionPot()
    {
        return $this->ddescriptionPot;
    }

    /**
     * @param mixed $ddescriptionPot
     */
    public function setDdescriptionPot($ddescriptionPot)
    {
        $this->ddescriptionPot = $ddescriptionPot;
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