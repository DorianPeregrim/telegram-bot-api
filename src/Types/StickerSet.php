<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class StickerSet
 *
 * @package TelegramBotApi\Types
 */
class StickerSet
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $title;

    /**
     * @var bool
     */
    private $isAnimated;

    /**
     * @var bool
     */
    private $containsMasks;

    /**
     * @var Sticker[]
     */
    private $stickers;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return StickerSet
     */
    public function setName(string $name): StickerSet
    {
        $this->name = $name;

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
     * @return StickerSet
     */
    public function setTitle(string $title): StickerSet
    {
        $this->title = $title;

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
     * @return StickerSet
     */
    public function setIsAnimated(bool $isAnimated): StickerSet
    {
        $this->isAnimated = $isAnimated;

        return $this;
    }

    /**
     * @return bool
     */
    public function isContainsMasks(): bool
    {
        return $this->containsMasks;
    }

    /**
     * @param bool $containsMasks
     *
     * @return StickerSet
     */
    public function setContainsMasks(bool $containsMasks): StickerSet
    {
        $this->containsMasks = $containsMasks;

        return $this;
    }

    /**
     * @return Sticker[]
     */
    public function getStickers(): array
    {
        return $this->stickers;
    }

    /**
     * @param Sticker[] $stickers
     *
     * @return StickerSet
     */
    public function setStickers(array $stickers): StickerSet
    {
        $this->stickers = $stickers;

        return $this;
    }
}
