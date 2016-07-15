<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleDiscountsCreateFiltersStream
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyModuleDiscountsCreateFiltersStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'     => 'filters',
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
                'search' => 'anomaly.module.discounts::filter.*',
            ],
        ],
        'discount' => [
            'required' => true,
        ],
    ];

}
