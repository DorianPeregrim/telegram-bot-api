<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class Sticker
 *
 * @package TelegramBotApi\Types
 */
class Sticker
{
    /**
     * @var
     */
    private $fileId;

    /**
     * @var
     */
    private $width;

    /**
     * @var
     */
    private $height;

    /**
     * @var bool
     */
    private $isAnimated;

    /**
     * @var PhotoSize
     */
    private $thumb;

    /**
     * @var
     */
    private $emoji;

    /**
     * @var
     */
    private $setName;

    /**
     * @var MaskPosition
     */
    private $maskPosition;

    /**
     * @var
     */
    private $fileSize;

    /**
     * @return mixed
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * @param mixed $fileId
     *
     * @return Sticker
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     *
     * @return Sticker
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     *
     * @return Sticker
     */
    public function setHeight($height)
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
     * @return mixed
     */
    public function getEmoji()
    {
        return $this->emoji;
    }

    /**
     * @param mixed $emoji
     *
     * @return Sticker
     */
    public function setEmoji($emoji)
    {
        $this->emoji = $emoji;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSetName()
    {
        return $this->setName;
    }

    /**
     * @param mixed $setName
     *
     * @return Sticker
     */
    public function setSetName($setName)
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
     * @return mixed
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param mixed $fileSize
     *
     * @return Sticker
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;

        return $this;
    }
}