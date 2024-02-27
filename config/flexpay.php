<?php

// config for chadrackkanza/Flexpay
return [
    'token' => env('FLEXPAY_TOKEN'),
    'merchant' => env('FLEXPAY_MERCHANT'),
    'url_api' => env('FLEXPAY_URL_API','https://backend.flexpay.cd'),
    'url_api_card' => env('FLEXPAY_URL_API_CARD','https://cardpayment.flexpay.cd'),
    'url_c2b' => env('FLEXPAY_URL_C2B','/api/rest/v1/paymentService'),
    'url_b2c' =>  env('FLEXPAY_URL_B2C','/api/rest/v1/merchantPayOutService'),
    'url_card' => env('FLEXPAY_URL_CARD','/api/rest/v1/vpos/ask'),
    'url_check_transaction' => env('FLEXPAY_URL_CHECK','/api/rest/v1/check'),
    'url_get_order_number' => env('FLEXPAY_URL_GET_ORDER_NUMBER','/api/rest/v1/vpos/orderNumber'),
];
