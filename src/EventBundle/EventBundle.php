<?php

namespace EventBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EventBundle extends Bundle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @ORM\Column(type="string",length=50)
     */
    private $titre;
}
