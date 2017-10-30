<?php

namespace DreamlifeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreOauthServerClient
 *
 * @ORM\Table(name="core_oauth_server_client")
 * @ORM\Entity
 */
class CoreOauthServerClient
{
    /**
     * @var string
     *
     * @ORM\Column(name="random_id", type="string", length=255, nullable=false)
     */
    private $randomId;

    /**
     * @var string
     *
     * @ORM\Column(name="redirect_uris", type="text", length=65535, nullable=false)
     */
    private $redirectUris;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=255, nullable=false)
     */
    private $secret;

    /**
     * @var string
     *
     * @ORM\Column(name="allowed_grant_types", type="text", length=65535, nullable=false)
     */
    private $allowedGrantTypes;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

