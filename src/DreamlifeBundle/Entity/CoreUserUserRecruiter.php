<?php

namespace DreamlifeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreUserUserRecruiter
 *
 * @ORM\Table(name="core_user_user_recruiter", indexes={@ORM\Index(name="recruiter_id", columns={"recruiter_id"})})
 * @ORM\Entity
 */
class CoreUserUserRecruiter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="address_id", type="integer", nullable=true)
     */
    private $addressId;

    /**
     * @var integer
     *
     * @ORM\Column(name="picture_id", type="integer", nullable=true)
     */
    private $pictureId;

    /**
     * @var integer
     *
     * @ORM\Column(name="recruiter_id", type="integer", nullable=true)
     */
    private $recruiterId;

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
     * @ORM\Column(name="tmp_password", type="string", length=255, nullable=true)
     */
    private $tmpPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_canonical", type="string", length=255, nullable=false)
     */
    private $emailCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=50, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_phone", type="string", length=20, nullable=true)
     */
    private $mobilePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="nationality", type="string", length=30, nullable=true)
     */
    private $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="role_label", type="string", length=100, nullable=true)
     */
    private $roleLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=5, nullable=false)
     */
    private $locale;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=20, nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=false)
     */
    private $salt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expired", type="boolean", nullable=false)
     */
    private $expired;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked;

    /**
     * @var boolean
     *
     * @ORM\Column(name="credentials_expired", type="boolean", nullable=false)
     */
    private $credentialsExpired;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation_token", type="string", length=255, nullable=true)
     */
    private $confirmationToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true)
     */
    private $passwordRequestedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validate_date", type="datetime", nullable=true)
     */
    private $validateDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="roles", type="text", length=65535, nullable=false)
     */
    private $roles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="phone_validated", type="boolean", nullable=false)
     */
    private $phoneValidated;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_code", type="string", length=255, nullable=true)
     */
    private $phoneCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="phone_request_at", type="datetime", nullable=true)
     */
    private $phoneRequestAt;

    /**
     * @var string
     *
     * @ORM\Column(name="random_key", type="string", length=255, nullable=false)
     */
    private $randomKey;

    /**
     * @var string
     *
     * @ORM\Column(name="commercial_name", type="string", length=255, nullable=true)
     */
    private $commercialName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth_date", type="datetime", nullable=true)
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="document_type", type="string", length=255, nullable=true)
     */
    private $documentType;

    /**
     * @var string
     *
     * @ORM\Column(name="document_number", type="string", length=255, nullable=true)
     */
    private $documentNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=255, nullable=true)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="rib", type="string", length=255, nullable=true)
     */
    private $rib;

    /**
     * @var string
     *
     * @ORM\Column(name="transfer_type", type="string", length=255, nullable=true)
     */
    private $transferType;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion_code", type="string", length=255, nullable=true)
     */
    private $promotionCode;

    /**
     * @var string
     *
     * @ORM\Column(name="chosen_tree_direction", type="string", length=255, nullable=true)
     */
    private $chosenTreeDirection;

    /**
     * @var string
     *
     * @ORM\Column(name="last_tree_direction", type="string", length=255, nullable=true)
     */
    private $lastTreeDirection;

    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=255, nullable=true)
     */
    private $siret;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="joined_at", type="datetime", nullable=true)
     */
    private $joinedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="iban", type="string", length=255, nullable=true)
     */
    private $iban;

    /**
     * @var string
     *
     * @ORM\Column(name="document", type="string", length=255, nullable=true)
     */
    private $document;

    /**
     * @var string
     *
     * @ORM\Column(name="rib_document", type="string", length=255, nullable=true)
     */
    private $ribDocument;

    /**
     * @var string
     *
     * @ORM\Column(name="invalid_email", type="string", length=255, nullable=true)
     */
    private $invalidEmail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="check_status", type="string", length=255, nullable=true)
     */
    private $checkStatus = 'status_partner';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;


}

