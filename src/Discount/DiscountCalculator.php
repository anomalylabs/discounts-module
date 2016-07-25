<?php namespace Anomaly\DiscountsModule\Discount;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\OrdersModule\Order\Contract\OrderInterface;

/**
 * Class DiscountCalculator
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount
 */
class DiscountCalculator
{

    /**
     * Calculate the discount amount.
     *
     * @param OrderInterface $order
     * @return float
     */
    public function calculate(DiscountInterface $discount, OrderInterface $order)
    {
        $extension = $discount->extension();

        return $extension->calculate($order);
    }
}
