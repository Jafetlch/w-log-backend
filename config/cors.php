<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */
   
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedOriginsPatterns' => [],
    'allowedHeaders' => ['*'],
//    'allowedHeaders' => ['Content-Type', 'X-Requested-With'],
//    'allowedMethods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE'],
    'allowedMethods' => ['*'],
    'exposedHeaders' => [],
    'maxAge' => 0,

];
