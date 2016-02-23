<?php

namespace uniVideojuegos\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * plataforma
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class plataforma
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;


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
     * @return plataforma
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return plataforma
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
* @ORM\ManyToMany(targetEntity="juegos", mappedBy="jueplat")
*/

private $platjue;

public function __construct() {
$this->platjue = new ArrayCollection();
}
public function __toString() {
     return $this->nombre;}

    /**
     * Add platjue
     *
     * @param \uniVideojuegos\Bundle\Entity\juegos $platjue
     * @return plataforma
     */
    public function addPlatjue(\uniVideojuegos\Bundle\Entity\juegos $platjue)
    {
        $this->platjue[] = $platjue;

        return $this;
    }

    /**
     * Remove platjue
     *
     * @param \uniVideojuegos\Bundle\Entity\juegos $platjue
     */
    public function removePlatjue(\uniVideojuegos\Bundle\Entity\juegos $platjue)
    {
        $this->platjue->removeElement($platjue);
    }

    /**
     * Get platjue
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlatjue()
    {
        return $this->platjue;
    }
}
