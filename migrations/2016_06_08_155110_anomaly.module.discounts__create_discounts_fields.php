<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleDiscountsCreateDiscountsFields
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleDiscountsCreateDiscountsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'code'               => 'anomaly.field_type.text',
        'enabled'            => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'default_value' => true,
            ],
        ],
        'availability'       => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'mode'          => 'radio',
                'default_value' => 'unlimited',
                'options'       => [
                    'unlimited' => 'anomaly.module.discounts::field.availability.option.unlimited',
                    'limited'   => 'anomaly.module.discounts::field.availability.option.limited',
                ]
            ]
        ],
        'limit'              => 'anomaly.field_type.integer',
        'limit_per_customer' => 'anomaly.field_type.integer',
        'used'               => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'default_value' => 0
            ]
        ],
        'extension'          => [
            'type'   => 'anomaly.field_type.addon',
            'config' => [
                'type'   => 'extension',
                'search' => 'anomaly.module.discounts::discount.*',
            ]
        ],
    ];

}
