<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class InlineKeyboardMarkup
 *
 * @package TelegramBotApi\Types
 */
class InlineKeyboardMarkup
{
    /**
     * @var InlineKeyboardButton[][]
     */
    private array $inlineKeyboard;

    /**
     * @return InlineKeyboardButton[][]
     */
    public function getInlineKeyboard(): array
    {
        return $this->inlineKeyboard;
    }

    /**
     * @param InlineKeyboardButton[][] $inlineKeyboard
     *
     * @return InlineKeyboardMarkup
     */
    public function setInlineKeyboard(array $inlineKeyboard): InlineKeyboardMarkup
    {
        $this->inlineKeyboard = $inlineKeyboard;

        return $this;
    }
}
