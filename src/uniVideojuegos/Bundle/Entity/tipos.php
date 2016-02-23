<?php

namespace uniVideojuegos\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * tipos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class tipos
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
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;


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
     * Set nombre
     *
     * @param string $nombre
     * @return tipos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
     /**
* @ORM\OneToMany(targetEntity="juegos", mappedBy="juetip")
*/
    protected $tipjues;
    
    public function __construct() {
$this->tipjues = new ArrayCollection();}

public function __toString() {
     return $this->nombre;}
    

    /**
     * Add tipjues
     *
     * @param \uniVideojuegos\Bundle\Entity\juegos $tipjues
     * @return tipos
     */
    public function addTipjue(\uniVideojuegos\Bundle\Entity\juegos $tipjues)
    {
        $this->tipjues[] = $tipjues;

        return $this;
    }

    /**
     * Remove tipjues
     *
     * @param \uniVideojuegos\Bundle\Entity\juegos $tipjues
     */
    public function removeTipjue(\uniVideojuegos\Bundle\Entity\juegos $tipjues)
    {
        $this->tipjues->removeElement($tipjues);
    }

    /**
     * Get tipjues
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTipjues()
    {
        return $this->tipjues;
    }
}
