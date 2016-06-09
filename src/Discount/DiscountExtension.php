<?php namespace Anomaly\DiscountsModule\Discount;

use Anomaly\DiscountsModule\Discount\Contract\DiscountExtensionInterface;
use Anomaly\DiscountsModule\Discount\Form\DiscountMultipleFormBuilder;
use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class DiscountExtension
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount
 */
class DiscountExtension extends Extension implements DiscountExtensionInterface
{

    /**
     * Integrate with the form builder.
     *
     * @param DiscountMultipleFormBuilder $builder
     */
    public function integrate(DiscountMultipleFormBuilder $builder)
    {
        // TODO: Implement integrate() method.
    }
}
