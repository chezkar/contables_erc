<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquityColumns
 *
 * @ORM\Table(name="equity_columns", indexes={@ORM\Index(name="equity_columns_visible_index_idx", columns={"visible_index"})})
 * @ORM\Entity
 */
class EquityColumns
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
     * @ORM\Column(name="column_text", type="string", length=255, nullable=false)
     */
    private $columnText;

    /**
     * @var int
     *
     * @ORM\Column(name="visible_index", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $visibleIndex;

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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set columnText.
     *
     * @param string $columnText
     *
     * @return EquityColumns
     */
    public function setColumnText($columnText)
    {
        $this->columnText = $columnText;

        return $this;
    }

    /**
     * Get columnText.
     *
     * @return string
     */
    public function getColumnText()
    {
        return $this->columnText;
    }

    /**
     * Set visibleIndex.
     *
     * @param int $visibleIndex
     *
     * @return EquityColumns
     */
    public function setVisibleIndex($visibleIndex)
    {
        $this->visibleIndex = $visibleIndex;

        return $this;
    }

    /**
     * Get visibleIndex.
     *
     * @return int
     */
    public function getVisibleIndex()
    {
        return $this->visibleIndex;
    }

    /**
     * Set insertedAt.
     *
     * @param \DateTime $insertedAt
     *
     * @return EquityColumns
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
     * @return EquityColumns
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
     * @return EquityColumns
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
     * @return EquityColumns
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
