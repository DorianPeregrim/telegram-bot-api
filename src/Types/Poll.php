<?php

declare(strict_types=1);

namespace TelegramBotApi\Types;

use Carbon\Carbon;

/**
 * Class Poll
 *
 * @package TelegramBotApi\Types
 */
class Poll
{
    public const TYPE_REGULAR = 'regular';
    public const TYPE_QUIZ    = 'quiz';

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $question;

    /**
     * @var PollOption[]
     */
    private array $options;

    /**
     * @var int
     */
    private int $totalVoterCount;

    /**
     * @var bool
     */
    private bool $isClosed;

    /**
     * @var bool
     */
    private bool $isAnonymous;

    /**
     * @var string
     */
    private string $type;

    /**
     * @var bool
     */
    private bool $allowsMultipleAnswers;

    /**
     * @var int|null
     */
    private ?int $correctOptionId = null;

    /**
     * @var string|null
     */
    private ?string $explanation = null;

    /**
     * @var MessageEntity[]|null
     */
    private ?array $explanationEntities = null;

    /**
     * @var int|null
     */
    private ?int $openPeriod = null;

    /**
     * @var Carbon|null
     */
    private ?Carbon $closeDate = null;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Poll
     */
    public function setId(string $id): Poll
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * @param string $question
     *
     * @return Poll
     */
    public function setQuestion(string $question): Poll
    {
        $this->question = $question;

        return $this;
    }

    /**
     * @return PollOption[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param PollOption[] $options
     *
     * @return Poll
     */
    public function setOptions(array $options): Poll
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalVoterCount(): int
    {
        return $this->totalVoterCount;
    }

    /**
     * @param int $totalVoterCount
     *
     * @return Poll
     */
    public function setTotalVoterCount(int $totalVoterCount): Poll
    {
        $this->totalVoterCount = $totalVoterCount;

        return $this;
    }

    /**
     * @return bool
     */
    public function isClosed(): bool
    {
        return $this->isClosed;
    }

    /**
     * @param bool $isClosed
     *
     * @return Poll
     */
    public function setIsClosed(bool $isClosed): Poll
    {
        $this->isClosed = $isClosed;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    /**
     * @param bool $isAnonymous
     *
     * @return Poll
     */
    public function setIsAnonymous(bool $isAnonymous): Poll
    {
        $this->isAnonymous = $isAnonymous;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Poll
     */
    public function setType(string $type): Poll
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowsMultipleAnswers(): bool
    {
        return $this->allowsMultipleAnswers;
    }

    /**
     * @param bool $allowsMultipleAnswers
     *
     * @return Poll
     */
    public function setAllowsMultipleAnswers(bool $allowsMultipleAnswers): Poll
    {
        $this->allowsMultipleAnswers = $allowsMultipleAnswers;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCorrectOptionId(): ?int
    {
        return $this->correctOptionId;
    }

    /**
     * @param int|null $correctOptionId
     *
     * @return Poll
     */
    public function setCorrectOptionId(?int $correctOptionId): Poll
    {
        $this->correctOptionId = $correctOptionId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    /**
     * @param string|null $explanation
     *
     * @return Poll
     */
    public function setExplanation(?string $explanation): Poll
    {
        $this->explanation = $explanation;

        return $this;
    }

    /**
     * @return MessageEntity[]|null
     */
    public function getExplanationEntities(): ?array
    {
        return $this->explanationEntities;
    }

    /**
     * @param MessageEntity[]|null $explanationEntities
     *
     * @return Poll
     */
    public function setExplanationEntities(?array $explanationEntities): Poll
    {
        $this->explanationEntities = $explanationEntities;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getOpenPeriod(): ?int
    {
        return $this->openPeriod;
    }

    /**
     * @param int|null $openPeriod
     *
     * @return Poll
     */
    public function setOpenPeriod(?int $openPeriod): Poll
    {
        $this->openPeriod = $openPeriod;

        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function getCloseDate(): ?Carbon
    {
        return $this->closeDate;
    }

    /**
     * @param Carbon|null $closeDate
     *
     * @return Poll
     */
    public function setCloseDate(?Carbon $closeDate): Poll
    {
        $this->closeDate = $closeDate;

        return $this;
    }
}
