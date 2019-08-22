<?php declare(strict_types=1);

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
    private $text;

    /**
     * @var bool
     */
    private $requestContact;

    /**
     * @var bool
     */
    private $requestLocation;

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
     * @return bool
     */
    public function isRequestContact(): bool
    {
        return $this->requestContact;
    }

    /**
     * @param bool $requestContact
     *
     * @return KeyboardButton
     */
    public function setRequestContact(bool $requestContact): KeyboardButton
    {
        $this->requestContact = $requestContact;

        return $this;
    }

    /**
     * @return bool
     */
    public function isRequestLocation(): bool
    {
        return $this->requestLocation;
    }

    /**
     * @param bool $requestLocation
     *
     * @return KeyboardButton
     */
    public function setRequestLocation(bool $requestLocation): KeyboardButton
    {
        $this->requestLocation = $requestLocation;

        return $this;
    }
}
