<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documents
 *
 * @ORM\Table(name="documents", indexes={@ORM\Index(name="documents_external_id_idx", columns={"external_id"}), @ORM\Index(name="documents_extended_document_type_id_fk", columns={"extended_document_type_id"}), @ORM\Index(name="documents_document_date_idx", columns={"document_date"}), @ORM\Index(name="documents_document_type_idx", columns={"document_type"})})
 * @ORM\Entity
 */
class Documents
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
     * @ORM\Column(name="document_date", type="date", nullable=false)
     */
    private $documentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="document_no", type="string", length=100, nullable=false)
     */
    private $documentNo;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="document_comments", type="string", length=4000, nullable=false)
     */
    private $documentComments;

    /**
     * @var string
     *
     * @ORM\Column(name="internal_comments", type="string", length=500, nullable=false)
     */
    private $internalComments;

    /**
     * @var int
     *
     * @ORM\Column(name="document_type", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $documentType;

    /**
     * @var string
     *
     * @ORM\Column(name="external_id", type="string", length=255, nullable=false)
     */
    private $externalId;

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
     * Set documentDate.
     *
     * @param \DateTime $documentDate
     *
     * @return Documents
     */
    public function setDocumentDate($documentDate)
    {
        $this->documentDate = $documentDate;

        return $this;
    }

    /**
     * Get documentDate.
     *
     * @return \DateTime
     */
    public function getDocumentDate()
    {
        return $this->documentDate;
    }

    /**
     * Set documentNo.
     *
     * @param string $documentNo
     *
     * @return Documents
     */
    public function setDocumentNo($documentNo)
    {
        $this->documentNo = $documentNo;

        return $this;
    }

    /**
     * Get documentNo.
     *
     * @return string
     */
    public function getDocumentNo()
    {
        return $this->documentNo;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Documents
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
     * Set documentComments.
     *
     * @param string $documentComments
     *
     * @return Documents
     */
    public function setDocumentComments($documentComments)
    {
        $this->documentComments = $documentComments;

        return $this;
    }

    /**
     * Get documentComments.
     *
     * @return string
     */
    public function getDocumentComments()
    {
        return $this->documentComments;
    }

    /**
     * Set internalComments.
     *
     * @param string $internalComments
     *
     * @return Documents
     */
    public function setInternalComments($internalComments)
    {
        $this->internalComments = $internalComments;

        return $this;
    }

    /**
     * Get internalComments.
     *
     * @return string
     */
    public function getInternalComments()
    {
        return $this->internalComments;
    }

    /**
     * Set documentType.
     *
     * @param int $documentType
     *
     * @return Documents
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
     * Set externalId.
     *
     * @param string $externalId
     *
     * @return Documents
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * Get externalId.
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Set insertedAt.
     *
     * @param \DateTime $insertedAt
     *
     * @return Documents
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
     * @return Documents
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
     * @return Documents
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
     * @return Documents
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
     * Set extendedDocumentType.
     *
     * @param \Cuentas\PolizasBundle\Entity\ExtendedDocumentTypes|null $extendedDocumentType
     *
     * @return Documents
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
