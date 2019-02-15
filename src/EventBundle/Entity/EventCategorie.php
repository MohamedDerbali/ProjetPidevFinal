<?php
/**
 * Created by PhpStorm.
 * User: Baklouti
 * Date: 12/02/2019
 * Time: 21:38
 */

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Class EventCategorie
 * @ORM\Entity
 */
class EventCategorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idEventCategorie;

    /**
     * @ORM\Column(type="string",length=20)
     */
    private $nomEventCategorie;

    /**
     * @return mixed
     */
    public function getIdEventCategorie()
    {
        return $this->idEventCategorie;
    }

    /**
     * @param mixed $idEventCategorie
     */
    public function setIdEventCategorie($idEventCategorie)
    {
        $this->idEventCategorie = $idEventCategorie;
    }

    /**
     * @return mixed
     */
    public function getNomEventCategorie()
    {
        return $this->nomEventCategorie;
    }

    /**
     * @param mixed $nomEventCategorie
     */
    public function setNomEventCategorie($nomEventCategorie)
    {
        $this->nomEventCategorie = $nomEventCategorie;
    }




}