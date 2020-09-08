<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class KeyboardButtonPollType
 *
 * @package TelegramBotApi\Types
 */
class KeyboardButtonPollType
{
    /**
     * @var string|null
     */
    private ?string $type = null;

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return KeyboardButtonPollType
     */
    public function setType(?string $type): KeyboardButtonPollType
    {
        $this->type = $type;

        return $this;
    }
}
