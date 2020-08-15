<?php

namespace App\Services\TelegramBot;
use Illuminate\Http\Request;

abstract class TelegramBotService
{
    public abstract static function runCommand(
        \TgBotApi\BotApiBase\BotApi $bot, 
        Request $request
    );

    public static abstract function checkAction(
        \TgBotApi\BotApiBase\BotApi $bot, 
        Request $request
    );
}
