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
        'name'               => 'anomaly.field_type.text',
        'description'        => 'anomaly.field_type.textarea',
        'code'               => 'anomaly.field_type.text',
        'slug'               => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type'    => '-',
            ]
        ],
        'enabled'            => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'default_value' => true,
            ],
        ],
        'limit_per_coupon'   => 'anomaly.field_type.integer',
        'limit_per_customer' => 'anomaly.field_type.integer',
        'start_date'         => [
            'type'   => 'anomaly.field_type.datetime',
            'config' => [
                'mode' => 'date'
            ]
        ],
        'end_date'           => [
            'type'   => 'anomaly.field_type.datetime',
            'config' => [
                'mode' => 'date'
            ]
        ],
        'terminating'        => 'anomaly.field_type.boolean',
        'extension'          => [
            'type'   => 'anomaly.field_type.addon',
            'config' => [
                'type' => 'extension',
            ]
        ],
        'action'             => [
            'type'   => 'anomaly.field_type.addon',
            'config' => [
                'type'   => 'extension',
                'search' => 'anomaly.module.discounts::action.*',
            ]
        ],
        'discount'           => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\DiscountsModule\Discount\DiscountModel',
            ]
        ],
    ];

}
