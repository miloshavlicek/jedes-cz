<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="event")
 */
class Event {

    use \Kdyby\Doctrine\Entities\MagicAccessors;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $intro;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $visible;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $sponsored;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $start;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $end;

    /**
     * @ORM\Column(type="text")
     */
    protected $fb;

    /**
     * @ORM\Column(type="text")
     */
    protected $tags;

    /**
     * @ORM\ManyToOne(targetEntity="\App\Model\Place\City")
     * @ORM\JoinColumn(name="place", referencedColumnName="id")
     */
    protected $placeCity;

    /**
     * @ORM\Column(type="text")
     */
    protected $placeName;

}
