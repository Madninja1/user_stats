<?php

return [
    'enabled' => env('ES_STATS_ENABLED', true),
    'url' => env('ES_STATS_URL', 'user_stats'),
    'db_prefix' => env('ES_STATS_DB_PREFIX', 'es_'),
    'user_table' => env('ES_STATS_USER_TABLE', 'users'),
    'entries_table' => env('ES_STATS_ENTITIES_TABLE', 'entries'),
    'middleware' => env('ES_STATS_MIDDLEWARE', []),
];