<?php declare(strict_types=1);

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
    private $smallFileId;

    /**
     * @var string
     */
    private $bigFileId;

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
}