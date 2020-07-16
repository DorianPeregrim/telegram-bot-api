<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class Voice
 *
 * @package TelegramBotApi\Types
 */
class Voice
{
    /**
     * @var string
     */
    private string $fileId;

    /**
     * @var int
     */
    private int $duration;

    /**
     * @var string
     */
    private string $mimeType;

    /**
     * @var int
     */
    private int $fileSize;

    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * @param string $fileId
     *
     * @return Voice
     */
    public function setFileId(string $fileId): Voice
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     *
     * @return Voice
     */
    public function setDuration(int $duration): Voice
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     *
     * @return Voice
     */
    public function setMimeType(string $mimeType): Voice
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    /**
     * @param int $fileSize
     *
     * @return Voice
     */
    public function setFileSize(int $fileSize): Voice
    {
        $this->fileSize = $fileSize;

        return $this;
    }
}