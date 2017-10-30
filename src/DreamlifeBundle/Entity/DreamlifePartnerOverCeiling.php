<?php

namespace DreamlifeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DreamlifePartnerOverCeiling
 *
 * @ORM\Table(name="dreamlife_partner_over_ceiling", indexes={@ORM\Index(name="user_uid", columns={"user_uid"}), @ORM\Index(name="pack_uid", columns={"pack_uid"})})
 * @ORM\Entity
 */
class DreamlifePartnerOverCeiling
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pack_uid", type="integer", nullable=false)
     */
    private $packUid;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_uid", type="integer", nullable=false)
     */
    private $userUid;

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
     * @var \DateTime
     *
     * @ORM\Column(name="gained_at", type="datetime", nullable=false)
     */
    private $gainedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="used", type="boolean", nullable=false)
     */
    private $used;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;


}

