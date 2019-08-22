<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class SuccessfulPayment
 *
 * @package TelegramBotApi\Types
 */
class SuccessfulPayment
{
    /**
     * @var string
     */
    private $currency;

    /**
     * @var int
     */
    private $totalAmount;

    /**
     * @var string
     */
    private $invoicePayload;

    /**
     * @var string
     */
    private $shippingOptionId;

    /**
     * @var OrderInfo
     */
    private $orderInfo;

    /**
     * @var string
     */
    private $telegramPaymentChargeId;

    /**
     * @var string
     */
    private $providerPaymentChargeId;

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
     * @return SuccessfulPayment
     */
    public function setCurrency(string $currency): SuccessfulPayment
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
     * @return SuccessfulPayment
     */
    public function setTotalAmount(int $totalAmount): SuccessfulPayment
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    /**
     * @param string $invoicePayload
     *
     * @return SuccessfulPayment
     */
    public function setInvoicePayload(string $invoicePayload): SuccessfulPayment
    {
        $this->invoicePayload = $invoicePayload;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingOptionId(): string
    {
        return $this->shippingOptionId;
    }

    /**
     * @param string $shippingOptionId
     *
     * @return SuccessfulPayment
     */
    public function setShippingOptionId(string $shippingOptionId): SuccessfulPayment
    {
        $this->shippingOptionId = $shippingOptionId;

        return $this;
    }

    /**
     * @return OrderInfo
     */
    public function getOrderInfo(): OrderInfo
    {
        return $this->orderInfo;
    }

    /**
     * @param OrderInfo $orderInfo
     *
     * @return SuccessfulPayment
     */
    public function setOrderInfo(OrderInfo $orderInfo): SuccessfulPayment
    {
        $this->orderInfo = $orderInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegramPaymentChargeId;
    }

    /**
     * @param string $telegramPaymentChargeId
     *
     * @return SuccessfulPayment
     */
    public function setTelegramPaymentChargeId(string $telegramPaymentChargeId): SuccessfulPayment
    {
        $this->telegramPaymentChargeId = $telegramPaymentChargeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getProviderPaymentChargeId(): string
    {
        return $this->providerPaymentChargeId;
    }

    /**
     * @param string $providerPaymentChargeId
     *
     * @return SuccessfulPayment
     */
    public function setProviderPaymentChargeId(string $providerPaymentChargeId): SuccessfulPayment
    {
        $this->providerPaymentChargeId = $providerPaymentChargeId;

        return $this;
    }
}
