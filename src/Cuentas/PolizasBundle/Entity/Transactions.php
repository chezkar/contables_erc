<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transactions
 *
 * @ORM\Table(name="transactions", indexes={@ORM\Index(name="transactions_transaction_date_idx", columns={"transaction_date"}), @ORM\Index(name="transactions_document_id_fk", columns={"document_id"})})
 * @ORM\Entity
 */
class Transactions
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
     * @var \DateTime
     *
     * @ORM\Column(name="transaction_date", type="date", nullable=false)
     */
    private $transactionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \Documents
     *
     * @ORM\ManyToOne(targetEntity="Documents")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="document_id", referencedColumnName="id")
     * })
     */
    private $document;



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
     * Set transactionDate.
     *
     * @param \DateTime $transactionDate
     *
     * @return Transactions
     */
    public function setTransactionDate($transactionDate)
    {
        $this->transactionDate = $transactionDate;

        return $this;
    }

    /**
     * Get transactionDate.
     *
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Transactions
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set document.
     *
     * @param \Cuentas\PolizasBundle\Entity\Documents|null $document
     *
     * @return Transactions
     */
    public function setDocument(\Cuentas\PolizasBundle\Entity\Documents $document = null)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document.
     *
     * @return \Cuentas\PolizasBundle\Entity\Documents|null
     */
    public function getDocument()
    {
        return $this->document;
    }
}
