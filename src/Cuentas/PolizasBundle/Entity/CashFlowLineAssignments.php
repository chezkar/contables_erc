<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashFlowLineAssignments
 *
 * @ORM\Table(name="cash_flow_line_assignments", indexes={@ORM\Index(name="cash_flow_line_assignments_account_id_fk", columns={"account_id"}), @ORM\Index(name="cash_flow_line_assignments_cash_flow_line_id_fk", columns={"cash_flow_line_id"})})
 * @ORM\Entity
 */
class CashFlowLineAssignments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Accounts
     *
     * @ORM\ManyToOne(targetEntity="Accounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     * })
     */
    private $account;

    /**
     * @var \CashFlowLines
     *
     * @ORM\ManyToOne(targetEntity="CashFlowLines")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cash_flow_line_id", referencedColumnName="id")
     * })
     */
    private $cashFlowLine;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set account.
     *
     * @param \Cuentas\PolizasBundle\Entity\Accounts|null $account
     *
     * @return CashFlowLineAssignments
     */
    public function setAccount(\Cuentas\PolizasBundle\Entity\Accounts $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account.
     *
     * @return \Cuentas\PolizasBundle\Entity\Accounts|null
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set cashFlowLine.
     *
     * @param \Cuentas\PolizasBundle\Entity\CashFlowLines|null $cashFlowLine
     *
     * @return CashFlowLineAssignments
     */
    public function setCashFlowLine(\Cuentas\PolizasBundle\Entity\CashFlowLines $cashFlowLine = null)
    {
        $this->cashFlowLine = $cashFlowLine;

        return $this;
    }

    /**
     * Get cashFlowLine.
     *
     * @return \Cuentas\PolizasBundle\Entity\CashFlowLines|null
     */
    public function getCashFlowLine()
    {
        return $this->cashFlowLine;
    }
}
