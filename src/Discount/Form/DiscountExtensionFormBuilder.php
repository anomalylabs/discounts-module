<?php namespace Anomaly\DiscountsModule\Discount\Form;

use Anomaly\Streams\Platform\Ui\Form\Multiple\MultipleFormBuilder;

/**
 * Class DiscountExtensionFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount\Form
 */
class DiscountExtensionFormBuilder extends MultipleFormBuilder
{

    /**
     * The form buttons.
     *
     * @var array
     */
    protected $buttons = [
        'conditions' => [
            'icon'    => 'check-square-alt',
            'type'    => 'primary',
            'enabled' => 'edit',
            'text'    => 'anomaly.module.discounts::button.conditions',
            'href'    => 'admin/discounts/conditions/{request.route.parameters.id}',
        ],
        'filters'    => [
            'icon'    => 'filter',
            'type'    => 'primary',
            'enabled' => 'edit',
            'text'    => 'anomaly.module.discounts::button.filters',
            'href'    => 'admin/discounts/filters/{request.route.parameters.id}',
        ],
        'cancel',
    ];
}
