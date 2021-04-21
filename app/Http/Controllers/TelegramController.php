<?php

namespace App\Http\Controllers;
use Telegram\Bot\Api;


use Illuminate\Http\Request;

class TelegramController extends Controller
{
    //
    public function __construct()
    {
        $this->telegram = new Api(env('TELEGRAM_BOT_TOKEN'));

    }
    public function getMe()
    {
        $response = $this->telegram->getMe();
        return $response;
    }
    public function setWebHook()
    {
        $url = 'https://applicationdomain.com/' . env('TELEGRAM_BOT_TOKEN') . '/webhook';
        $response = $this->telegram->setWebhook(['url' => $url]);
    
        return $response == true ? redirect()->back() : dd($response);
    }
}
