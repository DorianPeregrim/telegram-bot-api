<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class ForceReply
 *
 * @package TelegramBotApi\Types
 */
class ForceReply
{
    /**
     * @var bool
     */
    private bool $forceReply;

    /**
     * @var bool|null
     */
    private ?bool $selective = null;

    /**
     * @return bool
     */
    public function isForceReply(): bool
    {
        return $this->forceReply;
    }

    /**
     * @param bool $forceReply
     *
     * @return ForceReply
     */
    public function setForceReply(bool $forceReply): ForceReply
    {
        $this->forceReply = $forceReply;

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
     * @return ForceReply
     */
    public function setSelective(?bool $selective): ForceReply
    {
        $this->selective = $selective;

        return $this;
    }
}
