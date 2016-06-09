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
        'trashable'    => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'code'         => [
            'required' => true,
            'unique'   => true,
        ],
        'enabled',
        'availability' => [
            'required' => true,
        ],
        'limit',
        'limit_per_customer',
        'used' => [
            'required' => true,
        ],
        'extension'       => [
            'required' => true,
        ],
    ];

}
