<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class MessageEntity
 *
 * @package TelegramBotApi\Types
 */
class MessageEntity
{
    public const ENTITY_BOT_COMMAND   = 'bot_command';
    public const ENTITY_MENTION       = 'mention';
    public const ENTITY_HASHTAG       = 'hashtag';
    public const ENTITY_CASHTAG       = 'cashtag';
    public const ENTITY_URL           = 'url';
    public const ENTITY_EMAIL         = 'email';
    public const ENTITY_PHONE_NUMBER  = 'phone_number';
    public const ENTITY_BOLD          = 'bold';
    public const ENTITY_ITALIC        = 'italic';
    public const ENTITY_UNDERLINE     = 'underline';
    public const ENTITY_STRIKETHROUGH = 'strikethrough';
    public const ENTITY_CODE          = 'code';
    public const ENTITY_PRE           = 'pre';
    public const ENTITY_TEXT_LINK     = 'text_link';
    public const ENTITY_TEXT_MENTION  = 'text_mention';

    /**
     * @var string
     */
    private string $type;

    /**
     * @var int
     */
    private int $offset;

    /**
     * @var int
     */
    private int $length;

    /**
     * @var string|null
     */
    private ?string $url = null;

    /**
     * @var User|null
     */
    private ?User $user = null;

    /**
     * @var string|null
     */
    private ?string $language = null;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return MessageEntity
     */
    public function setType(string $type): MessageEntity
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     *
     * @return MessageEntity
     */
    public function setOffset(int $offset): MessageEntity
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     *
     * @return MessageEntity
     */
    public function setLength(int $length): MessageEntity
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     *
     * @return MessageEntity
     */
    public function setUrl(?string $url): MessageEntity
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null $user
     *
     * @return MessageEntity
     */
    public function setUser(?User $user): MessageEntity
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     *
     * @return MessageEntity
     */
    public function setLanguage(?string $language): MessageEntity
    {
        $this->language = $language;

        return $this;
    }
}
