<?php

namespace DreamlifeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DreamlifePartnerPartner
 *
 * @ORM\Table(name="dreamlife_partner_partner", indexes={@ORM\Index(name="pack_id", columns={"pack_id"}), @ORM\Index(name="enroller_id", columns={"enroller_id"}), @ORM\Index(name="tree_parent_id", columns={"tree_parent_id"}), @ORM\Index(name="user_uid", columns={"user_uid"})})
 * @ORM\Entity
 */
class DreamlifePartnerPartner
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tree_parent_id", type="integer", nullable=true)
     */
    private $treeParentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="enroller_id", type="integer", nullable=true)
     */
    private $enrollerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pack_id", type="integer", nullable=true)
     */
    private $packId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="pack_code", type="string", length=255, nullable=true)
     */
    private $packCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validate_date_for_user", type="datetime", nullable=true)
     */
    private $validateDateForUser;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="tree_depth", type="integer", nullable=true)
     */
    private $treeDepth;

    /**
     * @var string
     *
     * @ORM\Column(name="tree_position", type="string", length=255, nullable=true)
     */
    private $treePosition;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_code", type="string", length=255, nullable=true)
     */
    private $parentCode;

    /**
     * @var string
     *
     * @ORM\Column(name="qualification", type="string", length=255, nullable=true)
     */
    private $qualification = 'dreamlife_partner.qualification.client';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_placed", type="boolean", nullable=false)
     */
    private $isPlaced = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var \DreamlifeBundle\Entity\CoreUserUser
     *
     * @ORM\ManyToOne(targetEntity="DreamlifeBundle\Entity\CoreUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_uid", referencedColumnName="uid")
     * })
     */
    private $userUid;

    /**
     * @return int
     */
    public function getTreeParentId()
    {
        return $this->treeParentId;
    }

    /**
     * @param int $treeParentId
     */
    public function setTreeParentId($treeParentId)
    {
        $this->treeParentId = $treeParentId;
    }

    /**
     * @return int
     */
    public function getEnrollerId()
    {
        return $this->enrollerId;
    }

    /**
     * @param int $enrollerId
     */
    public function setEnrollerId($enrollerId)
    {
        $this->enrollerId = $enrollerId;
    }

    /**
     * @return int
     */
    public function getPackId()
    {
        return $this->packId;
    }

    /**
     * @param int $packId
     */
    public function setPackId($packId)
    {
        $this->packId = $packId;
    }

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * @param \DateTime $deletedAt
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getPackCode()
    {
        return $this->packCode;
    }

    /**
     * @param string $packCode
     */
    public function setPackCode($packCode)
    {
        $this->packCode = $packCode;
    }

    /**
     * @return \DateTime
     */
    public function getValidateDateForUser()
    {
        return $this->validateDateForUser;
    }

    /**
     * @param \DateTime $validateDateForUser
     */
    public function setValidateDateForUser($validateDateForUser)
    {
        $this->validateDateForUser = $validateDateForUser;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getTreeDepth()
    {
        return $this->treeDepth;
    }

    /**
     * @param int $treeDepth
     */
    public function setTreeDepth($treeDepth)
    {
        $this->treeDepth = $treeDepth;
    }

    /**
     * @return string
     */
    public function getTreePosition()
    {
        return $this->treePosition;
    }

    /**
     * @param string $treePosition
     */
    public function setTreePosition($treePosition)
    {
        $this->treePosition = $treePosition;
    }

    /**
     * @return string
     */
    public function getParentCode()
    {
        return $this->parentCode;
    }

    /**
     * @param string $parentCode
     */
    public function setParentCode($parentCode)
    {
        $this->parentCode = $parentCode;
    }

    /**
     * @return string
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * @param string $qualification
     */
    public function setQualification($qualification)
    {
        $this->qualification = $qualification;
    }

    /**
     * @return bool
     */
    public function isPlaced()
    {
        return $this->isPlaced;
    }

    /**
     * @param bool $isPlaced
     */
    public function setIsPlaced($isPlaced)
    {
        $this->isPlaced = $isPlaced;
    }

    /**
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return CoreUserUser
     */
    public function getUserUid()
    {
        return $this->userUid;
    }

    /**
     * @param CoreUserUser $userUid
     */
    public function setUserUid($userUid)
    {
        $this->userUid = $userUid;
    }


}

