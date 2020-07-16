<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

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
     * @var User
     */
    private User $from;

    /**
     * @var int
     */
    private int $date;

    /**
     * @var Chat
     */
    private Chat $chat;

    /**
     * @var User
     */
    private User $forwardFrom;

    /**
     * @var Chat
     */
    private Chat $forwardFromChat;

    /**
     * @var int
     */
    private int $forwardFromMessageId;

    /**
     * @var string
     */
    private string $forwardSignature;

    /**
     * @var string
     */
    private string $forwardSenderName;

    /**
     * @var int
     */
    private int $forwardDate;

    /**
     * @var Message
     */
    private Message $replyToMessage;

    /**
     * @var int
     */
    private int $editDate;

    /**
     * @var string
     */
    private string $mediaGroupId;

    /**
     * @var string
     */
    private string $authorSignature;

    /**
     * @var string
     */
    private string $text;

    /**
     * @var MessageEntity[]
     */
    private array $entities;

    /**
     * @var MessageEntity[]
     */
    private array $captionEntities;

    /**
     * @var Audio
     */
    private Audio $audio;

    /**
     * @var Document
     */
    private Document $document;

    /**
     * @var Animation
     */
    private Animation $animation;

    /**
     * @var Game
     */
    private Game $game;

    /**
     * @var PhotoSize[]
     */
    private array $photo;

    /**
     * @var Sticker
     */
    private Sticker $sticker;

    /**
     * @var Video
     */
    private Video $video;

    /**
     * @var Voice
     */
    private Voice $voice;

    /**
     * @var VideoNote
     */
    private VideoNote $videoNote;

    /**
     * @var string
     */
    private string $caption;

    /**
     * @var Contact
     */
    private Contact $contact;

    /**
     * @var Location
     */
    private Location $location;

    /**
     * @var Venue
     */
    private Venue $venue;

    /**
     * @var Poll
     */
    private Poll $poll;

    /**
     * @var User[]
     */
    private array $newChatMembers;

    /**
     * @var User
     */
    private User $leftChatMember;

    /**
     * @var string
     */
    private string $newChatTitle;

    /**
     * @var PhotoSize[]
     */
    private array $newChatPhoto;

    /**
     * @var bool
     */
    private bool $deleteChatPhoto;

    /**
     * @var bool
     */
    private bool $groupChatCreated;

    /**
     * @var bool
     */
    private bool $supergroupChatCreated;

    /**
     * @var bool
     */
    private bool $channelChatCreated;

    /**
     * @var int
     */
    private int $migrateToChatId;

    /**
     * @var int
     */
    private int $migrateFromChatId;

    /**
     * @var Message
     */
    private Message $pinnedMessage;

    /**
     * @var Invoice
     */
    private Invoice $invoice;

    /**
     * @var SuccessfulPayment
     */
    private SuccessfulPayment $successfulPayment;

    /**
     * @var string
     */
    private string $connectedWebsite;

    /**
     * @var PassportData
     */
    private PassportData $passportData;

    /**
     * @var InlineKeyboardMarkup
     */
    private InlineKeyboardMarkup $replyMarkup;

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
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @param User $from
     *
     * @return Message
     */
    public function setFrom(User $from): Message
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @param int $date
     *
     * @return Message
     */
    public function setDate(int $date): Message
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
     * @return User
     */
    public function getForwardFrom(): User
    {
        return $this->forwardFrom;
    }

    /**
     * @param User $forwardFrom
     *
     * @return Message
     */
    public function setForwardFrom(User $forwardFrom): Message
    {
        $this->forwardFrom = $forwardFrom;

        return $this;
    }

    /**
     * @return Chat
     */
    public function getForwardFromChat(): Chat
    {
        return $this->forwardFromChat;
    }

    /**
     * @param Chat $forwardFromChat
     *
     * @return Message
     */
    public function setForwardFromChat(Chat $forwardFromChat): Message
    {
        $this->forwardFromChat = $forwardFromChat;

        return $this;
    }

    /**
     * @return int
     */
    public function getForwardFromMessageId(): int
    {
        return $this->forwardFromMessageId;
    }

    /**
     * @param int $forwardFromMessageId
     *
     * @return Message
     */
    public function setForwardFromMessageId(int $forwardFromMessageId): Message
    {
        $this->forwardFromMessageId = $forwardFromMessageId;

        return $this;
    }

    /**
     * @return string
     */
    public function getForwardSignature(): string
    {
        return $this->forwardSignature;
    }

    /**
     * @param string $forwardSignature
     *
     * @return Message
     */
    public function setForwardSignature(string $forwardSignature): Message
    {
        $this->forwardSignature = $forwardSignature;

        return $this;
    }

    /**
     * @return string
     */
    public function getForwardSenderName(): string
    {
        return $this->forwardSenderName;
    }

    /**
     * @param string $forwardSenderName
     *
     * @return Message
     */
    public function setForwardSenderName(string $forwardSenderName): Message
    {
        $this->forwardSenderName = $forwardSenderName;

        return $this;
    }

    /**
     * @return int
     */
    public function getForwardDate(): int
    {
        return $this->forwardDate;
    }

    /**
     * @param int $forwardDate
     *
     * @return Message
     */
    public function setForwardDate(int $forwardDate): Message
    {
        $this->forwardDate = $forwardDate;

        return $this;
    }

    /**
     * @return Message
     */
    public function getReplyToMessage(): Message
    {
        return $this->replyToMessage;
    }

    /**
     * @param Message $replyToMessage
     *
     * @return Message
     */
    public function setReplyToMessage(Message $replyToMessage): Message
    {
        $this->replyToMessage = $replyToMessage;

        return $this;
    }

    /**
     * @return int
     */
    public function getEditDate(): int
    {
        return $this->editDate;
    }

    /**
     * @param int $editDate
     *
     * @return Message
     */
    public function setEditDate(int $editDate): Message
    {
        $this->editDate = $editDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getMediaGroupId(): string
    {
        return $this->mediaGroupId;
    }

    /**
     * @param string $mediaGroupId
     *
     * @return Message
     */
    public function setMediaGroupId(string $mediaGroupId): Message
    {
        $this->mediaGroupId = $mediaGroupId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorSignature(): string
    {
        return $this->authorSignature;
    }

    /**
     * @param string $authorSignature
     *
     * @return Message
     */
    public function setAuthorSignature(string $authorSignature): Message
    {
        $this->authorSignature = $authorSignature;

        return $this;
    }

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
     * @return Message
     */
    public function setText(string $text): Message
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return MessageEntity[]
     */
    public function getEntities(): array
    {
        return $this->entities;
    }

    /**
     * @param MessageEntity[] $entities
     *
     * @return Message
     */
    public function setEntities(array $entities): Message
    {
        $this->entities = $entities;

        return $this;
    }

    /**
     * @return MessageEntity[]
     */
    public function getCaptionEntities(): array
    {
        return $this->captionEntities;
    }

    /**
     * @param MessageEntity[] $captionEntities
     *
     * @return Message
     */
    public function setCaptionEntities(array $captionEntities): Message
    {
        $this->captionEntities = $captionEntities;

        return $this;
    }

    /**
     * @return Audio
     */
    public function getAudio(): Audio
    {
        return $this->audio;
    }

    /**
     * @param Audio $audio
     *
     * @return Message
     */
    public function setAudio(Audio $audio): Message
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * @return Document
     */
    public function getDocument(): Document
    {
        return $this->document;
    }

    /**
     * @param Document $document
     *
     * @return Message
     */
    public function setDocument(Document $document): Message
    {
        $this->document = $document;

        return $this;
    }

    /**
     * @return Animation
     */
    public function getAnimation(): Animation
    {
        return $this->animation;
    }

    /**
     * @param Animation $animation
     *
     * @return Message
     */
    public function setAnimation(Animation $animation): Message
    {
        $this->animation = $animation;

        return $this;
    }

    /**
     * @return Game
     */
    public function getGame(): Game
    {
        return $this->game;
    }

    /**
     * @param Game $game
     *
     * @return Message
     */
    public function setGame(Game $game): Message
    {
        $this->game = $game;

        return $this;
    }

    /**
     * @return PhotoSize[]
     */
    public function getPhoto(): array
    {
        return $this->photo;
    }

    /**
     * @param PhotoSize[] $photo
     *
     * @return Message
     */
    public function setPhoto(array $photo): Message
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return Sticker
     */
    public function getSticker(): Sticker
    {
        return $this->sticker;
    }

    /**
     * @param Sticker $sticker
     *
     * @return Message
     */
    public function setSticker(Sticker $sticker): Message
    {
        $this->sticker = $sticker;

        return $this;
    }

    /**
     * @return Video
     */
    public function getVideo(): Video
    {
        return $this->video;
    }

    /**
     * @param Video $video
     *
     * @return Message
     */
    public function setVideo(Video $video): Message
    {
        $this->video = $video;

        return $this;
    }

    /**
     * @return Voice
     */
    public function getVoice(): Voice
    {
        return $this->voice;
    }

    /**
     * @param Voice $voice
     *
     * @return Message
     */
    public function setVoice(Voice $voice): Message
    {
        $this->voice = $voice;

        return $this;
    }

    /**
     * @return VideoNote
     */
    public function getVideoNote(): VideoNote
    {
        return $this->videoNote;
    }

    /**
     * @param VideoNote $videoNote
     *
     * @return Message
     */
    public function setVideoNote(VideoNote $videoNote): Message
    {
        $this->videoNote = $videoNote;

        return $this;
    }

    /**
     * @return string
     */
    public function getCaption(): string
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     *
     * @return Message
     */
    public function setCaption(string $caption): Message
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact(): Contact
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     *
     * @return Message
     */
    public function setContact(Contact $contact): Message
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     *
     * @return Message
     */
    public function setLocation(Location $location): Message
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return Venue
     */
    public function getVenue(): Venue
    {
        return $this->venue;
    }

    /**
     * @param Venue $venue
     *
     * @return Message
     */
    public function setVenue(Venue $venue): Message
    {
        $this->venue = $venue;

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
     * @return Message
     */
    public function setPoll(Poll $poll): Message
    {
        $this->poll = $poll;

        return $this;
    }

    /**
     * @return User[]
     */
    public function getNewChatMembers(): array
    {
        return $this->newChatMembers;
    }

    /**
     * @param User[] $newChatMembers
     *
     * @return Message
     */
    public function setNewChatMembers(array $newChatMembers): Message
    {
        $this->newChatMembers = $newChatMembers;

        return $this;
    }

    /**
     * @return User
     */
    public function getLeftChatMember(): User
    {
        return $this->leftChatMember;
    }

    /**
     * @param User $leftChatMember
     *
     * @return Message
     */
    public function setLeftChatMember(User $leftChatMember): Message
    {
        $this->leftChatMember = $leftChatMember;

        return $this;
    }

    /**
     * @return string
     */
    public function getNewChatTitle(): string
    {
        return $this->newChatTitle;
    }

    /**
     * @param string $newChatTitle
     *
     * @return Message
     */
    public function setNewChatTitle(string $newChatTitle): Message
    {
        $this->newChatTitle = $newChatTitle;

        return $this;
    }

    /**
     * @return PhotoSize[]
     */
    public function getNewChatPhoto(): array
    {
        return $this->newChatPhoto;
    }

    /**
     * @param PhotoSize[] $newChatPhoto
     *
     * @return Message
     */
    public function setNewChatPhoto(array $newChatPhoto): Message
    {
        $this->newChatPhoto = $newChatPhoto;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDeleteChatPhoto(): bool
    {
        return $this->deleteChatPhoto;
    }

    /**
     * @param bool $deleteChatPhoto
     *
     * @return Message
     */
    public function setDeleteChatPhoto(bool $deleteChatPhoto): Message
    {
        $this->deleteChatPhoto = $deleteChatPhoto;

        return $this;
    }

    /**
     * @return bool
     */
    public function isGroupChatCreated(): bool
    {
        return $this->groupChatCreated;
    }

    /**
     * @param bool $groupChatCreated
     *
     * @return Message
     */
    public function setGroupChatCreated(bool $groupChatCreated): Message
    {
        $this->groupChatCreated = $groupChatCreated;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSupergroupChatCreated(): bool
    {
        return $this->supergroupChatCreated;
    }

    /**
     * @param bool $supergroupChatCreated
     *
     * @return Message
     */
    public function setSupergroupChatCreated(bool $supergroupChatCreated): Message
    {
        $this->supergroupChatCreated = $supergroupChatCreated;

        return $this;
    }

    /**
     * @return bool
     */
    public function isChannelChatCreated(): bool
    {
        return $this->channelChatCreated;
    }

    /**
     * @param bool $channelChatCreated
     *
     * @return Message
     */
    public function setChannelChatCreated(bool $channelChatCreated): Message
    {
        $this->channelChatCreated = $channelChatCreated;

        return $this;
    }

    /**
     * @return int
     */
    public function getMigrateToChatId(): int
    {
        return $this->migrateToChatId;
    }

    /**
     * @param int $migrateToChatId
     *
     * @return Message
     */
    public function setMigrateToChatId(int $migrateToChatId): Message
    {
        $this->migrateToChatId = $migrateToChatId;

        return $this;
    }

    /**
     * @return int
     */
    public function getMigrateFromChatId(): int
    {
        return $this->migrateFromChatId;
    }

    /**
     * @param int $migrateFromChatId
     *
     * @return Message
     */
    public function setMigrateFromChatId(int $migrateFromChatId): Message
    {
        $this->migrateFromChatId = $migrateFromChatId;

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
     * @return Message
     */
    public function setPinnedMessage(Message $pinnedMessage): Message
    {
        $this->pinnedMessage = $pinnedMessage;

        return $this;
    }

    /**
     * @return Invoice
     */
    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    /**
     * @param Invoice $invoice
     *
     * @return Message
     */
    public function setInvoice(Invoice $invoice): Message
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * @return SuccessfulPayment
     */
    public function getSuccessfulPayment(): SuccessfulPayment
    {
        return $this->successfulPayment;
    }

    /**
     * @param SuccessfulPayment $successfulPayment
     *
     * @return Message
     */
    public function setSuccessfulPayment(SuccessfulPayment $successfulPayment): Message
    {
        $this->successfulPayment = $successfulPayment;

        return $this;
    }

    /**
     * @return string
     */
    public function getConnectedWebsite(): string
    {
        return $this->connectedWebsite;
    }

    /**
     * @param string $connectedWebsite
     *
     * @return Message
     */
    public function setConnectedWebsite(string $connectedWebsite): Message
    {
        $this->connectedWebsite = $connectedWebsite;

        return $this;
    }

    /**
     * @return PassportData
     */
    public function getPassportData(): PassportData
    {
        return $this->passportData;
    }

    /**
     * @param PassportData $passportData
     *
     * @return Message
     */
    public function setPassportData(PassportData $passportData): Message
    {
        $this->passportData = $passportData;

        return $this;
    }

    /**
     * @return InlineKeyboardMarkup
     */
    public function getReplyMarkup(): InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }

    /**
     * @param InlineKeyboardMarkup $replyMarkup
     *
     * @return Message
     */
    public function setReplyMarkup(InlineKeyboardMarkup $replyMarkup): Message
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }
}