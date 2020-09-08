<?php

declare(strict_types=1);

namespace TelegramBotApi;

use BadMethodCallException;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use TelegramBotApi\Exceptions\TelegramException;

/**
 * Class Client
 *
 * @method array getUpdates(array $params)
 * @method array setWebhook(array $params)
 * @method array deleteWebhook()
 * @method array getWebhookInfo()
 * @method array getMe()
 * @method array sendMessage(array $params)
 * @method array forwardMessage(array $params)
 * @method array sendPhoto(array $params)
 * @method array sendAudio(array $params)
 * @method array sendDocument(array $params)
 * @method array sendVideo(array $params)
 * @method array sendAnimation(array $params)
 * @method array sendVoice(array $params)
 * @method array sendVideoNote(array $params)
 * @method array sendMediaGroup(array $params)
 * @method array sendLocation(array $params)
 * @method array editMessageLiveLocation(array $params)
 * @method array stopMessageLiveLocation(array $params)
 * @method array sendVenue(array $params)
 * @method array sendContact(array $params)
 * @method array sendPoll(array $params)
 * @method array sendDice(array $params)
 * @method array sendChatAction(array $params)
 * @method array getUserProfilePhotos(array $params)
 * @method array getFile(array $params)
 * @method array kickChatMember(array $params)
 * @method array unbanChatMember(array $params)
 * @method array restrictChatMember(array $params)
 * @method array promoteChatMember(array $params)
 * @method array setChatAdministratorCustomTitle(array $params)
 * @method array setChatPermissions(array $params)
 * @method array exportChatInviteLink(array $params)
 * @method array setChatPhoto(array $params)
 * @method array deleteChatPhoto(array $params)
 * @method array setChatTitle(array $params)
 * @method array setChatDescription(array $params)
 * @method array pinChatMessage(array $params)
 * @method array unpinChatMessage(array $params)
 * @method array leaveChat(array $params)
 * @method array getChat(array $params)
 * @method array getChatAdministrators(array $params)
 * @method array getChatMembersCount(array $params)
 * @method array getChatMember(array $params)
 * @method array setChatStickerSet(array $params)
 * @method array deleteChatStickerSet(array $params)
 * @method array answerCallbackQuery(array $params)
 * @method array setMyCommands(array $params)
 * @method array getMyCommands()
 * @method array editMessageText(array $params)
 * @method array editMessageCaption(array $params)
 * @method array editMessageMedia(array $params)
 * @method array editMessageReplyMarkup(array $params)
 * @method array stopPoll(array $params)
 * @method array deleteMessage(array $params)
 * @method array sendSticker(array $params)
 * @method array getStickerSet(array $params)
 * @method array uploadStickerFile(array $params)
 * @method array createNewStickerSet(array $params)
 * @method array addStickerToSet(array $params)
 * @method array setStickerPositionInSet(array $params)
 * @method array deleteStickerFromSet(array $params)
 * @method array setStickerSetThumb(array $params)
 * @method array sendInvoice(array $params)
 * @method array answerShippingQuery(array $params)
 * @method array answerPreCheckoutQuery(array $params)
 * @method array sendGame(array $params)
 * @method array setGameScore(array $params)
 * @method array getGameHighScores(array $params)
 *
 * @package TelegramBotApi
 */
class Client
{
    const API_URL_TMPL = 'https://api.telegram.org/bot%s/';

    const PARSE_MODE_MARKDOWN = 'Markdown';
    const PARSE_MODE_HTML     = 'HTML';

    private const AVAILABLE_METHODS = [
        'getUpdates',
        'setWebhook',
        'deleteWebhook',
        'getWebhookInfo',
        'getMe',
        'sendMessage',
        'forwardMessage',
        'sendPhoto',
        'sendAudio',
        'sendDocument',
        'sendVideo',
        'sendAnimation',
        'sendVoice',
        'sendVideoNote',
        'sendMediaGroup',
        'sendLocation',
        'editMessageLiveLocation',
        'stopMessageLiveLocation',
        'sendVenue',
        'sendContact',
        'sendPoll',
        'sendDice',
        'sendChatAction',
        'getUserProfilePhotos',
        'getFile',
        'kickChatMember',
        'unbanChatMember',
        'restrictChatMember',
        'promoteChatMember',
        'setChatAdministratorCustomTitle',
        'setChatPermissions',
        'exportChatInviteLink',
        'setChatPhoto',
        'deleteChatPhoto',
        'setChatTitle',
        'setChatDescription',
        'pinChatMessage',
        'unpinChatMessage',
        'leaveChat',
        'getChat',
        'getChatAdministrators',
        'getChatMembersCount',
        'getChatMember',
        'setChatStickerSet',
        'deleteChatStickerSet',
        'answerCallbackQuery',
        'setMyCommands',
        'getMyCommands',
        'editMessageText',
        'editMessageCaption',
        'editMessageMedia',
        'editMessageReplyMarkup',
        'stopPoll',
        'deleteMessage',
        'sendSticker',
        'getStickerSet',
        'uploadStickerFile',
        'createNewStickerSet',
        'addStickerToSet',
        'setStickerPositionInSet',
        'deleteStickerFromSet',
        'setStickerSetThumb',
        'sendInvoice',
        'answerShippingQuery',
        'answerPreCheckoutQuery',
        'sendGame',
        'setGameScore',
        'getGameHighScores',
    ];

    /**
     * @var string
     */
    private string $apiUrl;

    /**
     * @var \GuzzleHttp\Client
     */
    private \GuzzleHttp\Client $httpClient;

    /**
     * Client constructor.
     *
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->apiUrl = sprintf(self::API_URL_TMPL, $token);
        $this->httpClient = new \GuzzleHttp\Client(['base_uri' => $this->apiUrl]);
    }

    /**
     * @param string $method
     * @param array  $params
     *
     * @return array
     * @throws BadMethodCallException|TelegramException|GuzzleException
     */
    public function __call(string $method, array $params): array
    {
        if ($this->unavailableMethod($method)) {
            throw new BadMethodCallException();
        }

        return $this->makeRequest($method, $params[0] ?? []);

    }

    /**
     * @param string $method
     *
     * @return bool
     */
    private function unavailableMethod(string $method): bool
    {
        return !in_array($method, self::AVAILABLE_METHODS);
    }

    /**
     * @param string $method
     * @param array  $params
     *
     * @return array
     * @throws TelegramException|GuzzleException
     */
    private function makeRequest(string $method, array $params = []): array
    {
        $options = [];

        if (!empty($params)) {
            $options['form_params'] = $params;
        }

        try {
            $jsonResponse = $this->httpClient->request('POST', $method, $options)->getBody()->getContents();
        } catch (RequestException $e) {
            $jsonResponse = $e->getResponse()->getBody()->getContents();
        } catch (Exception $e) {
            throw new TelegramException($e->getMessage(), $e->getCode(), $e->getPrevious());
        }

        return json_decode($jsonResponse, true);
    }
}
