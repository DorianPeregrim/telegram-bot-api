<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class ChatPermissions
 *
 * @package TelegramBotApi\Types
 */
class ChatPermissions
{
    /**
     * @var bool
     */
    private bool $canSendMessages;

    /**
     * @var bool
     */
    private bool $canSendMediaMessages;

    /**
     * @var bool
     */
    private bool $canSendPolls;

    /**
     * @var bool
     */
    private bool $canSendOtherMessages;

    /**
     * @var bool
     */
    private bool $canAddWebPagePreviews;

    /**
     * @var bool
     */
    private bool $canChangeInfo;

    /**
     * @var bool
     */
    private bool $canInviteUsers;

    /**
     * @var bool
     */
    private bool $canPinMessages;

    /**
     * @return mixed
     */
    public function getCanSendMessages()
    {
        return $this->canSendMessages;
    }

    /**
     * @param mixed $canSendMessages
     *
     * @return ChatPermissions
     */
    public function setCanSendMessages($canSendMessages)
    {
        $this->canSendMessages = $canSendMessages;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanSendMediaMessages()
    {
        return $this->canSendMediaMessages;
    }

    /**
     * @param mixed $canSendMediaMessages
     *
     * @return ChatPermissions
     */
    public function setCanSendMediaMessages($canSendMediaMessages)
    {
        $this->canSendMediaMessages = $canSendMediaMessages;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanSendPolls()
    {
        return $this->canSendPolls;
    }

    /**
     * @param mixed $canSendPolls
     *
     * @return ChatPermissions
     */
    public function setCanSendPolls($canSendPolls)
    {
        $this->canSendPolls = $canSendPolls;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanSendOtherMessages()
    {
        return $this->canSendOtherMessages;
    }

    /**
     * @param mixed $canSendOtherMessages
     *
     * @return ChatPermissions
     */
    public function setCanSendOtherMessages($canSendOtherMessages)
    {
        $this->canSendOtherMessages = $canSendOtherMessages;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanAddWebPagePreviews()
    {
        return $this->canAddWebPagePreviews;
    }

    /**
     * @param mixed $canAddWebPagePreviews
     *
     * @return ChatPermissions
     */
    public function setCanAddWebPagePreviews($canAddWebPagePreviews)
    {
        $this->canAddWebPagePreviews = $canAddWebPagePreviews;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanChangeInfo()
    {
        return $this->canChangeInfo;
    }

    /**
     * @param mixed $canChangeInfo
     *
     * @return ChatPermissions
     */
    public function setCanChangeInfo($canChangeInfo)
    {
        $this->canChangeInfo = $canChangeInfo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanInviteUsers()
    {
        return $this->canInviteUsers;
    }

    /**
     * @param mixed $canInviteUsers
     *
     * @return ChatPermissions
     */
    public function setCanInviteUsers($canInviteUsers)
    {
        $this->canInviteUsers = $canInviteUsers;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanPinMessages()
    {
        return $this->canPinMessages;
    }

    /**
     * @param mixed $canPinMessages
     *
     * @return ChatPermissions
     */
    public function setCanPinMessages($canPinMessages)
    {
        $this->canPinMessages = $canPinMessages;

        return $this;
    }
}
