<?php declare(strict_types=1);

namespace TelegramBotApi\Types;

/**
 * Class InlineQuery
 *
 * @package TelegramBotApi\Types
 */
class InlineQuery
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var User
     */
    private $from;

    /**
     * @var Location
     */
    private $location;

    /**
     * @var string
     */
    private $query;

    /**
     * @var string
     */
    private $offset;
}
