<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleDiscountsCreateConditionsStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleDiscountsCreateConditionsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'     => 'conditions',
        'sortable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'extension' => [
            'required' => true,
            'config'   => [
                'search' => 'anomaly.module.discounts::condition.*',
            ],
        ],
        'discount' => [
            'required' => true,
        ],
    ];

}
