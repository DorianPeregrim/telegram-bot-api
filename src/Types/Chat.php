<?php declare(strict_types=1);


namespace TelegramBotApi\Types;

/**
 * Class Chat
 *
 * @package TelegramBotApi\Types
 */
class Chat
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $type;

    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $username;

    /**
     * @var string
     */
    private string $firstName;

    /**
     * @var string
     */
    private string $lastName;

    /**
     * @var ChatPhoto
     */
    private ChatPhoto $photo;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var string
     */
    private string $inviteLink;

    /**
     * @var Message
     */
    private Message $pinnedMessage;

    /**
     * @var ChatPermissions
     */
    private ChatPermissions $permissions;

    /**
     * @var bool
     */
    private bool $slowModeDelay;

    /**
     * @var string
     */
    private string $stickerSetName;

    /**
     * @var bool
     */
    private bool $canSetStickerSet;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Chat
     */
    public function setId(int $id): Chat
    {
        $this->id = $id;

        return $this;
    }

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
     * @return Chat
     */
    public function setType(string $type): Chat
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Chat
     */
    public function setTitle(string $title): Chat
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return Chat
     */
    public function setUsername(string $username): Chat
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return Chat
     */
    public function setFirstName(string $firstName): Chat
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return Chat
     */
    public function setLastName(string $lastName): Chat
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return ChatPhoto
     */
    public function getPhoto(): ChatPhoto
    {
        return $this->photo;
    }

    /**
     * @param ChatPhoto $photo
     *
     * @return Chat
     */
    public function setPhoto(ChatPhoto $photo): Chat
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Chat
     */
    public function setDescription(string $description): Chat
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * @param string $inviteLink
     *
     * @return Chat
     */
    public function setInviteLink(string $inviteLink): Chat
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * @return Message
     */
    public function getPinnedMessage(): Message
    {
        return $this->pinnedMessage;
    }

    /**
     * @param Message $pinnedMessage
     *
     * @return Chat
     */
    public function setPinnedMessage(Message $pinnedMessage): Chat
    {
        $this->pinnedMessage = $pinnedMessage;

        return $this;
    }

    /**
     * @return ChatPermissions
     */
    public function getPermissions(): ChatPermissions
    {
        return $this->permissions;
    }

    /**
     * @param ChatPermissions $permissions
     *
     * @return Chat
     */
    public function setPermissions(ChatPermissions $permissions): Chat
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSlowModeDelay(): bool
    {
        return $this->slowModeDelay;
    }

    /**
     * @param bool $slowModeDelay
     *
     * @return Chat
     */
    public function setSlowModeDelay(bool $slowModeDelay): Chat
    {
        $this->slowModeDelay = $slowModeDelay;

        return $this;
    }

    /**
     * @return string
     */
    public function getStickerSetName(): string
    {
        return $this->stickerSetName;
    }

    /**
     * @param string $stickerSetName
     *
     * @return Chat
     */
    public function setStickerSetName(string $stickerSetName): Chat
    {
        $this->stickerSetName = $stickerSetName;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCanSetStickerSet(): bool
    {
        return $this->canSetStickerSet;
    }

    /**
     * @param bool $canSetStickerSet
     *
     * @return Chat
     */
    public function setCanSetStickerSet(bool $canSetStickerSet): Chat
    {
        $this->canSetStickerSet = $canSetStickerSet;

        return $this;
    }
}