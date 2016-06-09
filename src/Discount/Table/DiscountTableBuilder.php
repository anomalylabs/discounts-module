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
                'code',
            ]
        ],
        'extension'
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'code' => [
            'wrapper' => '<pre>{value}</pre>'
        ],
        'entry.enabled.label',
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
