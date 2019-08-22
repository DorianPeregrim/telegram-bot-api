<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class Invoice
 *
 * @package TelegramBotApi\Types
 */
class Invoice
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $startParameter;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var int
     */
    private $totalAmount;

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
     * @return Invoice
     */
    public function setTitle(string $title): Invoice
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
     * @return Invoice
     */
    public function setDescription(string $description): Invoice
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    /**
     * @param string $startParameter
     *
     * @return Invoice
     */
    public function setStartParameter(string $startParameter): Invoice
    {
        $this->startParameter = $startParameter;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return Invoice
     */
    public function setCurrency(string $currency): Invoice
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    /**
     * @param int $totalAmount
     *
     * @return Invoice
     */
    public function setTotalAmount(int $totalAmount): Invoice
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }
}
