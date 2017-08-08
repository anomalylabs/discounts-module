<?php namespace Anomaly\DiscountsModule\Discount;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
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
     * @param $target
     * @return $this
     */
    public function matching($target)
    {
        return $this->filter(
            function (DiscountInterface $discount) use ($target) {
                return (new DiscountMatcher($discount))->matches($target);
            }
        );
    }

    /**
     * Apply the discounts to the target.
     *
     * @param $target
     * @return DiscountCollection
     */
    public function apply($target)
    {
        $this->map(
            function (DiscountInterface $discount) use ($target) {
                $discount
                    ->extension()
                    ->apply($target);
            }
        );

        return $this;
    }
}
