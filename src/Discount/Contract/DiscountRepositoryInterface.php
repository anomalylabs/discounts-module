<?php namespace Anomaly\DiscountsModule\Discount\Contract;

use Anomaly\DiscountsModule\Discount\DiscountCollection;
use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

/**
 * Interface DiscountRepositoryInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount\Contract
 */
interface DiscountRepositoryInterface extends EntryRepositoryInterface
{

    /**
     * Return only enabled discounts.
     *
     * @param bool $enabled
     * @return DiscountCollection
     */
    public function enabled();

}
