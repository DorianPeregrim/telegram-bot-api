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
    private Location $location;

    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $address;

    /**
     * @var string
     */
    private string $foursquareId;

    /**
     * @var string
     */
    private string $foursquareType;

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     *
     * @return Venue
     */
    public function setLocation(Location $location): Venue
    {
        $this->location = $location;

        return $this;
    }

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
     * @return Venue
     */
    public function setTitle(string $title): Venue
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     *
     * @return Venue
     */
    public function setAddress(string $address): Venue
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getFoursquareId(): string
    {
        return $this->foursquareId;
    }

    /**
     * @param string $foursquareId
     *
     * @return Venue
     */
    public function setFoursquareId(string $foursquareId): Venue
    {
        $this->foursquareId = $foursquareId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFoursquareType(): string
    {
        return $this->foursquareType;
    }

    /**
     * @param string $foursquareType
     *
     * @return Venue
     */
    public function setFoursquareType(string $foursquareType): Venue
    {
        $this->foursquareType = $foursquareType;

        return $this;
    }
}
