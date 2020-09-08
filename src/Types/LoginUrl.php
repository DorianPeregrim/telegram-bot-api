<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class LoginUrl
 *
 * @package TelegramBotApi\Types
 */
class LoginUrl
{
    /**
     * @var string
     */
    private string $url;

    /**
     * @var string|null
     */
    private ?string $forwardText = null;

    /**
     * @var string|null
     */
    private ?string $botUsername = null;

    /**
     * @var bool|null
     */
    private ?bool $requestWriteAccess = null;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return LoginUrl
     */
    public function setUrl(string $url): LoginUrl
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getForwardText(): ?string
    {
        return $this->forwardText;
    }

    /**
     * @param string|null $forwardText
     *
     * @return LoginUrl
     */
    public function setForwardText(?string $forwardText): LoginUrl
    {
        $this->forwardText = $forwardText;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBotUsername(): ?string
    {
        return $this->botUsername;
    }

    /**
     * @param string|null $botUsername
     *
     * @return LoginUrl
     */
    public function setBotUsername(?string $botUsername): LoginUrl
    {
        $this->botUsername = $botUsername;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getRequestWriteAccess(): ?bool
    {
        return $this->requestWriteAccess;
    }

    /**
     * @param bool|null $requestWriteAccess
     *
     * @return LoginUrl
     */
    public function setRequestWriteAccess(?bool $requestWriteAccess): LoginUrl
    {
        $this->requestWriteAccess = $requestWriteAccess;

        return $this;
    }
}
