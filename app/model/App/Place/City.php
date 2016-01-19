<?php

namespace App\Model\Place;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="place_city")
 */
class City
{

    use \Kdyby\Doctrine\Entities\MagicAccessors;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(name="city", type="string")
     */
    protected $name;

    /**
     * @ORM\Column(name="web", type="string")
     */
    protected $website;

}