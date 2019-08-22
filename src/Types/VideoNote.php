<?php declare(strict_types=1);

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
    private $fileId;

    /**
     * @var int
     */
    private $length;

    /**
     * @var int
     */
    private $duration;

    /**
     * @var PhotoSize
     */
    private $thumb;

    /**
     * @var int
     */
    private $fileSize;

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
     * @return PhotoSize
     */
    public function getThumb(): PhotoSize
    {
        return $this->thumb;
    }

    /**
     * @param PhotoSize $thumb
     *
     * @return VideoNote
     */
    public function setThumb(PhotoSize $thumb): VideoNote
    {
        $this->thumb = $thumb;

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
     * @return VideoNote
     */
    public function setFileSize(int $fileSize): VideoNote
    {
        $this->fileSize = $fileSize;

        return $this;
    }
}