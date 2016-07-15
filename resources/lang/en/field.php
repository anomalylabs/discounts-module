<?php

return [
    'name'                    => [
        'name' => 'Name',
    ],
    'description'             => [
        'name' => 'Description',
    ],
    'slug'                    => [
        'name' => 'Slug',
    ],
    'code'                    => [
        'name'         => 'Code',
        'label'        => 'Discount Code',
        'instructions' => 'Customers will enter this discount code at checkout.',
    ],
    'enabled'                 => [
        'name' => 'Enabled',
    ],
    'scope'                   => [
        'name'   => 'Scope',
        'option' => [
            'items' => 'Discount each item in cart',
            'cart'  => 'Discount the entire cart',
        ]
    ],
    'condition'               => [
        'name' => 'Condition',
    ],
    'filter'                  => [
        'name' => 'Filter',
    ],
    'limit_per_coupon'        => [
        'name'         => 'Limit Per Coupon',
        'instructions' => 'Specify the usage limit for this discount code.',
        'warning'      => 'Only applies when coupon code is entered.',
        'placeholder'  => '∞'
    ],
    'limit_per_customer'      => [
        'name'         => 'Limit Per Customer',
        'instructions' => 'Specify the number of times a customer can use this discount code.',
        'warning'      => 'Usage is tracked by the customer\'s email address.',
        'placeholder'  => '∞'
    ],
    'allowed_customer_groups' => [
        'name' => 'Allowed Customer Groups',
    ],
];
