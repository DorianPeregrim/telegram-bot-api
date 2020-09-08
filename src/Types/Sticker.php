<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class Sticker
 *
 * @package TelegramBotApi\Types
 */
class Sticker
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
     * @var bool
     */
    private bool $isAnimated;

    /**
     * @var PhotoSize
     */
    private ?PhotoSize $thumb = null;

    /**
     * @var string
     */
    private ?string $emoji = null;

    /**
     * @var string
     */
    private ?string $setName = null;

    /**
     * @var MaskPosition
     */
    private ?MaskPosition $maskPosition = null;

    /**
     * @var int
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
     * @return Sticker
     */
    public function setFileId(string $fileId): Sticker
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
     * @return Sticker
     */
    public function setFileUniqueId(string $fileUniqueId): Sticker
    {
        $this->fileUniqueId = $fileUniqueId;

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
     * @return Sticker
     */
    public function setWidth(int $width): Sticker
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
     * @return Sticker
     */
    public function setHeight(int $height): Sticker
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAnimated(): bool
    {
        return $this->isAnimated;
    }

    /**
     * @param bool $isAnimated
     *
     * @return Sticker
     */
    public function setIsAnimated(bool $isAnimated): Sticker
    {
        $this->isAnimated = $isAnimated;

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
     * @return Sticker
     */
    public function setThumb(PhotoSize $thumb): Sticker
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * @param string $emoji
     *
     * @return Sticker
     */
    public function setEmoji(string $emoji): Sticker
    {
        $this->emoji = $emoji;

        return $this;
    }

    /**
     * @return string
     */
    public function getSetName(): string
    {
        return $this->setName;
    }

    /**
     * @param string $setName
     *
     * @return Sticker
     */
    public function setSetName(string $setName): Sticker
    {
        $this->setName = $setName;

        return $this;
    }

    /**
     * @return MaskPosition
     */
    public function getMaskPosition(): MaskPosition
    {
        return $this->maskPosition;
    }

    /**
     * @param MaskPosition $maskPosition
     *
     * @return Sticker
     */
    public function setMaskPosition(MaskPosition $maskPosition): Sticker
    {
        $this->maskPosition = $maskPosition;

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
     * @return Sticker
     */
    public function setFileSize(int $fileSize): Sticker
    {
        $this->fileSize = $fileSize;

        return $this;
    }
}
