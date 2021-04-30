<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CuentaCobrar
 *
 * @ORM\Table(name="cuenta_cobrar", indexes={@ORM\Index(name="fk_Cuenta_Cliente1_idx", columns={"Cliente_idCliente"}), @ORM\Index(name="fk_Cuenta_Cobrar_Activo1_idx", columns={"Activo_idActivo"})})
 * @ORM\Entity
 */
class CuentaCobrar
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCuenta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcuenta;

    /**
     * @var \Cuentas\PolizasBundle\Entity\Cliente
     *
     * @ORM\ManyToOne(targetEntity="Cuentas\PolizasBundle\Entity\Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Cliente_idCliente", referencedColumnName="idCliente")
     * })
     */
    private $clienteIdcliente;

    /**
     * @var \Cuentas\PolizasBundle\Entity\Activo
     *
     * @ORM\ManyToOne(targetEntity="Cuentas\PolizasBundle\Entity\Activo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Activo_idActivo", referencedColumnName="idActivo")
     * })
     */
    private $activoIdactivo;



    /**
     * Get idcuenta.
     *
     * @return int
     */
    public function getIdcuenta()
    {
        return $this->idcuenta;
    }

    /**
     * Set clienteIdcliente.
     *
     * @param \Cuentas\PolizasBundle\Entity\Cliente|null $clienteIdcliente
     *
     * @return CuentaCobrar
     */
    public function setClienteIdcliente(\Cuentas\PolizasBundle\Entity\Cliente $clienteIdcliente = null)
    {
        $this->clienteIdcliente = $clienteIdcliente;

        return $this;
    }

    /**
     * Get clienteIdcliente.
     *
     * @return \Cuentas\PolizasBundle\Entity\Cliente|null
     */
    public function getClienteIdcliente()
    {
        return $this->clienteIdcliente;
    }

    /**
     * Set activoIdactivo.
     *
     * @param \Cuentas\PolizasBundle\Entity\Activo|null $activoIdactivo
     *
     * @return CuentaCobrar
     */
    public function setActivoIdactivo(\Cuentas\PolizasBundle\Entity\Activo $activoIdactivo = null)
    {
        $this->activoIdactivo = $activoIdactivo;

        return $this;
    }

    /**
     * Get activoIdactivo.
     *
     * @return \Cuentas\PolizasBundle\Entity\Activo|null
     */
    public function getActivoIdactivo()
    {
        return $this->activoIdactivo;
    }
}
