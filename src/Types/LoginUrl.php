<?php declare(strict_types=1);

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
     * @var string
     */
    private string $forwardText;

    /**
     * @var string
     */
    private string $botUsername;

    /**
     * @var bool
     */
    private bool $requestWriteAccess;

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
     * @return string
     */
    public function getForwardText(): string
    {
        return $this->forwardText;
    }

    /**
     * @param string $forwardText
     *
     * @return LoginUrl
     */
    public function setForwardText(string $forwardText): LoginUrl
    {
        $this->forwardText = $forwardText;

        return $this;
    }

    /**
     * @return string
     */
    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    /**
     * @param string $botUsername
     *
     * @return LoginUrl
     */
    public function setBotUsername(string $botUsername): LoginUrl
    {
        $this->botUsername = $botUsername;

        return $this;
    }

    /**
     * @return bool
     */
    public function isRequestWriteAccess(): bool
    {
        return $this->requestWriteAccess;
    }

    /**
     * @param bool $requestWriteAccess
     *
     * @return LoginUrl
     */
    public function setRequestWriteAccess(bool $requestWriteAccess): LoginUrl
    {
        $this->requestWriteAccess = $requestWriteAccess;

        return $this;
    }
}
