<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class ChosenInlineResult
 *
 * @package TelegramBotApi\Types
 */
class ChosenInlineResult
{
    /**
     * @var string
     */
    private string $resultId;

    /**
     * @var User
     */
    private User $from;

    /**
     * @var Location|null
     */
    private ?Location $location = null;

    /**
     * @var string|null
     */
    private ?string $inlineMessageId = null;

    /**
     * @var string
     */
    private string $query;

    /**
     * @return string
     */
    public function getResultId(): string
    {
        return $this->resultId;
    }

    /**
     * @param string $resultId
     *
     * @return ChosenInlineResult
     */
    public function setResultId(string $resultId): ChosenInlineResult
    {
        $this->resultId = $resultId;

        return $this;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @param User $from
     *
     * @return ChosenInlineResult
     */
    public function setFrom(User $from): ChosenInlineResult
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * @param Location|null $location
     *
     * @return ChosenInlineResult
     */
    public function setLocation(?Location $location): ChosenInlineResult
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInlineMessageId(): ?string
    {
        return $this->inlineMessageId;
    }

    /**
     * @param string|null $inlineMessageId
     *
     * @return ChosenInlineResult
     */
    public function setInlineMessageId(?string $inlineMessageId): ChosenInlineResult
    {
        $this->inlineMessageId = $inlineMessageId;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * @param string $query
     *
     * @return ChosenInlineResult
     */
    public function setQuery(string $query): ChosenInlineResult
    {
        $this->query = $query;

        return $this;
    }
}
