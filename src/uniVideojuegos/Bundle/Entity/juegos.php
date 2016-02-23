<?php

namespace uniVideojuegos\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * juegos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class juegos
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
     * @var string
     *
     * @ORM\Column(name="puntuacion", type="string", length=10)
     */
    private $puntuacion;


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
     * @return juegos
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
     * @return juegos
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
     * Set puntuacion
     *
     * @param string $puntuacion
     * @return juegos
     */
    public function setPuntuacion($puntuacion)
    {
        $this->puntuacion = $puntuacion;

        return $this;
    }

    /**
     * Get puntuacion
     *
     * @return string 
     */
    public function getPuntuacion()
    {
        return $this->puntuacion;
    }
      /**
* @ORM\ManyToOne(targetEntity="tipos", inversedBy="tipjues")
*/
protected $juetip;
    
public function __toString() {
     return $this->nombre;}

    /**
     * Set juetip
     *
     * @param \uniVideojuegos\Bundle\Entity\tipos $juetip
     * @return juegos
     */
    public function setJuetip(\uniVideojuegos\Bundle\Entity\tipos $juetip = null)
    {
        $this->juetip = $juetip;

        return $this;
    }

    /**
     * Get juetip
     *
     * @return \uniVideojuegos\Bundle\Entity\tipos 
     */
    public function getJuetip()
    {
        return $this->juetip;
    }
    /**
* @ORM\ManyToMany(targetEntity="plataforma", inversedBy="platjue")
*/

private $jueplat;

public function __construct() {
$this->jueplat = new ArrayCollection();
}

    /**
     * Add jueplat
     *
     * @param \uniVideojuegos\Bundle\Entity\plataforma $jueplat
     * @return juegos
     */
    public function addJueplat(\uniVideojuegos\Bundle\Entity\plataforma $jueplat)
    {
        $this->jueplat[] = $jueplat;

        return $this;
    }

    /**
     * Remove jueplat
     *
     * @param \uniVideojuegos\Bundle\Entity\plataforma $jueplat
     */
    public function removeJueplat(\uniVideojuegos\Bundle\Entity\plataforma $jueplat)
    {
        $this->jueplat->removeElement($jueplat);
    }

    /**
     * Get jueplat
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJueplat()
    {
        return $this->jueplat;
    }
}
