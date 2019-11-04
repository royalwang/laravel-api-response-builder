<?php

/**
 * Laravel API Response Builder
 *
 * @author    Marcin Orlowski <mail (#) marcinOrlowski (.) com>
 * @copyright 2016-2019 Marcin Orlowski
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://github.com/MarcinOrlowski/laravel-response-builder
 */
return [

    'ok'                       => 'OK',
    'no_error_message'         => 'Błąd #:api_code',

    // can be used by Exception Handler (if enabled)
    'uncaught_exception'       => 'Nieprzechwycony wyjątek: :message',
    // we talking API call here, hence we have http_not_found
    'http_not_found'           => 'Element nie znaleziony',
    'http_exception'           => 'Wyjątek HTTP: :message',
    'http_service_unavailable' => 'Trwa przerwa serwisowa',

    // Exception Handler (added in 3.3.0)
    'authentication_exception' => 'Brak autoryzacji dostępu',
    'validation_exception'     => 'Nieprawidłowe dane',

    // Error messages for HttpException caught w/o custom messages
    // https://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
    'http_400'                 => 'Bad Request',
    'http_401'                 => 'Unauthorized',
    'http_402'                 => 'Payment Required',
    'http_403'                 => 'Forbidden',
    'http_404'                 => 'Not Found',
    'http_405'                 => 'Method Not Allowed',
    'http_406'                 => 'Not Acceptable',
    'http_407'                 => 'Proxy Authentication Required',
    'http_408'                 => 'Request Timeout',
    'http_409'                 => 'Conflict',
    'http_410'                 => 'Gone',
    'http_411'                 => 'Length Required',
    'http_412'                 => 'Precondition Failed',
    'http_413'                 => 'Payload Too Large',
    'http_414'                 => 'URI Too Long',
    'http_415'                 => 'Unsupported Media Type',
    'http_416'                 => 'Range Not Satisfiable',
    'http_417'                 => 'Expectation Failed',
    'http_421'                 => 'Misdirected Request',
    'http_422'                 => 'Unprocessable Entity',
    'http_423'                 => 'Locked',
    'http_424'                 => 'Failed Dependency',
    'http_425'                 => 'Too Early',
    'http_426'                 => 'Upgrade Required',
    'http_428'                 => 'Precondition Required',
    'http_429'                 => 'Too Many Requests',
    'http_431'                 => 'Request Header Fields Too Large',
    'http_451'                 => 'Unavailable For Legal Reasons',
    'http_500'                 => 'Internal Server Error',
    'http_501'                 => 'Not Implemented',
    'http_502'                 => 'Bad Gateway',
    'http_503'                 => 'Service Unavailable',
    'http_504'                 => 'Gateway Timeout',
    'http_505'                 => 'HTTP Version Not Supported',
    'http_506'                 => 'Variant Also Negotiates',
    'http_507'                 => 'Insufficient Storage',
    'http_508'                 => 'Loop Detected',
    'http_509'                 => 'Unassigned',
    'http_510'                 => 'Not Extended',
    'http_511'                 => 'Network Authentication Required',
];
