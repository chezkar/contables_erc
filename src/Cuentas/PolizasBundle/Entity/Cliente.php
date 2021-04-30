<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente", uniqueConstraints={@ORM\UniqueConstraint(name="cliente_nit_UNIQUE", columns={"cliente_nit"})})
 * @ORM\Entity
 */
class Cliente
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCliente", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente_nit", type="string", length=12, nullable=false)
     */
    private $clienteNit;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente_nombre", type="string", length=45, nullable=false)
     */
    private $clienteNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente_apellido", type="string", length=45, nullable=false)
     */
    private $clienteApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente_nombre_comercial", type="string", length=100, nullable=false)
     */
    private $clienteNombreComercial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cliente_direccion_particular", type="text", length=65535, nullable=true)
     */
    private $clienteDireccionParticular;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente_telefono_particular", type="string", length=12, nullable=false)
     */
    private $clienteTelefonoParticular;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente_direccion_comercial", type="text", length=65535, nullable=false)
     */
    private $clienteDireccionComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente_telefono_comercial", type="string", length=12, nullable=false)
     */
    private $clienteTelefonoComercial;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Cuentas\PolizasBundle\Entity\Activo", inversedBy="clienteIdcliente")
     * @ORM\JoinTable(name="cliente_has_activo",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Cliente_idCliente", referencedColumnName="idCliente")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Activo_idActivo", referencedColumnName="idActivo")
     *   }
     * )
     */
    private $activoIdactivo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activoIdactivo = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idcliente.
     *
     * @return int
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set clienteNit.
     *
     * @param string $clienteNit
     *
     * @return Cliente
     */
    public function setClienteNit($clienteNit)
    {
        $this->clienteNit = $clienteNit;

        return $this;
    }

    /**
     * Get clienteNit.
     *
     * @return string
     */
    public function getClienteNit()
    {
        return $this->clienteNit;
    }

    /**
     * Set clienteNombre.
     *
     * @param string $clienteNombre
     *
     * @return Cliente
     */
    public function setClienteNombre($clienteNombre)
    {
        $this->clienteNombre = $clienteNombre;

        return $this;
    }

    /**
     * Get clienteNombre.
     *
     * @return string
     */
    public function getClienteNombre()
    {
        return $this->clienteNombre;
    }

    /**
     * Set clienteApellido.
     *
     * @param string $clienteApellido
     *
     * @return Cliente
     */
    public function setClienteApellido($clienteApellido)
    {
        $this->clienteApellido = $clienteApellido;

        return $this;
    }

    /**
     * Get clienteApellido.
     *
     * @return string
     */
    public function getClienteApellido()
    {
        return $this->clienteApellido;
    }

    /**
     * Set clienteNombreComercial.
     *
     * @param string $clienteNombreComercial
     *
     * @return Cliente
     */
    public function setClienteNombreComercial($clienteNombreComercial)
    {
        $this->clienteNombreComercial = $clienteNombreComercial;

        return $this;
    }

    /**
     * Get clienteNombreComercial.
     *
     * @return string
     */
    public function getClienteNombreComercial()
    {
        return $this->clienteNombreComercial;
    }

    /**
     * Set clienteDireccionParticular.
     *
     * @param string|null $clienteDireccionParticular
     *
     * @return Cliente
     */
    public function setClienteDireccionParticular($clienteDireccionParticular = null)
    {
        $this->clienteDireccionParticular = $clienteDireccionParticular;

        return $this;
    }

    /**
     * Get clienteDireccionParticular.
     *
     * @return string|null
     */
    public function getClienteDireccionParticular()
    {
        return $this->clienteDireccionParticular;
    }

    /**
     * Set clienteTelefonoParticular.
     *
     * @param string $clienteTelefonoParticular
     *
     * @return Cliente
     */
    public function setClienteTelefonoParticular($clienteTelefonoParticular)
    {
        $this->clienteTelefonoParticular = $clienteTelefonoParticular;

        return $this;
    }

    /**
     * Get clienteTelefonoParticular.
     *
     * @return string
     */
    public function getClienteTelefonoParticular()
    {
        return $this->clienteTelefonoParticular;
    }

    /**
     * Set clienteDireccionComercial.
     *
     * @param string $clienteDireccionComercial
     *
     * @return Cliente
     */
    public function setClienteDireccionComercial($clienteDireccionComercial)
    {
        $this->clienteDireccionComercial = $clienteDireccionComercial;

        return $this;
    }

    /**
     * Get clienteDireccionComercial.
     *
     * @return string
     */
    public function getClienteDireccionComercial()
    {
        return $this->clienteDireccionComercial;
    }

    /**
     * Set clienteTelefonoComercial.
     *
     * @param string $clienteTelefonoComercial
     *
     * @return Cliente
     */
    public function setClienteTelefonoComercial($clienteTelefonoComercial)
    {
        $this->clienteTelefonoComercial = $clienteTelefonoComercial;

        return $this;
    }

    /**
     * Get clienteTelefonoComercial.
     *
     * @return string
     */
    public function getClienteTelefonoComercial()
    {
        return $this->clienteTelefonoComercial;
    }

    /**
     * Add activoIdactivo.
     *
     * @param \Cuentas\PolizasBundle\Entity\Activo $activoIdactivo
     *
     * @return Cliente
     */
    public function addActivoIdactivo(\Cuentas\PolizasBundle\Entity\Activo $activoIdactivo)
    {
        $this->activoIdactivo[] = $activoIdactivo;

        return $this;
    }

    /**
     * Remove activoIdactivo.
     *
     * @param \Cuentas\PolizasBundle\Entity\Activo $activoIdactivo
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeActivoIdactivo(\Cuentas\PolizasBundle\Entity\Activo $activoIdactivo)
    {
        return $this->activoIdactivo->removeElement($activoIdactivo);
    }

    /**
     * Get activoIdactivo.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivoIdactivo()
    {
        return $this->activoIdactivo;
    }
}
