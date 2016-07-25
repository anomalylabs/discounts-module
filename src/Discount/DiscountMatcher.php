<?php namespace Anomaly\DiscountsModule\Discount;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\OrdersModule\Order\Contract\OrderInterface;

/**
 * Class DiscountMatcher
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount
 */
class DiscountMatcher
{

    /**
     * The discount interface.
     *
     * @var DiscountInterface
     */
    protected $discount;

    /**
     * Create a new DiscountMatcher instance.
     *
     * @param DiscountInterface $discount
     */
    public function __construct(DiscountInterface $discount)
    {
        $this->discount = $discount;
    }

    /**
     * Return if the discount matches the order.
     *
     * @param OrderInterface $order
     */
    public function matches(OrderInterface $order)
    {
        return true;
    }
}
