<?php namespace Anomaly\DiscountsModule\Discount\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class DiscountTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount\Table
 */
class DiscountTableBuilder extends TableBuilder
{

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
        'search' => [
            'fields' => [
                'name',
                'code',
            ],
        ],
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit',
        'filters'    => [
            'icon' => 'filter',
            'type' => 'primary',
        ],
        'conditions' => [
            'type' => 'primary',
            'icon' => 'check-square-alt',
        ],
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete',
    ];

}
