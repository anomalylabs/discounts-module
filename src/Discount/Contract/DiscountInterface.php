<?php namespace Anomaly\DiscountsModule\Discount\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface DiscountInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount\Contract
 */
interface DiscountInterface extends EntryInterface
{

    /**
     * Get the amount.
     *
     * @return string
     */
    public function getAmount();
}
