<?php

namespace JustShare\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Activity
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Activity
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
     * @var integer
     *
     * @ORM\Column(name="creator", type="integer")
	 * @ORM\OneToOne(targetEntity="JustShareCoreBundle\Entity\Article", mappedBy="id")
     */
    private $creator;

    /**
     * @var string
     *
     * @ORM\Column(name="association", type="string", length=255)
     */
    private $association;

    /**
     * @var boolean
     *
     * @ORM\Column(name="creatorParticipating", type="boolean")
     */
    private $creatorParticipating;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="text")
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="minimumPrice", type="integer")
     * @Assert\Range(min=1, minMessage="Le prix minimum ne doit pas être en dessous d'1€")
	 */
    private $minimumPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="maximumPrice", type="integer")
     */
    private $maximumPrice;


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
     * Set creator
     *
     * @param integer $creator
     * @return Activity
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return integer 
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set association
     *
     * @param string $association
     * @return Activity
     */
    public function setAssociation($association)
    {
        $this->association = $association;

        return $this;
    }

    /**
     * Get association
     *
     * @return string 
     */
    public function getAssociation()
    {
        return $this->association;
    }

    /**
     * Set creatorParticipating
     *
     * @param boolean $creatorParticipating
     * @return Activity
     */
    public function setCreatorParticipating($creatorParticipating)
    {
        $this->creatorParticipating = $creatorParticipating;

        return $this;
    }

    /**
     * Get creatorParticipating
     *
     * @return boolean 
     */
    public function getCreatorParticipating()
    {
        return $this->creatorParticipating;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Activity
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
     * @return Activity
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
     * Set place
     *
     * @param string $place
     * @return Activity
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Activity
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Activity
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set minimumPrice
     *
     * @param integer $minimumPrice
     * @return Activity
     */
    public function setMinimumPrice($minimumPrice)
    {
        $this->minimumPrice = $minimumPrice;

        return $this;
    }

    /**
     * Get minimumPrice
     *
     * @return integer 
     */
    public function getMinimumPrice()
    {
        return $this->minimumPrice;
    }

    /**
     * Set maximumPrice
     *
     * @param integer $maximumPrice
     * @return Activity
     */
    public function setMaximumPrice($maximumPrice)
    {
        $this->maximumPrice = $maximumPrice;

        return $this;
    }

    /**
     * Get maximumPrice
     *
     * @return integer 
     */
    public function getMaximumPrice()
    {
        return $this->maximumPrice;
    }
}
