<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class Video
 *
 * @package TelegramBotApi\Types
 */
class Video
{
    /**
     * @var string
     */
    private string $fileId;

    /**
     * @var int
     */
    private int $width;

    /**
     * @var int
     */
    private int $height;

    /**
     * @var int
     */
    private int $duration;

    /**
     * @var PhotoSize
     */
    private PhotoSize $thumb;

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
     * @return Video
     */
    public function setFileId(string $fileId): Video
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     *
     * @return Video
     */
    public function setWidth(int $width): Video
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     *
     * @return Video
     */
    public function setHeight(int $height): Video
    {
        $this->height = $height;

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
     * @return Video
     */
    public function setDuration(int $duration): Video
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
     * @return Video
     */
    public function setThumb(PhotoSize $thumb): Video
    {
        $this->thumb = $thumb;

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
     * @return Video
     */
    public function setMimeType(string $mimeType): Video
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
     * @return Video
     */
    public function setFileSize(int $fileSize): Video
    {
        $this->fileSize = $fileSize;

        return $this;
    }
}