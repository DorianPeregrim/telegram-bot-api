<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class MessageEntity
 *
 * @package TelegramBotApi\Types
 */
class MessageEntity
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $offset;

    /**
     * @var int
     */
    private $length;

    /**
     * @var string
     */
    private $url;

    /**
     * @var User
     */
    private $user;

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
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return MessageEntity
     */
    public function setUrl(string $url): MessageEntity
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     *
     * @return MessageEntity
     */
    public function setUser(User $user): MessageEntity
    {
        $this->user = $user;

        return $this;
    }
}