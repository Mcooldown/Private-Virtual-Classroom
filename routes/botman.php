<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});

$botman->hears('AI susah banget', function ($bot) {
    $bot->reply('Emang cok');
});


$botman->hears('Start conversation', BotManController::class.'@startConversation');
