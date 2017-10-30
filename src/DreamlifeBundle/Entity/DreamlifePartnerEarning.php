<?php

namespace DreamlifeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DreamlifePartnerEarning
 *
 * @ORM\Table(name="dreamlife_partner_earning", indexes={@ORM\Index(name="partner_uid", columns={"partner_uid"}), @ORM\Index(name="due_uid", columns={"due_uid"}), @ORM\Index(name="beneficiary_uid", columns={"beneficiary_uid"})})
 * @ORM\Entity
 */
class DreamlifePartnerEarning
{
    /**
     * @var integer
     *
     * @ORM\Column(name="partner_uid", type="integer", nullable=false)
     */
    private $partnerUid;

    /**
     * @var integer
     *
     * @ORM\Column(name="beneficiary_uid", type="integer", nullable=true)
     */
    private $beneficiaryUid;

    /**
     * @var integer
     *
     * @ORM\Column(name="due_uid", type="integer", nullable=true)
     */
    private $dueUid;

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
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gained_at", type="datetime", nullable=false)
     */
    private $gainedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;


}

