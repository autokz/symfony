<?php


namespace App\Model\User\Entity\User;


use Webmozart\Assert\Assert;

class MobilePhone
{
    private $value;

    public function __construct(string $value)
    {
        Assert::notEmpty($value);
        $this->value=$value;
    }

    public function getValue()
    {
        return $this->value;
    }


}