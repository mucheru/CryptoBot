<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'irazasyed/telegram-bot-sdk' => 
  array (
    'providers' => 
    array (
      0 => 'Telegram\\Bot\\Laravel\\TelegramServiceProvider',
    ),
    'aliases' => 
    array (
      'Telegram' => 'Telegram\\Bot\\Laravel\\Facades\\Telegram',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
);