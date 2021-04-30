<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashFlowAdjustments
 *
 * @ORM\Table(name="cash_flow_adjustments", indexes={@ORM\Index(name="cash_flow_adjustments_account_id_fk", columns={"account_id"}), @ORM\Index(name="cash_flow_adjustments_entry_type_idx", columns={"entry_type"}), @ORM\Index(name="cash_flow_adjustments_transaction_id_fk", columns={"transaction_id"})})
 * @ORM\Entity
 */
class CashFlowAdjustments
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
     * @var string
     *
     * @ORM\Column(name="entry_type", type="string", length=0, nullable=false)
     */
    private $entryType;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $amount;

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
     * @var \Transactions
     *
     * @ORM\ManyToOne(targetEntity="Transactions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transaction_id", referencedColumnName="id")
     * })
     */
    private $transaction;



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
     * Set entryType.
     *
     * @param string $entryType
     *
     * @return CashFlowAdjustments
     */
    public function setEntryType($entryType)
    {
        $this->entryType = $entryType;

        return $this;
    }

    /**
     * Get entryType.
     *
     * @return string
     */
    public function getEntryType()
    {
        return $this->entryType;
    }

    /**
     * Set amount.
     *
     * @param string $amount
     *
     * @return CashFlowAdjustments
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount.
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set account.
     *
     * @param \Cuentas\PolizasBundle\Entity\Accounts|null $account
     *
     * @return CashFlowAdjustments
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
     * Set transaction.
     *
     * @param \Cuentas\PolizasBundle\Entity\Transactions|null $transaction
     *
     * @return CashFlowAdjustments
     */
    public function setTransaction(\Cuentas\PolizasBundle\Entity\Transactions $transaction = null)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get transaction.
     *
     * @return \Cuentas\PolizasBundle\Entity\Transactions|null
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
