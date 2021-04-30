<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtendedDocumentTypes
 *
 * @ORM\Table(name="extended_document_types", indexes={@ORM\Index(name="extended_document_types_extension_id_fk", columns={"extension_id"})})
 * @ORM\Entity
 */
class ExtendedDocumentTypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=32, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type_name", type="string", length=255, nullable=false)
     */
    private $typeName;

    /**
     * @var int
     *
     * @ORM\Column(name="fallback_document_type", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $fallbackDocumentType;

    /**
     * @var \Extensions
     *
     * @ORM\ManyToOne(targetEntity="Extensions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="extension_id", referencedColumnName="id")
     * })
     */
    private $extension;



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
     * Set typeName.
     *
     * @param string $typeName
     *
     * @return ExtendedDocumentTypes
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;

        return $this;
    }

    /**
     * Get typeName.
     *
     * @return string
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Set fallbackDocumentType.
     *
     * @param int $fallbackDocumentType
     *
     * @return ExtendedDocumentTypes
     */
    public function setFallbackDocumentType($fallbackDocumentType)
    {
        $this->fallbackDocumentType = $fallbackDocumentType;

        return $this;
    }

    /**
     * Get fallbackDocumentType.
     *
     * @return int
     */
    public function getFallbackDocumentType()
    {
        return $this->fallbackDocumentType;
    }

    /**
     * Set extension.
     *
     * @param \Cuentas\PolizasBundle\Entity\Extensions|null $extension
     *
     * @return ExtendedDocumentTypes
     */
    public function setExtension(\Cuentas\PolizasBundle\Entity\Extensions $extension = null)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension.
     *
     * @return \Cuentas\PolizasBundle\Entity\Extensions|null
     */
    public function getExtension()
    {
        return $this->extension;
    }
}
