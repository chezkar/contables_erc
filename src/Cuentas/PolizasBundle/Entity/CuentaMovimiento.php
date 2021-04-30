<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CuentaMovimiento
 *
 * @ORM\Table(name="cuenta_movimiento", uniqueConstraints={@ORM\UniqueConstraint(name="movimiento_docnum_UNIQUE", columns={"movimiento_docnum"})}, indexes={@ORM\Index(name="fk_Cuenta_Movimiento_Cuenta_Cobrar1_idx", columns={"Cuenta_Cobrar_idCuenta"})})
 * @ORM\Entity
 */
class CuentaMovimiento
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMovimiento", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmovimiento;

    /**
     * @var int
     *
     * @ORM\Column(name="movimiento_docnum", type="integer", nullable=false)
     */
    private $movimientoDocnum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="movimiento_fecha", type="date", nullable=false)
     */
    private $movimientoFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="movimiento_concepto", type="text", length=65535, nullable=false)
     */
    private $movimientoConcepto;

    /**
     * @var float
     *
     * @ORM\Column(name="movimiento_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $movimientoDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="movimiento_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $movimientoHaber = '0';

    /**
     * @var \Cuentas\PolizasBundle\Entity\CuentaCobrar
     *
     * @ORM\ManyToOne(targetEntity="Cuentas\PolizasBundle\Entity\CuentaCobrar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Cuenta_Cobrar_idCuenta", referencedColumnName="idCuenta")
     * })
     */
    private $cuentaCobrarIdcuenta;



    /**
     * Get idmovimiento.
     *
     * @return int
     */
    public function getIdmovimiento()
    {
        return $this->idmovimiento;
    }

    /**
     * Set movimientoDocnum.
     *
     * @param int $movimientoDocnum
     *
     * @return CuentaMovimiento
     */
    public function setMovimientoDocnum($movimientoDocnum)
    {
        $this->movimientoDocnum = $movimientoDocnum;

        return $this;
    }

    /**
     * Get movimientoDocnum.
     *
     * @return int
     */
    public function getMovimientoDocnum()
    {
        return $this->movimientoDocnum;
    }

    /**
     * Set movimientoFecha.
     *
     * @param \DateTime $movimientoFecha
     *
     * @return CuentaMovimiento
     */
    public function setMovimientoFecha($movimientoFecha)
    {
        $this->movimientoFecha = $movimientoFecha;

        return $this;
    }

    /**
     * Get movimientoFecha.
     *
     * @return \DateTime
     */
    public function getMovimientoFecha()
    {
        return $this->movimientoFecha;
    }

    /**
     * Set movimientoConcepto.
     *
     * @param string $movimientoConcepto
     *
     * @return CuentaMovimiento
     */
    public function setMovimientoConcepto($movimientoConcepto)
    {
        $this->movimientoConcepto = $movimientoConcepto;

        return $this;
    }

    /**
     * Get movimientoConcepto.
     *
     * @return string
     */
    public function getMovimientoConcepto()
    {
        return $this->movimientoConcepto;
    }

    /**
     * Set movimientoDebe.
     *
     * @param float $movimientoDebe
     *
     * @return CuentaMovimiento
     */
    public function setMovimientoDebe($movimientoDebe)
    {
        $this->movimientoDebe = $movimientoDebe;

        return $this;
    }

    /**
     * Get movimientoDebe.
     *
     * @return float
     */
    public function getMovimientoDebe()
    {
        return $this->movimientoDebe;
    }

    /**
     * Set movimientoHaber.
     *
     * @param float $movimientoHaber
     *
     * @return CuentaMovimiento
     */
    public function setMovimientoHaber($movimientoHaber)
    {
        $this->movimientoHaber = $movimientoHaber;

        return $this;
    }

    /**
     * Get movimientoHaber.
     *
     * @return float
     */
    public function getMovimientoHaber()
    {
        return $this->movimientoHaber;
    }

    /**
     * Set cuentaCobrarIdcuenta.
     *
     * @param \Cuentas\PolizasBundle\Entity\CuentaCobrar|null $cuentaCobrarIdcuenta
     *
     * @return CuentaMovimiento
     */
    public function setCuentaCobrarIdcuenta(\Cuentas\PolizasBundle\Entity\CuentaCobrar $cuentaCobrarIdcuenta = null)
    {
        $this->cuentaCobrarIdcuenta = $cuentaCobrarIdcuenta;

        return $this;
    }

    /**
     * Get cuentaCobrarIdcuenta.
     *
     * @return \Cuentas\PolizasBundle\Entity\CuentaCobrar|null
     */
    public function getCuentaCobrarIdcuenta()
    {
        return $this->cuentaCobrarIdcuenta;
    }
}
