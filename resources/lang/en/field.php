<?php

return [
    'name'                    => [
        'name'         => 'Name',
        'instructions' => 'Specify a short descriptive name.',
    ],
    'description'             => [
        'name'         => 'Description',
        'instructions' => 'Briefly describe this discount.',
    ],
    'slug'                    => [
        'name'         => 'Slug',
        'instructions' => 'The slug is used when accessing the discount via API.',
    ],
    'amount'                  => [
        'name'         => 'Amount',
        'label'        => 'Discount Amount',
        'instructions' => 'Specify the discount amount or percentage (19.95 or 25%).',
    ],
    'code'                    => [
        'name'         => 'Code',
        'label'        => 'Discount Code',
        'instructions' => 'This is the code that customers will enter upon checkout.',
        'warning'      => 'If left blank the discount will be applied if all conditions are true.',
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
