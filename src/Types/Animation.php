<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class Animation
 *
 * @package TelegramBotApi\Types
 */
class Animation
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
    private string $fileName;

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
     * @return Animation
     */
    public function setFileId(string $fileId): Animation
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
     * @return Animation
     */
    public function setWidth(int $width): Animation
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
     * @return Animation
     */
    public function setHeight(int $height): Animation
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
     * @return Animation
     */
    public function setDuration(int $duration): Animation
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
     * @return Animation
     */
    public function setThumb(PhotoSize $thumb): Animation
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     *
     * @return Animation
     */
    public function setFileName(string $fileName): Animation
    {
        $this->fileName = $fileName;

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
     * @return Animation
     */
    public function setMimeType(string $mimeType): Animation
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
     * @return Animation
     */
    public function setFileSize(int $fileSize): Animation
    {
        $this->fileSize = $fileSize;

        return $this;
    }
}