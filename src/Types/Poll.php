<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class Poll
 *
 * @package TelegramBotApi\Types
 */
class Poll
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $question;

    /**
     * @var PollOption[]
     */
    private $options;

    /**
     * @var bool
     */
    private $isClosed;

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
}
