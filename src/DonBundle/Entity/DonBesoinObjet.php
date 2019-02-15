<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 13/02/2019
 * Time: 01:07
 */

namespace DonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class DonBesoinArgent
 * @ORM\Entity
 */
class DonBesoinObjet extends DonBesoin
{

    /**
     * @ORM\Column(type="string",length=50)
     */
    private $typeObjet;


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
    public function getTypeObjet()
    {
        return $this->typeObjet;
    }

    /**
     * @param mixed $typeObjet
     */
    public function setTypeObjet($typeObjet)
    {
        $this->typeObjet = $typeObjet;
    }


}