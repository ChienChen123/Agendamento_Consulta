<?php

namespace App\Services;

use GuzzleHttp\Client;

class TelegramService
{
    protected $client;
    protected $token;

    public function __construct()
    {
        $this->client = new Client();
        $this->token = env('TELEGRAM_BOT_TOKEN'); // Coloque seu token no .env
    }

    public function sendMessage($chatId, $message)
    {
        $url = "https://api.telegram.org/bot{$this->token}/sendMessage";
        $this->client->post($url, [
            'json' => [
                'chat_id' => $chatId,
                'text' => $message,
            ],
        ]);
    }
}
