<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accounts
 *
 * @ORM\Table(name="accounts", indexes={@ORM\Index(name="accounts_balance_and_income_line_id_fk", columns={"balance_and_income_line_id"}), @ORM\Index(name="accounts_equity_column_id_fk", columns={"equity_column_id"}), @ORM\Index(name="accounts_account_type_idx", columns={"account_type"}), @ORM\Index(name="accounts_official_code_idx", columns={"official_code"})})
 * @ORM\Entity
 */
class Accounts
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="account_name", type="string", length=255, nullable=false)
     */
    private $accountName;

    /**
     * @var int
     *
     * @ORM\Column(name="account_type", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $accountType;

    /**
     * @var string
     *
     * @ORM\Column(name="official_code", type="string", length=20, nullable=false)
     */
    private $officialCode;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_archived", type="boolean", nullable=false)
     */
    private $isArchived;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inserted_at", type="datetime", nullable=false)
     */
    private $insertedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="inserted_by", type="string", length=255, nullable=false)
     */
    private $insertedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_by", type="string", length=255, nullable=false)
     */
    private $updatedBy;

    /**
     * @var \BalanceAndIncomeLines
     *
     * @ORM\ManyToOne(targetEntity="BalanceAndIncomeLines")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="balance_and_income_line_id", referencedColumnName="id")
     * })
     */
    private $balanceAndIncomeLine;

    /**
     * @var \EquityColumns
     *
     * @ORM\ManyToOne(targetEntity="EquityColumns")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equity_column_id", referencedColumnName="id")
     * })
     */
    private $equityColumn;



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
     * Set accountName.
     *
     * @param string $accountName
     *
     * @return Accounts
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * Get accountName.
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Set accountType.
     *
     * @param int $accountType
     *
     * @return Accounts
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Get accountType.
     *
     * @return int
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Set officialCode.
     *
     * @param string $officialCode
     *
     * @return Accounts
     */
    public function setOfficialCode($officialCode)
    {
        $this->officialCode = $officialCode;

        return $this;
    }

    /**
     * Get officialCode.
     *
     * @return string
     */
    public function getOfficialCode()
    {
        return $this->officialCode;
    }

    /**
     * Set isArchived.
     *
     * @param bool $isArchived
     *
     * @return Accounts
     */
    public function setIsArchived($isArchived)
    {
        $this->isArchived = $isArchived;

        return $this;
    }

    /**
     * Get isArchived.
     *
     * @return bool
     */
    public function getIsArchived()
    {
        return $this->isArchived;
    }

    /**
     * Set insertedAt.
     *
     * @param \DateTime $insertedAt
     *
     * @return Accounts
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
     * Set insertedBy.
     *
     * @param string $insertedBy
     *
     * @return Accounts
     */
    public function setInsertedBy($insertedBy)
    {
        $this->insertedBy = $insertedBy;

        return $this;
    }

    /**
     * Get insertedBy.
     *
     * @return string
     */
    public function getInsertedBy()
    {
        return $this->insertedBy;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return Accounts
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
     * Set updatedBy.
     *
     * @param string $updatedBy
     *
     * @return Accounts
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy.
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set balanceAndIncomeLine.
     *
     * @param \Cuentas\PolizasBundle\Entity\BalanceAndIncomeLines|null $balanceAndIncomeLine
     *
     * @return Accounts
     */
    public function setBalanceAndIncomeLine(\Cuentas\PolizasBundle\Entity\BalanceAndIncomeLines $balanceAndIncomeLine = null)
    {
        $this->balanceAndIncomeLine = $balanceAndIncomeLine;

        return $this;
    }

    /**
     * Get balanceAndIncomeLine.
     *
     * @return \Cuentas\PolizasBundle\Entity\BalanceAndIncomeLines|null
     */
    public function getBalanceAndIncomeLine()
    {
        return $this->balanceAndIncomeLine;
    }

    /**
     * Set equityColumn.
     *
     * @param \Cuentas\PolizasBundle\Entity\EquityColumns|null $equityColumn
     *
     * @return Accounts
     */
    public function setEquityColumn(\Cuentas\PolizasBundle\Entity\EquityColumns $equityColumn = null)
    {
        $this->equityColumn = $equityColumn;

        return $this;
    }

    /**
     * Get equityColumn.
     *
     * @return \Cuentas\PolizasBundle\Entity\EquityColumns|null
     */
    public function getEquityColumn()
    {
        return $this->equityColumn;
    }
}
