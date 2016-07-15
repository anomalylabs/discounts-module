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
        'sortable'     => true,
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
        'scope'        => [
            'unique' => true,
        ],
        'code',
        'amount' => [
            'required' => true,
        ],
        'allowed_customer_groups',
        'enabled',
        'limit_per_coupon',
        'limit_per_customer',
    ];

}
