<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class Game
 *
 * @package TelegramBotApi\Types
 */
class Game
{
    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var PhotoSize[]
     */
    private array $photo;

    /**
     * @var string|null
     */
    private ?string $text = null;

    /**
     * @var MessageEntity[]|null
     */
    private ?array $textEntities = null;

    /**
     * @var Animation|null
     */
    private ?Animation $animation = null;

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
     * @return Game
     */
    public function setTitle(string $title): Game
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Game
     */
    public function setDescription(string $description): Game
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return PhotoSize[]
     */
    public function getPhoto(): array
    {
        return $this->photo;
    }

    /**
     * @param PhotoSize[] $photo
     *
     * @return Game
     */
    public function setPhoto(array $photo): Game
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string|null $text
     *
     * @return Game
     */
    public function setText(?string $text): Game
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getTextEntities(): ?array
    {
        return $this->textEntities;
    }

    /**
     * @param MessageEntity[]|null $textEntities
     *
     * @return Game
     */
    public function setTextEntities(?array $textEntities): Game
    {
        $this->textEntities = $textEntities;

        return $this;
    }

    /**
     * @return Animation|null
     */
    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    /**
     * @param Animation|null $animation
     *
     * @return Game
     */
    public function setAnimation(?Animation $animation): Game
    {
        $this->animation = $animation;

        return $this;
    }
}
