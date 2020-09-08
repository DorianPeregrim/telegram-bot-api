<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class Dice
 *
 * @package TelegramBotApi\Types
 */
class Dice
{
    /**
     * @var string
     */
    private string $emoji;

    /**
     * @var int
     */
    private int $value;

    /**
     * @return string
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * @param string $emoji
     *
     * @return Dice
     */
    public function setEmoji(string $emoji): Dice
    {
        $this->emoji = $emoji;

        return $this;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     *
     * @return Dice
     */
    public function setValue(int $value): Dice
    {
        $this->value = $value;

        return $this;
    }
}
