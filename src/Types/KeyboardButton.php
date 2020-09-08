<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class KeyboardButton
 *
 * @package TelegramBotApi\Types
 */
class KeyboardButton
{
    /**
     * @var string
     */
    private string $text;

    /**
     * @var bool|null
     */
    private ?bool $requestContact = null;

    /**
     * @var bool|null
     */
    private ?bool $requestLocation = null;

    /**
     * @var KeyboardButtonPollType|null
     */
    private ?KeyboardButtonPollType $requestPoll = null;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return KeyboardButton
     */
    public function setText(string $text): KeyboardButton
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getRequestContact(): ?bool
    {
        return $this->requestContact;
    }

    /**
     * @param bool|null $requestContact
     *
     * @return KeyboardButton
     */
    public function setRequestContact(?bool $requestContact): KeyboardButton
    {
        $this->requestContact = $requestContact;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getRequestLocation(): ?bool
    {
        return $this->requestLocation;
    }

    /**
     * @param bool|null $requestLocation
     *
     * @return KeyboardButton
     */
    public function setRequestLocation(?bool $requestLocation): KeyboardButton
    {
        $this->requestLocation = $requestLocation;

        return $this;
    }

    /**
     * @return KeyboardButtonPollType|null
     */
    public function getRequestPoll(): ?KeyboardButtonPollType
    {
        return $this->requestPoll;
    }

    /**
     * @param KeyboardButtonPollType|null $requestPoll
     *
     * @return KeyboardButton
     */
    public function setRequestPoll(?KeyboardButtonPollType $requestPoll): KeyboardButton
    {
        $this->requestPoll = $requestPoll;

        return $this;
    }
}
