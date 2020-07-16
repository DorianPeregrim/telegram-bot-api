<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class PollOption
 *
 * @package TelegramBotApi\Types
 */
class PollOption
{
    /**
     * @var string
     */
    private string $text;

    /**
     * @var int
     */
    private int $voterCount;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return PollOption
     */
    public function setText(string $text): PollOption
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return int
     */
    public function getVoterCount(): int
    {
        return $this->voterCount;
    }

    /**
     * @param int $voterCount
     *
     * @return PollOption
     */
    public function setVoterCount(int $voterCount): PollOption
    {
        $this->voterCount = $voterCount;

        return $this;
    }
}
