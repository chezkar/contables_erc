<?php

namespace Cuentas\PolizasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extensions
 *
 * @ORM\Table(name="extensions")
 * @ORM\Entity
 */
class Extensions
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
     * @ORM\Column(name="extension_guid", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $extensionGuid;

    /**
     * @var string
     *
     * @ORM\Column(name="extension_name", type="string", length=255, nullable=false)
     */
    private $extensionName;

    /**
     * @var string
     *
     * @ORM\Column(name="extension_version", type="string", length=20, nullable=false)
     */
    private $extensionVersion;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="uninstalled_at", type="datetime", nullable=true)
     */
    private $uninstalledAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uninstalled_by", type="string", length=255, nullable=true)
     */
    private $uninstalledBy;



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
     * Set extensionGuid.
     *
     * @param string $extensionGuid
     *
     * @return Extensions
     */
    public function setExtensionGuid($extensionGuid)
    {
        $this->extensionGuid = $extensionGuid;

        return $this;
    }

    /**
     * Get extensionGuid.
     *
     * @return string
     */
    public function getExtensionGuid()
    {
        return $this->extensionGuid;
    }

    /**
     * Set extensionName.
     *
     * @param string $extensionName
     *
     * @return Extensions
     */
    public function setExtensionName($extensionName)
    {
        $this->extensionName = $extensionName;

        return $this;
    }

    /**
     * Get extensionName.
     *
     * @return string
     */
    public function getExtensionName()
    {
        return $this->extensionName;
    }

    /**
     * Set extensionVersion.
     *
     * @param string $extensionVersion
     *
     * @return Extensions
     */
    public function setExtensionVersion($extensionVersion)
    {
        $this->extensionVersion = $extensionVersion;

        return $this;
    }

    /**
     * Get extensionVersion.
     *
     * @return string
     */
    public function getExtensionVersion()
    {
        return $this->extensionVersion;
    }

    /**
     * Set insertedAt.
     *
     * @param \DateTime $insertedAt
     *
     * @return Extensions
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
     * @return Extensions
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
     * @return Extensions
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
     * @return Extensions
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
     * Set uninstalledAt.
     *
     * @param \DateTime|null $uninstalledAt
     *
     * @return Extensions
     */
    public function setUninstalledAt($uninstalledAt = null)
    {
        $this->uninstalledAt = $uninstalledAt;

        return $this;
    }

    /**
     * Get uninstalledAt.
     *
     * @return \DateTime|null
     */
    public function getUninstalledAt()
    {
        return $this->uninstalledAt;
    }

    /**
     * Set uninstalledBy.
     *
     * @param string|null $uninstalledBy
     *
     * @return Extensions
     */
    public function setUninstalledBy($uninstalledBy = null)
    {
        $this->uninstalledBy = $uninstalledBy;

        return $this;
    }

    /**
     * Get uninstalledBy.
     *
     * @return string|null
     */
    public function getUninstalledBy()
    {
        return $this->uninstalledBy;
    }
}
