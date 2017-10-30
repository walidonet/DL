<?php

namespace DreamlifeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DreamlifePartnerEarningConfig
 *
 * @ORM\Table(name="dreamlife_partner_earning_config")
 * @ORM\Entity
 */
class DreamlifePartnerEarningConfig
{
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
     * @var float
     *
     * @ORM\Column(name="level1", type="float", precision=10, scale=0, nullable=false)
     */
    private $level1;

    /**
     * @var float
     *
     * @ORM\Column(name="level1complete", type="float", precision=10, scale=0, nullable=false)
     */
    private $level1complete;

    /**
     * @var float
     *
     * @ORM\Column(name="level2", type="float", precision=10, scale=0, nullable=false)
     */
    private $level2;

    /**
     * @var float
     *
     * @ORM\Column(name="level3", type="float", precision=10, scale=0, nullable=false)
     */
    private $level3;

    /**
     * @var float
     *
     * @ORM\Column(name="level4", type="float", precision=10, scale=0, nullable=false)
     */
    private $level4;

    /**
     * @var float
     *
     * @ORM\Column(name="level5", type="float", precision=10, scale=0, nullable=false)
     */
    private $level5;

    /**
     * @var float
     *
     * @ORM\Column(name="level6", type="float", precision=10, scale=0, nullable=false)
     */
    private $level6;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;


}

