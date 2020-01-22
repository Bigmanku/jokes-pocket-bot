<?php

use TelegramBot\TelegramBotManager\BotManager;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/constants.php';

try {
    $bot = new BotManager([
        'api_key' => BOT_API_KEY,
        'bot_username' => BOT_USERNAME,
        'secret' => BOT_SECRET,
        'webhook' => [
            'url' => BOT_WEBHOOK_URL,
            'max_connections' => BOT_WEBHOOK_MAX_CONNECTIONS,
        ],
        'validate_request' => BOT_VALIDATE_REQUEST,
        'valid_ips' => BOT_VALID_IPS,
        'admins' => BOT_ADMINS,
        'commands' => [
            'paths' => [
                __DIR__ . '/Commands'
            ]
        ],
        'logging' => [
            'update' => __DIR__ . '/logs/php-telegram-bot-update.log',
            'debug' => __DIR__ . '/logs/php-telegram-bot-debug.log',
            'error' => __DIR__ . '/logs/php-telegram-bot-error.log',
        ]
    ]);
    $bot->run();
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
