<?php declare(strict_types=1);

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
    private $keyboard;

    /**
     * @var bool
     */
    private $resizeKeyboard;

    /**
     * @var bool
     */
    private $oneTimeKeyboard;

    /**
     * @var bool
     */
    private $selective;

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
     * @return bool
     */
    public function isResizeKeyboard(): bool
    {
        return $this->resizeKeyboard;
    }

    /**
     * @param bool $resizeKeyboard
     *
     * @return ReplyKeyboardMarkup
     */
    public function setResizeKeyboard(bool $resizeKeyboard): ReplyKeyboardMarkup
    {
        $this->resizeKeyboard = $resizeKeyboard;

        return $this;
    }

    /**
     * @return bool
     */
    public function isOneTimeKeyboard(): bool
    {
        return $this->oneTimeKeyboard;
    }

    /**
     * @param bool $oneTimeKeyboard
     *
     * @return ReplyKeyboardMarkup
     */
    public function setOneTimeKeyboard(bool $oneTimeKeyboard): ReplyKeyboardMarkup
    {
        $this->oneTimeKeyboard = $oneTimeKeyboard;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSelective(): bool
    {
        return $this->selective;
    }

    /**
     * @param bool $selective
     *
     * @return ReplyKeyboardMarkup
     */
    public function setSelective(bool $selective): ReplyKeyboardMarkup
    {
        $this->selective = $selective;

        return $this;
    }
}
