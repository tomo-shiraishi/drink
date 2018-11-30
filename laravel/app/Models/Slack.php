<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use GuzzleHttp\Client;
use Config;

// slackの外部APIまとめ
class Slack extends Model
{
    use Notifiable;
    /**
     * SlackチャンネルのWebhookURLを返す
     *
     * @return string
     */
    public function routeNotificationForSlack()
    {
        return config('slack.notification');
    }

    public static function getUserIds($mails) {
        $client = new \GuzzleHttp\Client();
        $ids = [];
        $base_url = 'https://slack.com/api/users.lookupByEmail?token='.Config::get('slackapikeys.lookupFromEmail');
        $param = '&email=tomohiro.shiraishi@leverages.jp';
        $url = $base_url.$param;
        $response = $client->request("GET", $url);
        $body = json_decode(strval($response->getBody()));
        $user = $body->user;

        $ids[] = $user->id;
        return $ids;
    }

    public static function sendMessage($ids, $message) {
        $client = new \GuzzleHttp\Client();
        $base_url = 'https://slack.com/api/chat.postMessage?token='.Config::get('slackapikeys.postMessage');
        $text_param = '&text='.$message;

        foreach ($ids as $id) {
            $channel_param = '&channel=@'.$id;
            $url = $base_url.$channel_param.$text_param;
            $options = [
                'http_errors' => false,
                'headers' => [
                    'Accept' => 'application/x-www-form-urlencoded',
                    'Content-Type' => 'application/x-www-form-urlencoded'
                ]
            ];
            $response = $client->request('POST', $url, $options);

        }

        return (string)$response->getStatusCode();
    }

}
