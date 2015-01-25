<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Thing
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Thing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startdate", type="date")
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="enddate", type="date")
     */
    private $enddate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="releasedate", type="datetime")
     */
    private $releasedate;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Thing
     */
    public function setName($name)
    {
      $this->name = $name;

      return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Thing
     */
    public function setDescription($description)
    {
      $this->description = $description;

      return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return Thing
     */
    public function setStartdate($startdate)
    {
      $this->startdate = $startdate;

      return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
      return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     * @return Thing
     */
    public function setEnddate($enddate)
    {
      $this->enddate = $enddate;

      return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime 
     */
    public function getEnddate()
    {
      return $this->enddate;
    }

    /**
     * Set releasedate
     *
     * @param \DateTime $releasedate
     * @return Thing
     */
    public function setReleasedate($releasedate)
    {
      $this->releasedate = $releasedate;

      return $this;
    }

    /**
     * Get releasedate
     *
     * @return \DateTime 
     */
    public function getReleasedate()
    {
      return $this->releasedate;
    }
  }
