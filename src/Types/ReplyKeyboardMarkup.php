<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class ReplyKeyboardMarkup
 *
 * @package TelegramBotApi\Types
 */
class ReplyKeyboardMarkup
{
    /**
     * @var KeyboardButton[][]
     */
    private array $keyboard;

    /**
     * @var bool|null
     */
    private ?bool $resizeKeyboard = null;

    /**
     * @var bool|null
     */
    private ?bool $oneTimeKeyboard = null;

    /**
     * @var bool|null
     */
    private ?bool $selective = null;

    /**
     * @return KeyboardButton[][]
     */
    public function getKeyboard(): array
    {
        return $this->keyboard;
    }

    /**
     * @param KeyboardButton[][] $keyboard
     *
     * @return ReplyKeyboardMarkup
     */
    public function setKeyboard(array $keyboard): ReplyKeyboardMarkup
    {
        $this->keyboard = $keyboard;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getResizeKeyboard(): ?bool
    {
        return $this->resizeKeyboard;
    }

    /**
     * @param bool|null $resizeKeyboard
     *
     * @return ReplyKeyboardMarkup
     */
    public function setResizeKeyboard(?bool $resizeKeyboard): ReplyKeyboardMarkup
    {
        $this->resizeKeyboard = $resizeKeyboard;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getOneTimeKeyboard(): ?bool
    {
        return $this->oneTimeKeyboard;
    }

    /**
     * @param bool|null $oneTimeKeyboard
     *
     * @return ReplyKeyboardMarkup
     */
    public function setOneTimeKeyboard(?bool $oneTimeKeyboard): ReplyKeyboardMarkup
    {
        $this->oneTimeKeyboard = $oneTimeKeyboard;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSelective(): ?bool
    {
        return $this->selective;
    }

    /**
     * @param bool|null $selective
     *
     * @return ReplyKeyboardMarkup
     */
    public function setSelective(?bool $selective): ReplyKeyboardMarkup
    {
        $this->selective = $selective;

        return $this;
    }
}
