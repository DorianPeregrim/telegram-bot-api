<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class Contact
 *
 * @package TelegramBotApi\Types
 */
class Contact
{
    /**
     * @var string
     */
    private string $phoneNumber;

    /**
     * @var string
     */
    private string $firstName;

    /**
     * @var string
     */
    private string $lastName;

    /**
     * @var int
     */
    private int $userId;

    /**
     * @var string
     */
    private string $vcard;

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     *
     * @return Contact
     */
    public function setPhoneNumber(string $phoneNumber): Contact
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return Contact
     */
    public function setFirstName(string $firstName): Contact
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return Contact
     */
    public function setLastName(string $lastName): Contact
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     *
     * @return Contact
     */
    public function setUserId(int $userId): Contact
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return string
     */
    public function getVcard(): string
    {
        return $this->vcard;
    }

    /**
     * @param string $vcard
     *
     * @return Contact
     */
    public function setVcard(string $vcard): Contact
    {
        $this->vcard = $vcard;

        return $this;
    }
}