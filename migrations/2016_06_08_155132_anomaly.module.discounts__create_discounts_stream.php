<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleDiscountsCreateDiscountsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'discounts'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [];

}
