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
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'discounts' => [
            'buttons'  => [
                'new_discount' => [
                    'data-toggle' => 'modal',
                    'data-target' => '#modal',
                    'href'        => 'admin/discounts/choose',
                ],
            ],
            'sections' => [
                'filters'    => [
                    'href'    => 'admin/discounts/filters/{request.route.parameters.discount}',
                    'buttons' => [
                        'add_filter' => [
                            'data-toggle' => 'modal',
                            'data-target' => '#modal',
                            'href'        => 'admin/discounts/filters/{request.route.parameters.discount}/choose',
                        ],
                    ],
                ],
                'conditions' => [
                    'href'    => 'admin/discounts/conditions/{request.route.parameters.discount}',
                    'buttons' => [
                        'add_condition' => [
                            'data-toggle' => 'modal',
                            'data-target' => '#modal',
                            'href'        => 'admin/discounts/conditions/{request.route.parameters.discount}/choose',
                        ],
                    ],
                ],
            ],
        ],
    ];

}
