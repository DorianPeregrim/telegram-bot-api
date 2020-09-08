<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class ChatPhoto
 *
 * @package TelegramBotApi\Types
 */
class ChatPhoto
{
    /**
     * @var string
     */
    private string $smallFileId;

    /**
     * @var string
     */
    private string $smallFileUniqueId;

    /**
     * @var string
     */
    private string $bigFileId;

    /**
     * @var string
     */
    private string $bigFileUniqueId;

    /**
     * @return string
     */
    public function getSmallFileId(): string
    {
        return $this->smallFileId;
    }

    /**
     * @param string $smallFileId
     *
     * @return ChatPhoto
     */
    public function setSmallFileId(string $smallFileId): ChatPhoto
    {
        $this->smallFileId = $smallFileId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSmallFileUniqueId(): string
    {
        return $this->smallFileUniqueId;
    }

    /**
     * @param string $smallFileUniqueId
     *
     * @return ChatPhoto
     */
    public function setSmallFileUniqueId(string $smallFileUniqueId): ChatPhoto
    {
        $this->smallFileUniqueId = $smallFileUniqueId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBigFileId(): string
    {
        return $this->bigFileId;
    }

    /**
     * @param string $bigFileId
     *
     * @return ChatPhoto
     */
    public function setBigFileId(string $bigFileId): ChatPhoto
    {
        $this->bigFileId = $bigFileId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBigFileUniqueId(): string
    {
        return $this->bigFileUniqueId;
    }

    /**
     * @param string $bigFileUniqueId
     *
     * @return ChatPhoto
     */
    public function setBigFileUniqueId(string $bigFileUniqueId): ChatPhoto
    {
        $this->bigFileUniqueId = $bigFileUniqueId;

        return $this;
    }
}
