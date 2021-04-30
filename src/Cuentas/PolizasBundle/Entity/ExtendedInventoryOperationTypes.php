<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtendedInventoryOperationTypes
 *
 * @ORM\Table(name="extended_inventory_operation_types", indexes={@ORM\Index(name="extended_inventory_operation_types_extension_id_fk", columns={"extension_id"})})
 * @ORM\Entity
 */
class ExtendedInventoryOperationTypes
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
     * @ORM\Column(name="fallback_inventory_operation_type", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $fallbackInventoryOperationType;

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
     * @return ExtendedInventoryOperationTypes
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
     * Set fallbackInventoryOperationType.
     *
     * @param int $fallbackInventoryOperationType
     *
     * @return ExtendedInventoryOperationTypes
     */
    public function setFallbackInventoryOperationType($fallbackInventoryOperationType)
    {
        $this->fallbackInventoryOperationType = $fallbackInventoryOperationType;

        return $this;
    }

    /**
     * Get fallbackInventoryOperationType.
     *
     * @return int
     */
    public function getFallbackInventoryOperationType()
    {
        return $this->fallbackInventoryOperationType;
    }

    /**
     * Set extension.
     *
     * @param \Cuentas\PolizasBundle\Entity\Extensions|null $extension
     *
     * @return ExtendedInventoryOperationTypes
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
