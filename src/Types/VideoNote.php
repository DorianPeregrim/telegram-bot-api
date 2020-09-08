<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class VideoNote
 *
 * @package TelegramBotApi\Types
 */
class VideoNote
{
    /**
     * @var string
     */
    private string $fileId;

    /**
     * @var string
     */
    private string $fileUniqueId;

    /**
     * @var int
     */
    private int $length;

    /**
     * @var int
     */
    private int $duration;

    /**
     * @var PhotoSize|null
     */
    private ?PhotoSize $thumb = null;

    /**
     * @var int|null
     */
    private ?int $fileSize = null;

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
     * @return VideoNote
     */
    public function setFileId(string $fileId): VideoNote
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileUniqueId(): string
    {
        return $this->fileUniqueId;
    }

    /**
     * @param string $fileUniqueId
     *
     * @return VideoNote
     */
    public function setFileUniqueId(string $fileUniqueId): VideoNote
    {
        $this->fileUniqueId = $fileUniqueId;

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
     * @return VideoNote
     */
    public function setLength(int $length): VideoNote
    {
        $this->length = $length;

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
     * @return VideoNote
     */
    public function setDuration(int $duration): VideoNote
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return PhotoSize|null
     */
    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }

    /**
     * @param PhotoSize|null $thumb
     *
     * @return VideoNote
     */
    public function setThumb(?PhotoSize $thumb): VideoNote
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    /**
     * @param int|null $fileSize
     *
     * @return VideoNote
     */
    public function setFileSize(?int $fileSize): VideoNote
    {
        $this->fileSize = $fileSize;

        return $this;
    }
}
