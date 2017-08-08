<?php namespace Anomaly\DiscountsModule\Discount;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;

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
     * Return if the discount matches or not.
     *
     * @param $target
     * @return bool
     */
    public function matches($target)
    {
        $filters = $this->discount->getFilters();

        if ($filters->isNotEmpty() && !$filters->match($target)) {
            return false;
        }

        $conditions = $this->discount->getConditions();

        if ($conditions->isNotEmpty() && !$conditions->match($target)) {
            return false;
        }

        return true;
    }
}
