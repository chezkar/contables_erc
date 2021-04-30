<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activo
 *
 * @ORM\Table(name="activo")
 * @ORM\Entity
 */
class Activo
{
    /**
     * @var int
     *
     * @ORM\Column(name="idActivo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactivo;

    /**
     * @var array
     *
     * @ORM\Column(name="activo_tipo", type="array", length=0, nullable=false, options={"default"="{'ac': 'activo_corriente', 'anc': 'activo_no_corriente'}"})
     */
    private $activoTipo;

    /**
     * @var array
     *
     * @ORM\Column(name="activo_tipo_categoria", type="array", length=0, nullable=false, options={"default"="{'cb': 'caja_banco', 'ppe': 'propiedad_planta_equipo', 'da':  'depreciacion_acum'}"})
     */
    private $activoTipoCategoria;

    /**
     * @var array
     *
     * @ORM\Column(name="activo_tipo_subcategoria", type="array", length=0, nullable=false, options={"default"="{'cg':'caja_general','bnc': 'banco_qtz', 'inm': 'inmueble', 'vhc': 'vehiculo', 'dav': 'deprecion_acum_vehiculo', 'dame': 'deprecion_acum_mob_eqp'}"})
     */
    private $activoTipoSubcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="activo_nombre", type="string", length=255, nullable=false)
     */
    private $activoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="activo_caracteristica", type="text", length=65535, nullable=false)
     */
    private $activoCaracteristica;

    /**
     * @var float
     *
     * @ORM\Column(name="activo_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $activoValor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inserted_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $insertedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Cuentas\PolizasBundle\Entity\Cliente", mappedBy="activoIdactivo")
     */
    private $clienteIdcliente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->clienteIdcliente = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idactivo.
     *
     * @return int
     */
    public function getIdactivo()
    {
        return $this->idactivo;
    }

    /**
     * Set activoTipo.
     *
     * @param array $activoTipo
     *
     * @return Activo
     */
    public function setActivoTipo($activoTipo)
    {
        $this->activoTipo = $activoTipo;

        return $this;
    }

    /**
     * Get activoTipo.
     *
     * @return array
     */
    public function getActivoTipo()
    {
        return $this->activoTipo;
    }

    /**
     * Set activoTipoCategoria.
     *
     * @param array $activoTipoCategoria
     *
     * @return Activo
     */
    public function setActivoTipoCategoria($activoTipoCategoria)
    {
        $this->activoTipoCategoria = $activoTipoCategoria;

        return $this;
    }

    /**
     * Get activoTipoCategoria.
     *
     * @return array
     */
    public function getActivoTipoCategoria()
    {
        return $this->activoTipoCategoria;
    }

    /**
     * Set activoTipoSubcategoria.
     *
     * @param array $activoTipoSubcategoria
     *
     * @return Activo
     */
    public function setActivoTipoSubcategoria($activoTipoSubcategoria)
    {
        $this->activoTipoSubcategoria = $activoTipoSubcategoria;

        return $this;
    }

    /**
     * Get activoTipoSubcategoria.
     *
     * @return array
     */
    public function getActivoTipoSubcategoria()
    {
        return $this->activoTipoSubcategoria;
    }

    /**
     * Set activoNombre.
     *
     * @param string $activoNombre
     *
     * @return Activo
     */
    public function setActivoNombre($activoNombre)
    {
        $this->activoNombre = $activoNombre;

        return $this;
    }

    /**
     * Get activoNombre.
     *
     * @return string
     */
    public function getActivoNombre()
    {
        return $this->activoNombre;
    }

    /**
     * Set activoCaracteristica.
     *
     * @param string $activoCaracteristica
     *
     * @return Activo
     */
    public function setActivoCaracteristica($activoCaracteristica)
    {
        $this->activoCaracteristica = $activoCaracteristica;

        return $this;
    }

    /**
     * Get activoCaracteristica.
     *
     * @return string
     */
    public function getActivoCaracteristica()
    {
        return $this->activoCaracteristica;
    }

    /**
     * Set activoValor.
     *
     * @param float $activoValor
     *
     * @return Activo
     */
    public function setActivoValor($activoValor)
    {
        $this->activoValor = $activoValor;

        return $this;
    }

    /**
     * Get activoValor.
     *
     * @return float
     */
    public function getActivoValor()
    {
        return $this->activoValor;
    }

    /**
     * Set insertedAt.
     *
     * @param \DateTime $insertedAt
     *
     * @return Activo
     */
    public function setInsertedAt($insertedAt)
    {
        $this->insertedAt = $insertedAt;

        return $this;
    }

    /**
     * Get insertedAt.
     *
     * @return \DateTime
     */
    public function getInsertedAt()
    {
        return $this->insertedAt;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return Activo
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Add clienteIdcliente.
     *
     * @param \Cuentas\PolizasBundle\Entity\Cliente $clienteIdcliente
     *
     * @return Activo
     */
    public function addClienteIdcliente(\Cuentas\PolizasBundle\Entity\Cliente $clienteIdcliente)
    {
        $this->clienteIdcliente[] = $clienteIdcliente;

        return $this;
    }

    /**
     * Remove clienteIdcliente.
     *
     * @param \Cuentas\PolizasBundle\Entity\Cliente $clienteIdcliente
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeClienteIdcliente(\Cuentas\PolizasBundle\Entity\Cliente $clienteIdcliente)
    {
        return $this->clienteIdcliente->removeElement($clienteIdcliente);
    }

    /**
     * Get clienteIdcliente.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClienteIdcliente()
    {
        return $this->clienteIdcliente;
    }
}
