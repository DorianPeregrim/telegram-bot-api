<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class PhotoSize
 *
 * @package TelegramBotApi\Types
 */
class PhotoSize
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
     * @return PhotoSize
     */
    public function setFileId(string $fileId): PhotoSize
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
     * @return PhotoSize
     */
    public function setWidth(int $width): PhotoSize
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
     * @return PhotoSize
     */
    public function setHeight(int $height): PhotoSize
    {
        $this->height = $height;

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
     * @return PhotoSize
     */
    public function setFileSize(int $fileSize): PhotoSize
    {
        $this->fileSize = $fileSize;

        return $this;
    }
}
