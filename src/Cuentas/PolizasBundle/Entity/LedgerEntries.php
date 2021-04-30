<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LedgerEntries
 *
 * @ORM\Table(name="ledger_entries", indexes={@ORM\Index(name="ledger_entries_account_id_fk", columns={"account_id"}), @ORM\Index(name="ledger_entries_entry_type_idx", columns={"entry_type"}), @ORM\Index(name="ledger_entries_transaction_id_fk", columns={"transaction_id"})})
 * @ORM\Entity
 */
class LedgerEntries
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
     * @var int|null
     *
     * @ORM\Column(name="person_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $personId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost_centre_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $costCentreId;

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
     * @return LedgerEntries
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
     * @return LedgerEntries
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
     * Set personId.
     *
     * @param int|null $personId
     *
     * @return LedgerEntries
     */
    public function setPersonId($personId = null)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId.
     *
     * @return int|null
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Set costCentreId.
     *
     * @param int|null $costCentreId
     *
     * @return LedgerEntries
     */
    public function setCostCentreId($costCentreId = null)
    {
        $this->costCentreId = $costCentreId;

        return $this;
    }

    /**
     * Get costCentreId.
     *
     * @return int|null
     */
    public function getCostCentreId()
    {
        return $this->costCentreId;
    }

    /**
     * Set account.
     *
     * @param \Cuentas\PolizasBundle\Entity\Accounts|null $account
     *
     * @return LedgerEntries
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
     * @return LedgerEntries
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
