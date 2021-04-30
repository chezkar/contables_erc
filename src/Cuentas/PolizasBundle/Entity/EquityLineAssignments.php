<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquityLineAssignments
 *
 * @ORM\Table(name="equity_line_assignments", indexes={@ORM\Index(name="equity_line_assignments_extended_document_type_id_fk", columns={"extended_document_type_id"}), @ORM\Index(name="equity_line_assignments_document_type_idx", columns={"document_type"}), @ORM\Index(name="equity_line_assignments_equity_line_id_fk", columns={"equity_line_id"})})
 * @ORM\Entity
 */
class EquityLineAssignments
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
     * @ORM\Column(name="document_type", type="smallint", nullable=false)
     */
    private $documentType;

    /**
     * @var \EquityLines
     *
     * @ORM\ManyToOne(targetEntity="EquityLines")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equity_line_id", referencedColumnName="id")
     * })
     */
    private $equityLine;

    /**
     * @var \ExtendedDocumentTypes
     *
     * @ORM\ManyToOne(targetEntity="ExtendedDocumentTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="extended_document_type_id", referencedColumnName="id")
     * })
     */
    private $extendedDocumentType;



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
     * Set documentType.
     *
     * @param int $documentType
     *
     * @return EquityLineAssignments
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;

        return $this;
    }

    /**
     * Get documentType.
     *
     * @return int
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Set equityLine.
     *
     * @param \Cuentas\PolizasBundle\Entity\EquityLines|null $equityLine
     *
     * @return EquityLineAssignments
     */
    public function setEquityLine(\Cuentas\PolizasBundle\Entity\EquityLines $equityLine = null)
    {
        $this->equityLine = $equityLine;

        return $this;
    }

    /**
     * Get equityLine.
     *
     * @return \Cuentas\PolizasBundle\Entity\EquityLines|null
     */
    public function getEquityLine()
    {
        return $this->equityLine;
    }

    /**
     * Set extendedDocumentType.
     *
     * @param \Cuentas\PolizasBundle\Entity\ExtendedDocumentTypes|null $extendedDocumentType
     *
     * @return EquityLineAssignments
     */
    public function setExtendedDocumentType(\Cuentas\PolizasBundle\Entity\ExtendedDocumentTypes $extendedDocumentType = null)
    {
        $this->extendedDocumentType = $extendedDocumentType;

        return $this;
    }

    /**
     * Get extendedDocumentType.
     *
     * @return \Cuentas\PolizasBundle\Entity\ExtendedDocumentTypes|null
     */
    public function getExtendedDocumentType()
    {
        return $this->extendedDocumentType;
    }
}
