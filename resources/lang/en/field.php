<?php

return [
    'name'        => [
        'name'         => 'Name',
        'instructions' => 'Specify a short descriptive name.',
    ],
    'description' => [
        'name'         => 'Description',
        'instructions' => 'Briefly describe this discount.',
    ],
    'slug'        => [
        'name'         => 'Slug',
        'instructions' => 'The slug is used when accessing the discount via API.',
    ],
    'code'        => [
        'name'         => 'Code',
        'label'        => 'Discount Code',
        'instructions' => 'This is the code that customers will enter upon checkout.',
        'warning'      => 'If left blank the discount will be applied if all conditions are true.',
    ],
    'enabled'     => [
        'name' => 'Enabled',
    ],
    'condition'   => [
        'name' => 'Condition',
    ],
    'filter'      => [
        'name' => 'Filter',
    ],
    'start_date'  => [
        'name'         => 'Start Date',
        'instructions' => 'Specify the date in which this discount becomes available.',
    ],
    'end_date'    => [
        'name'         => 'End Date',
        'instructions' => 'Specify the date in which this discount expires.',
    ],
];
