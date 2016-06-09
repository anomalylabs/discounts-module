<?php

return [
    'code'               => [
        'name'         => 'Code',
        'label'        => 'Discount Code',
        'instructions' => 'Customers will enter this discount code at checkout.',
    ],
    'enabled'            => [
        'name' => 'Enabled',
    ],
    'availability'       => [
        'name'         => 'Availability',
        'instructions' => 'Do you want to limit availability to use this discount code?',
        'warning'      => 'The <strong>Limit</strong> will be ignored if <em>unlimited</em> is selected.',
        'option'       => [
            'unlimited' => 'Unlimited',
            'limited'   => 'Limited',
        ]
    ],
    'limit'              => [
        'name'         => 'Limit',
        'instructions' => 'Specify the usage limit for this discount code.',
    ],
    'limit_per_customer' => [
        'name'         => 'Limit Per Customer',
        'instructions' => 'Specify the number of times a customer can use this discount code.',
        'warning'      => 'Usage is tracked by the customer\'s email address.',
        //'placeholder'  => '∞'
    ],
    'extension'          => [
        'name' => 'Type',
    ],
];
