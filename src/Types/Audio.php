<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class Audio
 *
 * @package TelegramBotApi\Types
 */
class Audio
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
    private string $performer;

    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $mimeType;

    /**
     * @var int
     */
    private int $fileSize;

    /**
     * @var PhotoSize
     */
    private PhotoSize $thumb;

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
     * @return Audio
     */
    public function setFileId(string $fileId): Audio
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
     * @return Audio
     */
    public function setDuration(int $duration): Audio
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return string
     */
    public function getPerformer(): string
    {
        return $this->performer;
    }

    /**
     * @param string $performer
     *
     * @return Audio
     */
    public function setPerformer(string $performer): Audio
    {
        $this->performer = $performer;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Audio
     */
    public function setTitle(string $title): Audio
    {
        $this->title = $title;

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
     * @return Audio
     */
    public function setMimeType(string $mimeType): Audio
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
     * @return Audio
     */
    public function setFileSize(int $fileSize): Audio
    {
        $this->fileSize = $fileSize;

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
     * @return Audio
     */
    public function setThumb(PhotoSize $thumb): Audio
    {
        $this->thumb = $thumb;

        return $this;
    }
}