<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class InlineKeyboardButton
 *
 * @package TelegramBotApi\Types
 */
class InlineKeyboardButton
{
    /**
     * @var string
     */
    private string $text;

    /**
     * @var string
     */
    private string $url;

    /**
     * @var LoginUrl
     */
    private LoginUrl $loginUrl;

    /**
     * @var string
     */
    private string $callbackData;

    /**
     * @var string
     */
    private string $switchInlineQuery;

    /**
     * @var string
     */
    private string $switchInlineQueryCurrentChat;

    /**
     * @var CallbackGame
     */
    private CallbackGame $callbackGame;

    /**
     * @var bool
     */
    private bool $pay;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return InlineKeyboardButton
     */
    public function setText(string $text): InlineKeyboardButton
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return InlineKeyboardButton
     */
    public function setUrl(string $url): InlineKeyboardButton
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return LoginUrl
     */
    public function getLoginUrl(): LoginUrl
    {
        return $this->loginUrl;
    }

    /**
     * @param LoginUrl $loginUrl
     *
     * @return InlineKeyboardButton
     */
    public function setLoginUrl(LoginUrl $loginUrl): InlineKeyboardButton
    {
        $this->loginUrl = $loginUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getCallbackData(): string
    {
        return $this->callbackData;
    }

    /**
     * @param string $callbackData
     *
     * @return InlineKeyboardButton
     */
    public function setCallbackData(string $callbackData): InlineKeyboardButton
    {
        $this->callbackData = $callbackData;

        return $this;
    }

    /**
     * @return string
     */
    public function getSwitchInlineQuery(): string
    {
        return $this->switchInlineQuery;
    }

    /**
     * @param string $switchInlineQuery
     *
     * @return InlineKeyboardButton
     */
    public function setSwitchInlineQuery(string $switchInlineQuery): InlineKeyboardButton
    {
        $this->switchInlineQuery = $switchInlineQuery;

        return $this;
    }

    /**
     * @return string
     */
    public function getSwitchInlineQueryCurrentChat(): string
    {
        return $this->switchInlineQueryCurrentChat;
    }

    /**
     * @param string $switchInlineQueryCurrentChat
     *
     * @return InlineKeyboardButton
     */
    public function setSwitchInlineQueryCurrentChat(string $switchInlineQueryCurrentChat): InlineKeyboardButton
    {
        $this->switchInlineQueryCurrentChat = $switchInlineQueryCurrentChat;

        return $this;
    }

    /**
     * @return CallbackGame
     */
    public function getCallbackGame(): CallbackGame
    {
        return $this->callbackGame;
    }

    /**
     * @param CallbackGame $callbackGame
     *
     * @return InlineKeyboardButton
     */
    public function setCallbackGame(CallbackGame $callbackGame): InlineKeyboardButton
    {
        $this->callbackGame = $callbackGame;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPay(): bool
    {
        return $this->pay;
    }

    /**
     * @param bool $pay
     *
     * @return InlineKeyboardButton
     */
    public function setPay(bool $pay): InlineKeyboardButton
    {
        $this->pay = $pay;

        return $this;
    }
}
