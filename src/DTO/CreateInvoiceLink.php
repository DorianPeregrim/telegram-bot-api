<?php

namespace TelegramBotApi\DTO;

use TelegramBotApi\Types\LabeledPrice;

class CreateInvoiceLink
{
    public ?string $business_connectionId;    // String                   Optional    Unique identifier of the business connection on behalf of which the link will be created. For payments in Telegram Stars only.
    public string $title;                    // String                   Required    Product name, 1-32 characters
    public string $description;              // String                   Required    Product description, 1-255 characters
    public string $payload;                  // String                   Required    Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
    public ?string $provider_token = '';      // String                   Optional    Payment provider token, obtained via @BotFather. Pass an empty string for payments in Telegram Stars.
    public string $currency;               // String                   Required    Three-letter ISO 4217 currency code, see more on currencies. Pass “XTR” for payments in Telegram Stars.
    /** @var LabeledPrice[] */
    public array $prices;                    // Array of LabeledPrice    Required    Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in Telegram Stars.
    public ?int $subscription_period;         // Integer                  Optional    The number of seconds the subscription will be active for before the next payment. The currency must be set to “XTR” (Telegram Stars) if the parameter is used. Currently, it must always be 2592000 (30 days) if specified. Any number of subscriptions can be active for a given bot at the same time, including multiple concurrent subscriptions from the same user. Subscription price must no exceed 2500 Telegram Stars.
    public ?int $max_tip_amount;               // Integer                  Optional    The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in Telegram Stars.
    /** @var int[] */
    public array $suggested_tip_amounts;       // Array of Integer         Optional    A JSON-serialized array of suggested amounts of tips in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
    public ?string $provider_data;            // String                   Optional    JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
    public ?string $photo_url;                // String                   Optional    URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
    public ?int $photo_size;                  // Integer                  Optional    Photo size in bytes
    public ?int $photo_width;                 // Integer                  Optional    Photo width
    public ?int $photo_height;                // Integer                  Optional    Photo height
    public ?bool $need_name;                  // Boolean                  Optional    Pass True if you require the user's full name to complete the order. Ignored for payments in Telegram Stars.
    public ?bool $need_phone_number;           // Boolean                  Optional    Pass True if you require the user's phone number to complete the order. Ignored for payments in Telegram Stars.
    public ?bool $need_email;                 // Boolean                  Optional    Pass True if you require the user's email address to complete the order. Ignored for payments in Telegram Stars.
    public ?bool $need_shipping_address;       // Boolean                  Optional    Pass True if you require the user's shipping address to complete the order. Ignored for payments in Telegram Stars.
    public ?bool $send_phone_number_to_provider; // Boolean                  Optional    Pass True if the user's phone number should be sent to the provider. Ignored for payments in Telegram Stars.
    public ?bool $send_email_to_provider;       // Boolean                  Optional    Pass True if the user's email address should be sent to the provider. Ignored for payments in Telegram Stars.
    public ?bool $is_flexible;                // Boolean                  Optional    Pass True if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
}