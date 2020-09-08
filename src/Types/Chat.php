<?php

declare(strict_types=1);


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
     * @var string|null
     */
    private ?string $title = null;

    /**
     * @var string|null
     */
    private ?string $username = null;

    /**
     * @var string|null
     */
    private ?string $firstName = null;

    /**
     * @var string|null
     */
    private ?string $lastName = null;

    /**
     * @var ChatPhoto|null
     */
    private ?ChatPhoto $photo = null;

    /**
     * @var string|null
     */
    private ?string $description = null;

    /**
     * @var string|null
     */
    private ?string $inviteLink = null;

    /**
     * @var Message|null
     */
    private ?Message $pinnedMessage = null;

    /**
     * @var ChatPermissions|null
     */
    private ?ChatPermissions $permissions = null;

    /**
     * @var bool|null
     */
    private ?bool $slowModeDelay = null;

    /**
     * @var string|null
     */
    private ?string $stickerSetName = null;

    /**
     * @var bool|null
     */
    private ?bool $canSetStickerSet = null;

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
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     *
     * @return Chat
     */
    public function setTitle(?string $title): Chat
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string|null $username
     *
     * @return Chat
     */
    public function setUsername(?string $username): Chat
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     *
     * @return Chat
     */
    public function setFirstName(?string $firstName): Chat
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     *
     * @return Chat
     */
    public function setLastName(?string $lastName): Chat
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return ChatPhoto|null
     */
    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    /**
     * @param ChatPhoto|null $photo
     *
     * @return Chat
     */
    public function setPhoto(?ChatPhoto $photo): Chat
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return Chat
     */
    public function setDescription(?string $description): Chat
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInviteLink(): ?string
    {
        return $this->inviteLink;
    }

    /**
     * @param string|null $inviteLink
     *
     * @return Chat
     */
    public function setInviteLink(?string $inviteLink): Chat
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * @return Message|null
     */
    public function getPinnedMessage(): ?Message
    {
        return $this->pinnedMessage;
    }

    /**
     * @param Message|null $pinnedMessage
     *
     * @return Chat
     */
    public function setPinnedMessage(?Message $pinnedMessage): Chat
    {
        $this->pinnedMessage = $pinnedMessage;

        return $this;
    }

    /**
     * @return ChatPermissions|null
     */
    public function getPermissions(): ?ChatPermissions
    {
        return $this->permissions;
    }

    /**
     * @param ChatPermissions|null $permissions
     *
     * @return Chat
     */
    public function setPermissions(?ChatPermissions $permissions): Chat
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSlowModeDelay(): ?bool
    {
        return $this->slowModeDelay;
    }

    /**
     * @param bool|null $slowModeDelay
     *
     * @return Chat
     */
    public function setSlowModeDelay(?bool $slowModeDelay): Chat
    {
        $this->slowModeDelay = $slowModeDelay;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStickerSetName(): ?string
    {
        return $this->stickerSetName;
    }

    /**
     * @param string|null $stickerSetName
     *
     * @return Chat
     */
    public function setStickerSetName(?string $stickerSetName): Chat
    {
        $this->stickerSetName = $stickerSetName;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanSetStickerSet(): ?bool
    {
        return $this->canSetStickerSet;
    }

    /**
     * @param bool|null $canSetStickerSet
     *
     * @return Chat
     */
    public function setCanSetStickerSet(?bool $canSetStickerSet): Chat
    {
        $this->canSetStickerSet = $canSetStickerSet;

        return $this;
    }
}
