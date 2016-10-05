<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Server
    |--------------------------------------------------------------------------
    |
    | unknown
    |
    */

    'server' => env('DESTINY_SERVER', ''),

    /*
    |--------------------------------------------------------------------------
    | Destiny API Key
    |--------------------------------------------------------------------------
    |
    | Key used in requests to bungie.net
    |
    */

    'key' => env('DESTINY_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | Cache Enabled
    |--------------------------------------------------------------------------
    |
    | Boolean flag whether API requests are cached.
    |
    */

    'cache' => env('DESTINY_CACHE', true),

    /*
    |--------------------------------------------------------------------------
    | Cache Default
    |--------------------------------------------------------------------------
    |
    | The default value of cache entries (minutes)
    |
    */

    'cache_default' => env('DESTINY_CACHE_DEFAULT', 3),

	/*
	|--------------------------------------------------------------------------
	| Cache Index
	|--------------------------------------------------------------------------
	|
	| The default value of cache on index (minutes)
	|
	*/

	'cache_index' => env('DESTINY_CACHE_INDEX', 60),

    /*
    |--------------------------------------------------------------------------
    | Cache Player Time
    |--------------------------------------------------------------------------
    |
    | Time to cache player (lookup) - minutes
    |
    */

    'cache_player' => env('DESTINY_CACHE_PLAYER', 60 * 24),
];
