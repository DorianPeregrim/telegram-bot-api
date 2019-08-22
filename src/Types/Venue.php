<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class Venue
 *
 * @package TelegramBotApi\Types
 */
class Venue
{
    /**
     * @var Location
     */
    private $location;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $foursquare_id;

    /**
     * @var string
     */
    private $foursquare_type;
}
