<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CurrencyCodes
 *
 * @ORM\Table(name="currency_codes")
 * @ORM\Entity
 */
class CurrencyCodes
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=3, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set isArchived.
     *
     * @param bool $isArchived
     *
     * @return CurrencyCodes
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
     * @return CurrencyCodes
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
     * @return CurrencyCodes
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
     * @return CurrencyCodes
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
     * @return CurrencyCodes
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
}
