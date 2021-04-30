<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquityLines
 *
 * @ORM\Table(name="equity_lines", indexes={@ORM\Index(name="equity_lines_visible_index_idx", columns={"visible_index"}), @ORM\Index(name="equity_lines_line_type_idx", columns={"line_type"})})
 * @ORM\Entity
 */
class EquityLines
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
     * @var int
     *
     * @ORM\Column(name="visible_index", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $visibleIndex;

    /**
     * @var string
     *
     * @ORM\Column(name="printed_no", type="string", length=20, nullable=false)
     */
    private $printedNo;

    /**
     * @var string
     *
     * @ORM\Column(name="line_text", type="string", length=255, nullable=false)
     */
    private $lineText;

    /**
     * @var string
     *
     * @ORM\Column(name="line_type", type="string", length=0, nullable=false)
     */
    private $lineType;

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
     * Set visibleIndex.
     *
     * @param int $visibleIndex
     *
     * @return EquityLines
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
     * Set printedNo.
     *
     * @param string $printedNo
     *
     * @return EquityLines
     */
    public function setPrintedNo($printedNo)
    {
        $this->printedNo = $printedNo;

        return $this;
    }

    /**
     * Get printedNo.
     *
     * @return string
     */
    public function getPrintedNo()
    {
        return $this->printedNo;
    }

    /**
     * Set lineText.
     *
     * @param string $lineText
     *
     * @return EquityLines
     */
    public function setLineText($lineText)
    {
        $this->lineText = $lineText;

        return $this;
    }

    /**
     * Get lineText.
     *
     * @return string
     */
    public function getLineText()
    {
        return $this->lineText;
    }

    /**
     * Set lineType.
     *
     * @param string $lineType
     *
     * @return EquityLines
     */
    public function setLineType($lineType)
    {
        $this->lineType = $lineType;

        return $this;
    }

    /**
     * Get lineType.
     *
     * @return string
     */
    public function getLineType()
    {
        return $this->lineType;
    }

    /**
     * Set insertedAt.
     *
     * @param \DateTime $insertedAt
     *
     * @return EquityLines
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
     * @return EquityLines
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
     * @return EquityLines
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
     * @return EquityLines
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
