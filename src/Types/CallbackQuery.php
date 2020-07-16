<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class CallbackQuery
 *
 * @package TelegramBotApi\Types
 */
class CallbackQuery
{
    /**
     * @var string
     */
    private string $id;

    /**
     * @var User
     */
    private User $from;

    /**
     * @var Message
     */
    private Message $message;

    /**
     * @var string
     */
    private string $inlineMessageId;

    /**
     * @var string
     */
    private string $chatInstance;

    /**
     * @var string
     */
    private string $data;

    /**
     * @var string
     */
    private string $gameShortName;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return CallbackQuery
     */
    public function setId(string $id): CallbackQuery
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @param User $from
     *
     * @return CallbackQuery
     */
    public function setFrom(User $from): CallbackQuery
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return Message
     */
    public function getMessage(): Message
    {
        return $this->message;
    }

    /**
     * @param Message $message
     *
     * @return CallbackQuery
     */
    public function setMessage(Message $message): CallbackQuery
    {
        $this->message = $message;

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
     * @return CallbackQuery
     */
    public function setInlineMessageId(string $inlineMessageId): CallbackQuery
    {
        $this->inlineMessageId = $inlineMessageId;

        return $this;
    }

    /**
     * @return string
     */
    public function getChatInstance(): string
    {
        return $this->chatInstance;
    }

    /**
     * @param string $chatInstance
     *
     * @return CallbackQuery
     */
    public function setChatInstance(string $chatInstance): CallbackQuery
    {
        $this->chatInstance = $chatInstance;

        return $this;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param string $data
     *
     * @return CallbackQuery
     */
    public function setData(string $data): CallbackQuery
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function getGameShortName(): string
    {
        return $this->gameShortName;
    }

    /**
     * @param string $gameShortName
     *
     * @return CallbackQuery
     */
    public function setGameShortName(string $gameShortName): CallbackQuery
    {
        $this->gameShortName = $gameShortName;

        return $this;
    }
}
