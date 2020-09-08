<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

use Carbon\Carbon;

/**
 * Class Message
 *
 * @package TelegramBotApi\Types
 */
class Message
{
    /**
     * @var int
     */
    private int $messageId;

    /**
     * @var User|null
     */
    private ?User $from = null;

    /**
     * @var Carbon
     */
    private Carbon $date;

    /**
     * @var Chat
     */
    private Chat $chat;

    /**
     * @var User|null
     */
    private ?User $forwardFrom = null;

    /**
     * @var Chat|null
     */
    private ?Chat $forwardFromChat = null;

    /**
     * @var int|null
     */
    private ?int $forwardFromMessageId = null;

    /**
     * @var string|null
     */
    private ?string $forwardSignature = null;

    /**
     * @var string|null
     */
    private ?string $forwardSenderName = null;

    /**
     * @var Carbon|null
     */
    private ?Carbon $forwardDate = null;

    /**
     * @var Message|null
     */
    private ?Message $replyToMessage = null;

    /**
     * @var User|null
     */
    private ?User $viaBot = null;

    /**
     * @var Carbon|null
     */
    private ?Carbon $editDate = null;

    /**
     * @var string|null
     */
    private ?string $mediaGroupId = null;

    /**
     * @var string|null
     */
    private ?string $authorSignature = null;

    /**
     * @var string|null
     */
    private ?string $text = null;

    /**
     * @var MessageEntity[]|null
     */
    private ?array $entities = null;

    /**
     * @var MessageEntity[]|null
     */
    private ?array $captionEntities = null;

    /**
     * @var Audio|null
     */
    private ?Audio $audio = null;

    /**
     * @var Document|null
     */
    private ?Document $document = null;

    /**
     * @var Animation|null
     */
    private ?Animation $animation = null;

    /**
     * @var Dice|null
     */
    private ?Dice $dice = null;

    /**
     * @var Game|null
     */
    private ?Game $game = null;

    /**
     * @var PhotoSize[]|null
     */
    private ?array $photo = null;

    /**
     * @var Sticker|null
     */
    private ?Sticker $sticker = null;

    /**
     * @var Video|null
     */
    private ?Video $video = null;

    /**
     * @var Voice|null
     */
    private ?Voice $voice = null;

    /**
     * @var VideoNote|null
     */
    private ?VideoNote $videoNote = null;

    /**
     * @var string|null
     */
    private ?string $caption = null;

    /**
     * @var Contact|null
     */
    private ?Contact $contact = null;

    /**
     * @var Location|null
     */
    private ?Location $location = null;

    /**
     * @var Venue|null
     */
    private ?Venue $venue = null;

    /**
     * @var Poll|null
     */
    private ?Poll $poll = null;

    /**
     * @var User[]|null
     */
    private ?array $newChatMembers = null;

    /**
     * @var User|null
     */
    private ?User $leftChatMember = null;

    /**
     * @var string|null
     */
    private ?string $newChatTitle = null;

    /**
     * @var PhotoSize[]|null
     */
    private ?array $newChatPhoto = null;

    /**
     * @var bool|null
     */
    private ?bool $deleteChatPhoto = null;

    /**
     * @var bool|null
     */
    private ?bool $groupChatCreated = null;

    /**
     * @var bool|null
     */
    private ?bool $supergroupChatCreated = null;

    /**
     * @var bool|null
     */
    private ?bool $channelChatCreated = null;

    /**
     * @var int|null
     */
    private ?int $migrateToChatId = null;

    /**
     * @var int|null
     */
    private ?int $migrateFromChatId = null;

    /**
     * @var Message|null
     */
    private ?Message $pinnedMessage = null;

    /**
     * @var Invoice|null
     */
    private ?Invoice $invoice = null;

    /**
     * @var SuccessfulPayment|null
     */
    private ?SuccessfulPayment $successfulPayment = null;

    /**
     * @var string|null
     */
    private ?string $connectedWebsite = null;

    /**
     * @var PassportData|null
     */
    private ?PassportData $passportData = null;

    /**
     * @var InlineKeyboardMarkup|null
     */
    private ?InlineKeyboardMarkup $replyMarkup = null;

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
     * @return Message
     */
    public function setMessageId(int $messageId): Message
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * @return User|null
     */
    public function getFrom(): ?User
    {
        return $this->from;
    }

    /**
     * @param User|null $from
     *
     * @return Message
     */
    public function setFrom(?User $from): Message
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return Carbon
     */
    public function getDate(): Carbon
    {
        return $this->date;
    }

    /**
     * @param Carbon $date
     *
     * @return Message
     */
    public function setDate(Carbon $date): Message
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @param Chat $chat
     *
     * @return Message
     */
    public function setChat(Chat $chat): Message
    {
        $this->chat = $chat;

        return $this;
    }

    /**
     * @return User|null
     */
    public function getForwardFrom(): ?User
    {
        return $this->forwardFrom;
    }

    /**
     * @param User|null $forwardFrom
     *
     * @return Message
     */
    public function setForwardFrom(?User $forwardFrom): Message
    {
        $this->forwardFrom = $forwardFrom;

        return $this;
    }

    /**
     * @return Chat|null
     */
    public function getForwardFromChat(): ?Chat
    {
        return $this->forwardFromChat;
    }

    /**
     * @param Chat|null $forwardFromChat
     *
     * @return Message
     */
    public function setForwardFromChat(?Chat $forwardFromChat): Message
    {
        $this->forwardFromChat = $forwardFromChat;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getForwardFromMessageId(): ?int
    {
        return $this->forwardFromMessageId;
    }

    /**
     * @param int|null $forwardFromMessageId
     *
     * @return Message
     */
    public function setForwardFromMessageId(?int $forwardFromMessageId): Message
    {
        $this->forwardFromMessageId = $forwardFromMessageId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getForwardSignature(): ?string
    {
        return $this->forwardSignature;
    }

    /**
     * @param string|null $forwardSignature
     *
     * @return Message
     */
    public function setForwardSignature(?string $forwardSignature): Message
    {
        $this->forwardSignature = $forwardSignature;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getForwardSenderName(): ?string
    {
        return $this->forwardSenderName;
    }

    /**
     * @param string|null $forwardSenderName
     *
     * @return Message
     */
    public function setForwardSenderName(?string $forwardSenderName): Message
    {
        $this->forwardSenderName = $forwardSenderName;

        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function getForwardDate(): ?int
    {
        return $this->forwardDate;
    }

    /**
     * @param Carbon|null $forwardDate
     *
     * @return Message
     */
    public function setForwardDate(?Carbon $forwardDate): Message
    {
        $this->forwardDate = $forwardDate;

        return $this;
    }

    /**
     * @return Message|null
     */
    public function getReplyToMessage(): ?Message
    {
        return $this->replyToMessage;
    }

    /**
     * @param Message|null $replyToMessage
     *
     * @return Message
     */
    public function setReplyToMessage(?Message $replyToMessage): Message
    {
        $this->replyToMessage = $replyToMessage;

        return $this;
    }

    /**
     * @return User|null
     */
    public function getViaBot(): ?User
    {
        return $this->viaBot;
    }

    /**
     * @param User|null $viaBot
     *
     * @return Message
     */
    public function setViaBot(?User $viaBot): Message
    {
        $this->viaBot = $viaBot;

        return $this;
    }



    /**
     * @return Carbon|null
     */
    public function getEditDate(): ?Carbon
    {
        return $this->editDate;
    }

    /**
     * @param Carbon|null $editDate
     *
     * @return Message
     */
    public function setEditDate(?Carbon $editDate): Message
    {
        $this->editDate = $editDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMediaGroupId(): ?string
    {
        return $this->mediaGroupId;
    }

    /**
     * @param string|null $mediaGroupId
     *
     * @return Message
     */
    public function setMediaGroupId(?string $mediaGroupId): Message
    {
        $this->mediaGroupId = $mediaGroupId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorSignature(): ?string
    {
        return $this->authorSignature;
    }

    /**
     * @param string|null $authorSignature
     *
     * @return Message
     */
    public function setAuthorSignature(?string $authorSignature): Message
    {
        $this->authorSignature = $authorSignature;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string|null $text
     *
     * @return Message
     */
    public function setText(?string $text): Message
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }

    /**
     * @param MessageEntity[]|null $entities
     *
     * @return Message
     */
    public function setEntities(?array $entities): Message
    {
        $this->entities = $entities;

        return $this;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    /**
     * @param MessageEntity[]|null $captionEntities
     *
     * @return Message
     */
    public function setCaptionEntities(?array $captionEntities): Message
    {
        $this->captionEntities = $captionEntities;

        return $this;
    }

    /**
     * @return Audio|null
     */
    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    /**
     * @param Audio|null $audio
     *
     * @return Message
     */
    public function setAudio(?Audio $audio): Message
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * @return Document|null
     */
    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * @param Document|null $document
     *
     * @return Message
     */
    public function setDocument(?Document $document): Message
    {
        $this->document = $document;

        return $this;
    }

    /**
     * @return Animation|null
     */
    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    /**
     * @param Animation|null $animation
     *
     * @return Message
     */
    public function setAnimation(?Animation $animation): Message
    {
        $this->animation = $animation;

        return $this;
    }

    /**
     * @return Game|null
     */
    public function getGame(): ?Game
    {
        return $this->game;
    }

    /**
     * @param Game|null $game
     *
     * @return Message
     */
    public function setGame(?Game $game): Message
    {
        $this->game = $game;

        return $this;
    }

    /**
     * @return Dice|null
     */
    public function getDice(): ?Dice
    {
        return $this->dice;
    }

    /**
     * @param Dice|null $dice
     *
     * @return Message
     */
    public function setDice(?Dice $dice): Message
    {
        $this->dice = $dice;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getPhoto(): ?array
    {
        return $this->photo;
    }

    /**
     * @param array|null $photo
     *
     * @return Message
     */
    public function setPhoto(?array $photo): Message
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return Sticker|null
     */
    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    /**
     * @param Sticker|null $sticker
     *
     * @return Message
     */
    public function setSticker(?Sticker $sticker): Message
    {
        $this->sticker = $sticker;

        return $this;
    }

    /**
     * @return Video|null
     */
    public function getVideo(): ?Video
    {
        return $this->video;
    }

    /**
     * @param Video|null $video
     *
     * @return Message
     */
    public function setVideo(?Video $video): Message
    {
        $this->video = $video;

        return $this;
    }

    /**
     * @return Voice|null
     */
    public function getVoice(): ?Voice
    {
        return $this->voice;
    }

    /**
     * @param Voice|null $voice
     *
     * @return Message
     */
    public function setVoice(?Voice $voice): Message
    {
        $this->voice = $voice;

        return $this;
    }

    /**
     * @return VideoNote|null
     */
    public function getVideoNote(): ?VideoNote
    {
        return $this->videoNote;
    }

    /**
     * @param VideoNote|null $videoNote
     *
     * @return Message
     */
    public function setVideoNote(?VideoNote $videoNote): Message
    {
        $this->videoNote = $videoNote;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @param string|null $caption
     *
     * @return Message
     */
    public function setCaption(?string $caption): Message
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * @param Contact|null $contact
     *
     * @return Message
     */
    public function setContact(?Contact $contact): Message
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * @param Location|null $location
     *
     * @return Message
     */
    public function setLocation(?Location $location): Message
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return Venue|null
     */
    public function getVenue(): ?Venue
    {
        return $this->venue;
    }

    /**
     * @param Venue|null $venue
     *
     * @return Message
     */
    public function setVenue(?Venue $venue): Message
    {
        $this->venue = $venue;

        return $this;
    }

    /**
     * @return Poll|null
     */
    public function getPoll(): ?Poll
    {
        return $this->poll;
    }

    /**
     * @param Poll|null $poll
     *
     * @return Message
     */
    public function setPoll(?Poll $poll): Message
    {
        $this->poll = $poll;

        return $this;
    }

    /**
     * @return User[]|null
     */
    public function getNewChatMembers(): ?array
    {
        return $this->newChatMembers;
    }

    /**
     * @param User[]|null $newChatMembers
     *
     * @return Message
     */
    public function setNewChatMembers(?array $newChatMembers): Message
    {
        $this->newChatMembers = $newChatMembers;

        return $this;
    }

    /**
     * @return User|null
     */
    public function getLeftChatMember(): ?User
    {
        return $this->leftChatMember;
    }

    /**
     * @param User|null $leftChatMember
     *
     * @return Message
     */
    public function setLeftChatMember(?User $leftChatMember): Message
    {
        $this->leftChatMember = $leftChatMember;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNewChatTitle(): ?string
    {
        return $this->newChatTitle;
    }

    /**
     * @param string|null $newChatTitle
     *
     * @return Message
     */
    public function setNewChatTitle(?string $newChatTitle): Message
    {
        $this->newChatTitle = $newChatTitle;

        return $this;
    }

    /**
     * @return PhotoSize[]|null
     */
    public function getNewChatPhoto(): ?array
    {
        return $this->newChatPhoto;
    }

    /**
     * @param PhotoSize[]|null $newChatPhoto
     *
     * @return Message
     */
    public function setNewChatPhoto(?array $newChatPhoto): Message
    {
        $this->newChatPhoto = $newChatPhoto;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDeleteChatPhoto(): ?bool
    {
        return $this->deleteChatPhoto;
    }

    /**
     * @param bool|null $deleteChatPhoto
     *
     * @return Message
     */
    public function setDeleteChatPhoto(?bool $deleteChatPhoto): Message
    {
        $this->deleteChatPhoto = $deleteChatPhoto;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getGroupChatCreated(): ?bool
    {
        return $this->groupChatCreated;
    }

    /**
     * @param bool|null $groupChatCreated
     *
     * @return Message
     */
    public function setGroupChatCreated(?bool $groupChatCreated): Message
    {
        $this->groupChatCreated = $groupChatCreated;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSupergroupChatCreated(): ?bool
    {
        return $this->supergroupChatCreated;
    }

    /**
     * @param bool|null $supergroupChatCreated
     *
     * @return Message
     */
    public function setSupergroupChatCreated(?bool $supergroupChatCreated): Message
    {
        $this->supergroupChatCreated = $supergroupChatCreated;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getChannelChatCreated(): ?bool
    {
        return $this->channelChatCreated;
    }

    /**
     * @param bool|null $channelChatCreated
     *
     * @return Message
     */
    public function setChannelChatCreated(?bool $channelChatCreated): Message
    {
        $this->channelChatCreated = $channelChatCreated;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMigrateToChatId(): ?int
    {
        return $this->migrateToChatId;
    }

    /**
     * @param int|null $migrateToChatId
     *
     * @return Message
     */
    public function setMigrateToChatId(?int $migrateToChatId): Message
    {
        $this->migrateToChatId = $migrateToChatId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMigrateFromChatId(): ?int
    {
        return $this->migrateFromChatId;
    }

    /**
     * @param int|null $migrateFromChatId
     *
     * @return Message
     */
    public function setMigrateFromChatId(?int $migrateFromChatId): Message
    {
        $this->migrateFromChatId = $migrateFromChatId;

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
     * @return Message
     */
    public function setPinnedMessage(?Message $pinnedMessage): Message
    {
        $this->pinnedMessage = $pinnedMessage;

        return $this;
    }

    /**
     * @return Invoice|null
     */
    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    /**
     * @param Invoice|null $invoice
     *
     * @return Message
     */
    public function setInvoice(?Invoice $invoice): Message
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * @return SuccessfulPayment|null
     */
    public function getSuccessfulPayment(): ?SuccessfulPayment
    {
        return $this->successfulPayment;
    }

    /**
     * @param SuccessfulPayment|null $successfulPayment
     *
     * @return Message
     */
    public function setSuccessfulPayment(?SuccessfulPayment $successfulPayment): Message
    {
        $this->successfulPayment = $successfulPayment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getConnectedWebsite(): ?string
    {
        return $this->connectedWebsite;
    }

    /**
     * @param string|null $connectedWebsite
     *
     * @return Message
     */
    public function setConnectedWebsite(?string $connectedWebsite): Message
    {
        $this->connectedWebsite = $connectedWebsite;

        return $this;
    }

    /**
     * @return PassportData|null
     */
    public function getPassportData(): ?PassportData
    {
        return $this->passportData;
    }

    /**
     * @param PassportData|null $passportData
     *
     * @return Message
     */
    public function setPassportData(?PassportData $passportData): Message
    {
        $this->passportData = $passportData;

        return $this;
    }

    /**
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }

    /**
     * @param InlineKeyboardMarkup|null $replyMarkup
     *
     * @return Message
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): Message
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }
}
