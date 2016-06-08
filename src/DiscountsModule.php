<?php namespace Anomaly\DiscountsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class DiscountsModule
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule
 */
class DiscountsModule extends Module
{

    /**
     * The navigation icon.
     *
     * @var string
     */
    protected $icon = 'addon';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'discounts' => [
            'buttons' => [
                'new_discount'
            ]
        ]
    ];

}
