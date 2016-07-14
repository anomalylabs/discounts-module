<?php namespace Anomaly\DiscountsModule\Discount\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class DiscountFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount\Form
 */
class DiscountFormBuilder extends FormBuilder
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
        ],
        'filters'    => [
            'icon'    => 'filter',
            'type'    => 'primary',
            'enabled' => 'edit',
            'text'    => 'anomaly.module.discounts::button.filters',
        ],
        'cancel',
    ];
}
