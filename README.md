# Package FlexPay API

Only supports Laravel 10

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
    'url_api' => env('FLEXPAY_URL_API','http://41.243.7.46:3006'),
    'url_c2b' => '/api/rest/v1/paymentService',
    'url_b2c' => '/api/rest/v1/merchantPayOutService',
    'url_check_transaction' => '/api/rest/v1/check',
];
```


## Usage


Add these lines in your .env file

```php
FLEXPAY_TOKEN="YOUR_FLEXPAY_TOKEN"
FLEXPAY_MERCHANT="YOUR_FLEXPAY_MERCHANT"
FLEXPAY_URL_API="FLEXPAY_URL_API"
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
        "https://mon-site.com/decline.com" // decline_url
        "https://mon-site.com" // home_url
   );
dd($response);
```

## Credits

- [Chadrack KANZA](https://github.com/chadrackkanza)
- [Djoy Romeo](https://github.com/djoyromeo-git/FlexPayService)
