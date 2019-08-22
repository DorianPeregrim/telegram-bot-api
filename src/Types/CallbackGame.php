<?php declare(strict_types=1);

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
    private $userId;

    /**
     * @var int
     */
    private $score;

    /**
     * @var bool
     */
    private $force;

    /**
     * @var bool
     */
    private $disableEditMessage;

    /**
     * @var int
     */
    private $chatId;

    /**
     * @var int
     */
    private $messageId;

    /**
     * @var string
     */
    private $inlineMessageId;

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
     * @return bool
     */
    public function isForce(): bool
    {
        return $this->force;
    }

    /**
     * @param bool $force
     *
     * @return CallbackGame
     */
    public function setForce(bool $force): CallbackGame
    {
        $this->force = $force;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDisableEditMessage(): bool
    {
        return $this->disableEditMessage;
    }

    /**
     * @param bool $disableEditMessage
     *
     * @return CallbackGame
     */
    public function setDisableEditMessage(bool $disableEditMessage): CallbackGame
    {
        $this->disableEditMessage = $disableEditMessage;

        return $this;
    }

    /**
     * @return int
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * @param int $chatId
     *
     * @return CallbackGame
     */
    public function setChatId(int $chatId): CallbackGame
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * @param int $messageId
     *
     * @return CallbackGame
     */
    public function setMessageId(int $messageId): CallbackGame
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * @return string
     */
    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    /**
     * @param string $inlineMessageId
     *
     * @return CallbackGame
     */
    public function setInlineMessageId(string $inlineMessageId): CallbackGame
    {
        $this->inlineMessageId = $inlineMessageId;

        return $this;
    }
}
