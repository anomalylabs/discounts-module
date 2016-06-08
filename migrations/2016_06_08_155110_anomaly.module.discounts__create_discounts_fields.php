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
        'used'               => 'anomaly.field_type.integer',
        'type'               => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options' => [
                    'fixed_amount' => 'anomaly.module.discounts::field.type.option.fixed_amount',
                    'percentage'   => 'anomaly.module.discounts::field.type.option.percentage',
                    'shipping'     => 'anomaly.module.discounts::field.type.option.shipping',
                ]
            ]
        ],
        'amount'             => 'anomaly.field_type.decimal',
    ];

}
