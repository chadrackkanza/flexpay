# Package FlexPay API

For Laravel 9 and 10

## Installation

You can install the package via composer:

```bash
composer require chadrackkanza/flexpay
```



You can publish the config file with:

```bash
php artisan vendor:publish --tag="flexpay-config"
```

This is the contents of the published config file:

```php
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
```


## Usage


Add these lines in your .env file

```php
FLEXPAY_TOKEN="YOUR_FLEXPAY_TOKEN"
FLEXPAY_MERCHANT="YOUR_FLEXPAY_MERCHANT"
FLEXPAY_URL_API="FLEXPAY_URL_API"
FLEXPAY_URL_API_CARD="FLEXPAY_URL_API_CARD"
```


Payment consumer to business

```php
use chadrackkanza\Flexpay\Facades\Flexpay;
$response = Flexpay::c2b(
        '243XXXXXXXXX', //phoneNumber
        '1500', //amount
        'cdf', //currency
        'https://mon-site.com', //callbackUrl
        1 //commission
   );
dd($response);
```

Payment business to consumer

```php
use chadrackkanza\Flexpay\Facades\Flexpay;
$response = Flexpay::b2c(
        '243XXXXXXXXX', //phoneNumber
        '1500', //amount
        'cdf', //currency
        'https://mon-site.com', //callbackUrl
        1 //commission
   );
dd($response);
```

Check the status of a payment request sent to FlexPay

```php
use chadrackkanza\Flexpay\Facades\Flexpay;
$response = Flexpay::checkTransaction('YOUR_ORDER_NUMBER');
dd($response);
```

Payment ( e-money, qr-code and card)

```php
use chadrackkanza\Flexpay\Facades\Flexpay;
$response = Flexpay::payment(
        "TEST0014521", // reference
        "Tests de paiement", // description
        10, // amount
        "USD", // currency
        "https://mon-site.com/callback.com", // callback_url
        "https://mon-site.com/approve.com", //approve_url
        "https://mon-site.com/cancel.com", // cancel_url
        "https://mon-site.com/decline.com", // decline_url
        "https://mon-site.com" // home_url
   );
dd($response);
```

Check the status of a payment ( e-money, qr-code and card) request sent to FlexPay

```php
use chadrackkanza\Flexpay\Facades\Flexpay;
$response = Flexpay::getOrderNumber('YOUR_ORDER_NUMBER');
dd($response);
```

## Credits

- [Chadrack KANZA](https://github.com/chadrackkanza)
- [Djoy Romeo](https://github.com/djoyromeo-git/FlexPayService)
