<?php

namespace JustShare\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Associations
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Associations
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="zefkj", type="datetime")
     */
    private $zefkj;

	/**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer")
     */
	private $numero;
	

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
     * @return Associations
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
     * Set zefkj
     *
     * @param \DateTime $zefkj
     * @return Associations
     */
    public function setZefkj($zefkj)
    {
        $this->zefkj = $zefkj;

        return $this;
    }

    /**
     * Get zefkj
     *
     * @return \DateTime 
     */
    public function getZefkj()
    {
        return $this->zefkj;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Associations
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }
}
