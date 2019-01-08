<?php
/**
 * Created by Rico Bartoschak.
 * User: Megachill
 * Date: 03/01/2019
 * Time: 13:41
 */

return [
    /*
     |--------------------------------------------------------------------------
     | Pattern and storage path settings
     |--------------------------------------------------------------------------
     |
     | The env key for pattern and storage path with a default value
     |
     */
    'pattern'       => env('LOGVIEWER_PATTERN', '*.log'),
    'storage_path'  => env('LOGVIEWER_STORAGE_PATH', storage_path('logs')),
];
