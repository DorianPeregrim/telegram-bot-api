<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class OrderInfo
 *
 * @package TelegramBotApi\Types
 */
class OrderInfo
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $phoneNumber;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var ShippingAddress
     */
    private ShippingAddress $shippingAddress;

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
     * @return OrderInfo
     */
    public function setName(string $name): OrderInfo
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     *
     * @return OrderInfo
     */
    public function setPhoneNumber(string $phoneNumber): OrderInfo
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return OrderInfo
     */
    public function setEmail(string $email): OrderInfo
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return ShippingAddress
     */
    public function getShippingAddress(): ShippingAddress
    {
        return $this->shippingAddress;
    }

    /**
     * @param ShippingAddress $shippingAddress
     *
     * @return OrderInfo
     */
    public function setShippingAddress(ShippingAddress $shippingAddress): OrderInfo
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }
}
