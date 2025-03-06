<?php

return [
    //These are for the Marketplace
    'appID' => env('733936538bd77bb9b19ec42f039337'),
    'secretKey' => env('224701d6a17cdeb599b49c40bf54d0fda2b5d3d4'),
    'testURL' => 'https://test.cashfree.com/billpay/checkout/post/submit',
    'prodURL' => 'https://www.cashfree.com/checkout/post/submit',
    'maxReturn' => 100, //this is for request pagination
    'isLive' => false,

    //For the PaymentGateway.
    'PG' => [
        'appID' => env('733936538bd77bb9b19ec42f039337'),
        'secretKey' => env('224701d6a17cdeb599b49c40bf54d0fda2b5d3d4'),
        'testURL' => 'https://test.cashfree.com',
        'prodURL' => 'https://api.cashfree.com',
        'isLive' => false
    ]
];
