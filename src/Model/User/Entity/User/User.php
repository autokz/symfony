<?php


namespace App\Model\User\Entity\User;


use Api\Model\User\Entity\User\ConfirmToken;
use App\Model\User\Service\PasswordHasher;

class User
{
    /**
     * @var Id
     */
    private $id;
    /**
     * @var Email
     */
    private $email;
    /**
     * @var string
     */
    private $passwordHash;

    public function __construct(Id $id,
                                \DateTimeImmutable $date,
                                Email $email,
                                MobilePhone $mobilePhone,
                                PasswordHasher $passwordHasher,
                                ConfirmToken $confirmToken)
    {
        $this->email=$email;
        $this->passwordHash=$hash;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }
}