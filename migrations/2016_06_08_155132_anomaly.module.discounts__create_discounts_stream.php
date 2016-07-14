<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleDiscountsCreateDiscountsStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleDiscountsCreateDiscountsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'discounts',
        'title_column' => 'code',
        'translatable' => true,
        'trashable'    => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'         => [
            'required'     => true,
            'translatable' => true,
        ],
        'slug'         => [
            'required' => true,
            'unique'   => true,
        ],
        'description'  => [
            'translatable' => true,
        ],
        'code'         => [
            'unique' => true,
        ],
        'allowed_customer_groups',
        'enabled',
        'availability' => [
            'required' => true,
        ],
        'limit_per_coupon',
        'limit_per_customer',
        'used'         => [
            'required' => true,
        ],
        'extension'    => [
            'required' => true,
        ],
    ];

}
