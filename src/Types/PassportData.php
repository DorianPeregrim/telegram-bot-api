<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class PassportData
 *
 * @package TelegramBotApi\Types
 */
class PassportData
{
    /**
     * @var EncryptedPassportElement[]
     */
    private array $data;

    /**
     * @var EncryptedCredentials
     */
    private EncryptedCredentials $credentials;

    /**
     * @return EncryptedPassportElement[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param EncryptedPassportElement[] $data
     *
     * @return PassportData
     */
    public function setData(array $data): PassportData
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return EncryptedCredentials
     */
    public function getCredentials(): EncryptedCredentials
    {
        return $this->credentials;
    }

    /**
     * @param EncryptedCredentials $credentials
     *
     * @return PassportData
     */
    public function setCredentials(EncryptedCredentials $credentials): PassportData
    {
        $this->credentials = $credentials;

        return $this;
    }
}
