<?php

declare(strict_types=1);

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
     * @var string
     */
    private string $fileUniqueId;

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
     * @var PhotoSize|null
     */
    private ?PhotoSize $thumb = null;

    /**
     * @var string|null
     */
    private ?string $fileName = null;

    /**
     * @var string|null
     */
    private ?string $mimeType = null;

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
     * @return Animation
     */
    public function setFileId(string $fileId): Animation
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
     */
    public function setFileUniqueId(string $fileUniqueId): void
    {
        $this->fileUniqueId = $fileUniqueId;
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
     * @return PhotoSize|null
     */
    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }

    /**
     * @param PhotoSize|null $thumb
     *
     * @return Animation
     */
    public function setThumb(?PhotoSize $thumb): Animation
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param string|null $fileName
     *
     * @return Animation
     */
    public function setFileName(?string $fileName): Animation
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    /**
     * @param string|null $mimeType
     *
     * @return Animation
     */
    public function setMimeType(?string $mimeType): Animation
    {
        $this->mimeType = $mimeType;

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
     * @return Animation
     */
    public function setFileSize(?int $fileSize): Animation
    {
        $this->fileSize = $fileSize;

        return $this;
    }
}
