<?php

namespace DreamlifeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreCmsPicture
 *
 * @ORM\Table(name="core_cms_picture")
 * @ORM\Entity
 */
class CoreCmsPicture
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
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=200, nullable=true)
     */
    private $alt;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=10, nullable=false)
     */
    private $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="webpath", type="text", length=65535, nullable=false)
     */
    private $webpath;

    /**
     * @var string
     *
     * @ORM\Column(name="random_key", type="string", length=255, nullable=false)
     */
    private $randomKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;


}

