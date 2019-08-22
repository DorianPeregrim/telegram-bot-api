<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class EncryptedCredentials
 *
 * @package TelegramBotApi\Types
 */
class EncryptedCredentials
{
    /**
     * @var string
     */
    private $data;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var string
     */
    private $secret;

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param string $data
     *
     * @return EncryptedCredentials
     */
    public function setData(string $data): EncryptedCredentials
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     *
     * @return EncryptedCredentials
     */
    public function setHash(string $hash): EncryptedCredentials
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     *
     * @return EncryptedCredentials
     */
    public function setSecret(string $secret): EncryptedCredentials
    {
        $this->secret = $secret;

        return $this;
    }
}
