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
     * Fields to skip.
     *
     * @var array|string
     */
    protected $skips = [
        'used',
        'enabled',
    ];

}
