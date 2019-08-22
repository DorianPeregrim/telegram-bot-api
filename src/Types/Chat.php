<?php declare(strict_types=1);


namespace TelegramBotApi\Types;


class Chat
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var ChatPhoto
     */
    private $photo;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $inviteLink;

    private $pinnedMessage;

    private $permissions;

    private $stickerSetName;

    private $canSetStickerSet;
}