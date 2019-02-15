<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 13/02/2019
 * Time: 00:40
 */

namespace DonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class DonBesoin
 * @ORM\Entity
 */
class DonBesoin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idDonBesoin;


    /**
     * @ORM\Column(type="integer")
     */
    private $idMaisonRetraite;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disponibilite;

    /**
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $User;

    /**
     * @return mixed
     */
    public function getIdDonBesoin()
    {
        return $this->idDonBesoin;
    }

    /**
     * @param mixed $idDonBesoin
     */
    public function setIdDonBesoin($idDonBesoin)
    {
        $this->idDonBesoin = $idDonBesoin;
    }

    /**
     * @return mixed
     */
    public function getIdMaisonRetraite()
    {
        return $this->idMaisonRetraite;
    }

    /**
     * @param mixed $idMaisonRetraite
     */
    public function setIdMaisonRetraite($idMaisonRetraite)
    {
        $this->idMaisonRetraite = $idMaisonRetraite;
    }

    /**
     * @return mixed
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * @param mixed $disponibilite
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;
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