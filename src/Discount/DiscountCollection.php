<?php namespace Anomaly\DiscountsModule\Discount;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\OrdersModule\Order\Contract\OrderInterface;
use Anomaly\Streams\Platform\Entry\EntryCollection;

/**
 * Class DiscountCollection
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount
 */
class DiscountCollection extends EntryCollection
{

    /**
     * Return only matching discounts.
     *
     * @param OrderInterface $order
     * @return $this
     */
    public function matching(OrderInterface $order)
    {
        return $this->filter(
            function (DiscountInterface $discount) use ($order) {
                return (new DiscountMatcher($discount))->matches($order);
            }
        );
    }
}
