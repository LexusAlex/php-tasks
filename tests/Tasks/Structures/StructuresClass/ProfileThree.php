<?php

namespace Test\Tasks\Structures\StructuresClass;

use DomainException;
use Webmozart\Assert\Assert;

class ProfileThree
{
    private int $id;
    private string $name;
    private array $emails;

    public function __construct(int $id, string $name, string $email)
    {
        Assert::notEmpty($name);
        Assert::email($email);

        $this->id = $id;
        $this->name = $name;
        $this->emails = [$email];
    }

    public function addEmail(string $email): void
    {
        Assert::email($email);

        if (in_array($email, $this->emails)) {
            throw new DomainException('Email already exists in the profile.');
        }

        $this->emails[] = $email;
    }

    public function removeEmail(string $email): void
    {
        Assert::email($email);

        if (!in_array($email, $this->emails)) {
            throw new DomainException('Email does not exist in the profile.');
        }

        if (count($this->emails) === 1) {
            throw new DomainException('Unable to remove the last email.');
        }

        unset($this->emails[array_search($email, $this->emails)]);
    }

    /**
     * @return string[]
     */
    public function getEmails(): array
    {
        return $this->emails;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}