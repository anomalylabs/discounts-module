<?php namespace Anomaly\DiscountsModule\Discount;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\DiscountsModule\Discount\Contract\DiscountRepositoryInterface;
use Anomaly\OrdersModule\Order\Contract\OrderInterface;

class DiscountApplicator
{

    /**
     * The discount calculator.
     *
     * @var DiscountCalculator
     */
    protected $calculator;

    /**
     * Create a new DiscountApplicator instance.
     *
     * @param DiscountCalculator $calculator
     */
    public function __construct(DiscountCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * Apply discounts to an order.
     *
     * @param OrderInterface $order
     */
    public function apply(OrderInterface $order)
    {
        /* @var DiscountCollection $discounts */
        $discounts = app(DiscountRepositoryInterface::class)->enabled();

        $amount = 0.00;

        /* @var DiscountInterface $discount */
        foreach ($discounts->matching($order) as $discount) {
            $amount = $amount + $this->calculator->calculate($discount, $order);
        }

        $order->setAttribute('discount', $amount);
    }
}
