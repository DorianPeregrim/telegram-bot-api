<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class Update
 *
 * @package TelegramBotApi\Types
 */
class Update
{
    /**
     * @var int
     */
    private $updateId;

    /**
     * @var Message
     */
    private $message;

    /**
     * @var Message
     */
    private $editedMessage;

    /**
     * @var Message
     */
    private $channelPost;

    /**
     * @var Message
     */
    private $editedChannelPost;

    /**
     * @var InlineQuery
     */
    private $inlineQuery;

    /**
     * @var ChosenInlineResult
     */
    private $chosenInlineResult;

    /**
     * @var CallbackQuery
     */
    private $callbackQuery;

    /**
     * @var ShippingQuery
     */
    private $shippingQuery;

    /**
     * @var PreCheckoutQuery
     */
    private $preCheckoutQuery;

    /**
     * @var Poll
     */
    private $poll;

    /**
     * @return int
     */
    public function getUpdateId(): int
    {
        return $this->updateId;
    }

    /**
     * @param int $updateId
     *
     * @return Update
     */
    public function setUpdateId(int $updateId): Update
    {
        $this->updateId = $updateId;

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
     * @return Update
     */
    public function setMessage(Message $message): Update
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return Message
     */
    public function getEditedMessage(): Message
    {
        return $this->editedMessage;
    }

    /**
     * @param Message $editedMessage
     *
     * @return Update
     */
    public function setEditedMessage(Message $editedMessage): Update
    {
        $this->editedMessage = $editedMessage;

        return $this;
    }

    /**
     * @return Message
     */
    public function getChannelPost(): Message
    {
        return $this->channelPost;
    }

    /**
     * @param Message $channelPost
     *
     * @return Update
     */
    public function setChannelPost(Message $channelPost): Update
    {
        $this->channelPost = $channelPost;

        return $this;
    }

    /**
     * @return Message
     */
    public function getEditedChannelPost(): Message
    {
        return $this->editedChannelPost;
    }

    /**
     * @param Message $editedChannelPost
     *
     * @return Update
     */
    public function setEditedChannelPost(Message $editedChannelPost): Update
    {
        $this->editedChannelPost = $editedChannelPost;

        return $this;
    }

    /**
     * @return InlineQuery
     */
    public function getInlineQuery(): InlineQuery
    {
        return $this->inlineQuery;
    }

    /**
     * @param InlineQuery $inlineQuery
     *
     * @return Update
     */
    public function setInlineQuery(InlineQuery $inlineQuery): Update
    {
        $this->inlineQuery = $inlineQuery;

        return $this;
    }

    /**
     * @return ChosenInlineResult
     */
    public function getChosenInlineResult(): ChosenInlineResult
    {
        return $this->chosenInlineResult;
    }

    /**
     * @param ChosenInlineResult $chosenInlineResult
     *
     * @return Update
     */
    public function setChosenInlineResult(ChosenInlineResult $chosenInlineResult): Update
    {
        $this->chosenInlineResult = $chosenInlineResult;

        return $this;
    }

    /**
     * @return CallbackQuery
     */
    public function getCallbackQuery(): CallbackQuery
    {
        return $this->callbackQuery;
    }

    /**
     * @param CallbackQuery $callbackQuery
     *
     * @return Update
     */
    public function setCallbackQuery(CallbackQuery $callbackQuery): Update
    {
        $this->callbackQuery = $callbackQuery;

        return $this;
    }

    /**
     * @return ShippingQuery
     */
    public function getShippingQuery(): ShippingQuery
    {
        return $this->shippingQuery;
    }

    /**
     * @param ShippingQuery $shippingQuery
     *
     * @return Update
     */
    public function setShippingQuery(ShippingQuery $shippingQuery): Update
    {
        $this->shippingQuery = $shippingQuery;

        return $this;
    }

    /**
     * @return PreCheckoutQuery
     */
    public function getPreCheckoutQuery(): PreCheckoutQuery
    {
        return $this->preCheckoutQuery;
    }

    /**
     * @param PreCheckoutQuery $preCheckoutQuery
     *
     * @return Update
     */
    public function setPreCheckoutQuery(PreCheckoutQuery $preCheckoutQuery): Update
    {
        $this->preCheckoutQuery = $preCheckoutQuery;

        return $this;
    }

    /**
     * @return Poll
     */
    public function getPoll(): Poll
    {
        return $this->poll;
    }

    /**
     * @param Poll $poll
     *
     * @return Update
     */
    public function setPoll(Poll $poll): Update
    {
        $this->poll = $poll;

        return $this;
    }
}
