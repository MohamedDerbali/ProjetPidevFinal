<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 13/02/2019
 * Time: 00:57
 */

namespace DonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class DonBesoinArgent
 * @ORM\Entity
 */
class DonBesoinArgent extends DonBesoin
{




    /**
     * @ORM\Column(type="float")
     */
    private $montantArgent;



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
    public function getMontantArgent()
    {
        return $this->montantArgent;
    }

    /**
     * @param mixed $montantArgent
     */
    public function setMontantArgent($montantArgent)
    {
        $this->montantArgent = $montantArgent;
    }




}