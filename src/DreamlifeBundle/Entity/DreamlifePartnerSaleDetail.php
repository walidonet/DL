<?php

namespace DreamlifeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DreamlifePartnerSaleDetail
 *
 * @ORM\Table(name="dreamlife_partner_sale_detail", indexes={@ORM\Index(name="sale_uid", columns={"sale_uid"})})
 * @ORM\Entity
 */
class DreamlifePartnerSaleDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sale_uid", type="integer", nullable=false)
     */
    private $saleUid;

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
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="product", type="integer", nullable=false)
     */
    private $product;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;


}

