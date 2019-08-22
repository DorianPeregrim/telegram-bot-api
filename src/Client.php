<?php declare(strict_types=1);

namespace TelegramBotApi;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use JsonMapper;
use stdClass;
use TelegramBotApi\Exceptions\TelegramException;
use TelegramBotApi\Types\Message;
use TelegramBotApi\Types\StickerSet;
use TelegramBotApi\Types\Update;
use TelegramBotApi\Types\User;

/**
 * Class Client
 *
 * @package TelegramBotApi
 */
class Client
{
    const API_URL_TMPL = 'https://api.telegram.org/bot%s/';

    const PARSE_MODE_MARKDOWN = 'Markdown';
    const PARSE_MODE_HTML     = 'HTML';

    /**
     * @var string
     */
    private $apiUrl;

    /**
     * @var \GuzzleHttp\Client
     */
    private $httpClient;

    /**
     * @var JsonMapper
     */
    private $jsonMapper;

    /**
     * Client constructor.
     *
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->apiUrl = sprintf(self::API_URL_TMPL, $token);
        $this->httpClient = new \GuzzleHttp\Client(['base_uri' => $this->apiUrl]);
        $this->jsonMapper = new JsonMapper();
    }

    /**
     * @return User
     * @throws TelegramException
     */
    public function getMe(): User
    {
        $response = $this->makeRequest('getMe');

        return $this->mapJsonToObject($response->result, User::class);
    }

    /**
     * @param array $params
     *
     * @return Message
     * @throws TelegramException
     */
    public function sendMessage(array $params): Message
    {
        $response = $this->makeRequest('sendMessage', $params);

        return $this->mapJsonToObject($response->result, Message::class);
    }

    /**
     * @param array $params
     *
     * @return array
     * @throws TelegramException
     */
    public function getUpdates(array $params = []): array
    {
        $response = $this->makeRequest('getUpdates', $params);

        return $this->mapJsonToArrayObjects($response->result, Update::class);
    }

    /**
     * @param array $params
     *
     * @return bool
     * @throws TelegramException
     */
    public function setWebhook(array $params): bool
    {
        $response = $this->makeRequest('setWebhook', $params);

        return $response->result;
    }

    /**
     * @return bool
     * @throws TelegramException
     */
    public function deleteWebhook(): bool
    {
        $response = $this->makeRequest('deleteWebhook');

        return $response->result;
    }

    /**
     * @param $name
     *
     * @return StickerSet
     * @throws TelegramException
     */
    public function getStickerSet(string $name): StickerSet
    {
        $response = $this->makeRequest('getStickerSet', ['name' => $name]);

        return $this->mapJsonToObject($response->result, StickerSet::class);
    }

    /**
     * @param array $params
     *
     * @return mixed
     * @throws TelegramException
     */
    public function sendSticker(array $params)
    {
        $response = $this->makeRequest('sendSticker', $params);

        return $this->mapJsonToObject($response->result, Message::class);
    }

    /**
     * @param string $method
     * @param array  $params
     *
     * @return stdClass
     * @throws TelegramException
     */
    private function makeRequest(string $method, array $params = []): stdClass
    {
        $options = [];
        if (!empty($params)) {
            $options['form_params'] = $params;
        }

        try {
            $jsonResponse = $this->httpClient->request('POST', $method, $options)->getBody()->getContents();
        } catch (Exception | GuzzleException $e) {
            throw new TelegramException($e->getMessage(), $e->getCode(), $e->getPrevious());
        }

        $response = json_decode($jsonResponse);

        return $response;
    }

    /**
     * @param object|array $response
     * @param string       $class
     *
     * @return mixed
     * @throws TelegramException
     */
    private function mapJsonToObject(object $response, string $class)
    {
        try {
            $mapped = $this->jsonMapper->map($response, new $class());
        } catch (Exception $e) {
            throw new TelegramException($e->getMessage(), $e->getCode(), $e->getPrevious());
        }

        return $mapped;
    }

    /**
     * @param object|array $response
     * @param string       $class
     *
     * @return mixed
     * @throws TelegramException
     */
    private function mapJsonToArrayObjects(array $response, string $class)
    {
        try {
            $mapped = $this->jsonMapper->mapArray($response, [], $class);
        } catch (Exception $e) {
            throw new TelegramException($e->getMessage(), $e->getCode(), $e->getPrevious());
        }

        return $mapped;
    }
}
