<?php

namespace TelegramBotApi\Types;

class LabeledPrice
{
    /**
     * @var string
     */
    public string $label;

    /**
     * @var int
     */
    public int $amount;

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): LabeledPrice
    {
        $this->label = $label;

        return $this;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): LabeledPrice
    {
        $this->amount = $amount;

        return $this;
    }
}