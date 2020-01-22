<?php

/**
 * Full description of all available options - https://github.com/php-telegram-bot/telegram-bot-manager.
 *
 * (string) Bot API key provided by @BotFather.
 */
const BOT_API_KEY = '12345:my_api_key';

/**
 * (string) Bot username that was defined when creating the bot.
 */
const BOT_USERNAME = 'my_own_bot';

/**
 * (string) A secret password required to authorise access to the webhook.
 */
const BOT_SECRET = 'super_secret';

/**
 * (string) URL to the manager PHP file used for setting up the webhook.
 */
const BOT_WEBHOOK_URL = 'https://example.com/manager.php';

/**
 * (int) Maximum allowed simultaneous HTTPS connections to the webhook.
 */
const BOT_WEBHOOK_MAX_CONNECTIONS = 10;

/**
 * (bool) Only allow webhook access from valid Telegram API IPs.
 */
const BOT_VALIDATE_REQUEST = true;

/**
 * (array) When using `validate_request`, also allow these IPs.
 */
const BOT_VALID_IPS = ['1.12.123.114'];

/**
 * (array) An array of user ids that have admin access to your bot (must be integers).
 */
const BOT_ADMINS = [111111111, 2222222222];
