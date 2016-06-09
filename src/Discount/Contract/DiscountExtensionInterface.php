<?php namespace Anomaly\DiscountsModule\Discount\Contract;

use Anomaly\DiscountsModule\Discount\Form\DiscountMultipleFormBuilder;

/**
 * Interface DiscountExtensionInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount\Contract
 */
interface DiscountExtensionInterface
{

    /**
     * Integrate with the form builder.
     *
     * @param DiscountMultipleFormBuilder $builder
     */
    public function integrate(DiscountMultipleFormBuilder $builder);
}
