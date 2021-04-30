<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BalanceAndIncomeLines
 *
 * @ORM\Table(name="balance_and_income_lines", indexes={@ORM\Index(name="balance_and_income_lines_left_index_idx", columns={"left_index"}), @ORM\Index(name="balance_and_income_lines_right_index_idx", columns={"right_index"}), @ORM\Index(name="balance_and_income_lines_line_type_idx", columns={"line_type"}), @ORM\Index(name="balance_and_income_lines_value_type_idx", columns={"value_type"}), @ORM\Index(name="balance_and_income_lines_visible_index_idx", columns={"visible_index"})})
 * @ORM\Entity
 */
class BalanceAndIncomeLines
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
     * @ORM\Column(name="line_type", type="string", length=0, nullable=false)
     */
    private $lineType;

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
     * @ORM\Column(name="value_type", type="string", length=0, nullable=false)
     */
    private $valueType;

    /**
     * @var int
     *
     * @ORM\Column(name="left_index", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $leftIndex;

    /**
     * @var int
     *
     * @ORM\Column(name="right_index", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rightIndex;

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
     * Set lineType.
     *
     * @param string $lineType
     *
     * @return BalanceAndIncomeLines
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
     * Set visibleIndex.
     *
     * @param int $visibleIndex
     *
     * @return BalanceAndIncomeLines
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
     * @return BalanceAndIncomeLines
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
     * @return BalanceAndIncomeLines
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
     * Set valueType.
     *
     * @param string $valueType
     *
     * @return BalanceAndIncomeLines
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;

        return $this;
    }

    /**
     * Get valueType.
     *
     * @return string
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * Set leftIndex.
     *
     * @param int $leftIndex
     *
     * @return BalanceAndIncomeLines
     */
    public function setLeftIndex($leftIndex)
    {
        $this->leftIndex = $leftIndex;

        return $this;
    }

    /**
     * Get leftIndex.
     *
     * @return int
     */
    public function getLeftIndex()
    {
        return $this->leftIndex;
    }

    /**
     * Set rightIndex.
     *
     * @param int $rightIndex
     *
     * @return BalanceAndIncomeLines
     */
    public function setRightIndex($rightIndex)
    {
        $this->rightIndex = $rightIndex;

        return $this;
    }

    /**
     * Get rightIndex.
     *
     * @return int
     */
    public function getRightIndex()
    {
        return $this->rightIndex;
    }

    /**
     * Set insertedAt.
     *
     * @param \DateTime $insertedAt
     *
     * @return BalanceAndIncomeLines
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
     * @return BalanceAndIncomeLines
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
     * @return BalanceAndIncomeLines
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
     * @return BalanceAndIncomeLines
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
