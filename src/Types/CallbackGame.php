<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class CallbackGame
 *
 * @package TelegramBotApi\Types
 */
class CallbackGame
{
    /**
     * @var int
     */
    private int $userId;

    /**
     * @var int
     */
    private int $score;

    /**
     * @var bool|null
     */
    private ?bool $force = null;

    /**
     * @var bool|null
     */
    private ?bool $disableEditMessage = null;

    /**
     * @var int|null
     */
    private ?int $chatId = null;

    /**
     * @var int|null
     */
    private ?int $messageId = null;

    /**
     * @var string|null
     */
    private ?string $inlineMessageId = null;

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     *
     * @return CallbackGame
     */
    public function setUserId(int $userId): CallbackGame
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * @param int $score
     *
     * @return CallbackGame
     */
    public function setScore(int $score): CallbackGame
    {
        $this->score = $score;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getForce(): ?bool
    {
        return $this->force;
    }

    /**
     * @param bool|null $force
     *
     * @return CallbackGame
     */
    public function setForce(?bool $force): CallbackGame
    {
        $this->force = $force;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDisableEditMessage(): ?bool
    {
        return $this->disableEditMessage;
    }

    /**
     * @param bool|null $disableEditMessage
     *
     * @return CallbackGame
     */
    public function setDisableEditMessage(?bool $disableEditMessage): CallbackGame
    {
        $this->disableEditMessage = $disableEditMessage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getChatId(): ?int
    {
        return $this->chatId;
    }

    /**
     * @param int|null $chatId
     *
     * @return CallbackGame
     */
    public function setChatId(?int $chatId): CallbackGame
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMessageId(): ?int
    {
        return $this->messageId;
    }

    /**
     * @param int|null $messageId
     *
     * @return CallbackGame
     */
    public function setMessageId(?int $messageId): CallbackGame
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInlineMessageId(): ?string
    {
        return $this->inlineMessageId;
    }

    /**
     * @param string|null $inlineMessageId
     *
     * @return CallbackGame
     */
    public function setInlineMessageId(?string $inlineMessageId): CallbackGame
    {
        $this->inlineMessageId = $inlineMessageId;

        return $this;
    }
}
