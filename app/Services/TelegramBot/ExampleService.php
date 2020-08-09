<?php

namespace App\Services\TelegramBot;

use App\Services\TelegramBot\TelegramBotService;
use Illuminate\Http\Request;

class ExampleService extends TelegramBotService
{

    public function runCommand(
        \TgBotApi\BotApiBase\BotApi $bot, 
        Request $request
    ) {
        if (!$this->checkAction()) return false;
        $message = $this->request->input('message');
        $chat = $message['chat'];
        $this->chatId = $chat['id'];

        \TgBotApi\BotApiBase\Method\SendMessageMethod::create();
        $bot->send(\TgBotApi\BotApiBase\Method\SendMessageMethod::create($chatId, 'howdy'));
        return true;
    }
}
