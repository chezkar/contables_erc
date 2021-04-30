<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtendedFixedAssetsOperationTypes
 *
 * @ORM\Table(name="extended_fixed_assets_operation_types", indexes={@ORM\Index(name="extended_fixed_assets_operation_types_extension_id_fk", columns={"extension_id"})})
 * @ORM\Entity
 */
class ExtendedFixedAssetsOperationTypes
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
     * @ORM\Column(name="fallback_fixed_assets_operation_type", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $fallbackFixedAssetsOperationType;

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
     * @return ExtendedFixedAssetsOperationTypes
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
     * Set fallbackFixedAssetsOperationType.
     *
     * @param int $fallbackFixedAssetsOperationType
     *
     * @return ExtendedFixedAssetsOperationTypes
     */
    public function setFallbackFixedAssetsOperationType($fallbackFixedAssetsOperationType)
    {
        $this->fallbackFixedAssetsOperationType = $fallbackFixedAssetsOperationType;

        return $this;
    }

    /**
     * Get fallbackFixedAssetsOperationType.
     *
     * @return int
     */
    public function getFallbackFixedAssetsOperationType()
    {
        return $this->fallbackFixedAssetsOperationType;
    }

    /**
     * Set extension.
     *
     * @param \Cuentas\PolizasBundle\Entity\Extensions|null $extension
     *
     * @return ExtendedFixedAssetsOperationTypes
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
