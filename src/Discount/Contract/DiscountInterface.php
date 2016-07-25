<?php namespace Anomaly\DiscountsModule\Discount\Contract;

use Anomaly\DiscountsModule\Discount\DiscountExtension;
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
     * Return the discount extension.
     *
     * @return DiscountExtension
     */
    public function extension();

    /**
     * Get the slug.
     *
     * @return string
     */
    public function getSlug();

    /**
     * Get the scope.
     *
     * @return string
     */
    public function getScope();

    /**
     * Get the amount.
     *
     * @return string
     */
    public function getAmount();

    /**
     * Get the extension.
     *
     * @return DiscountExtension
     */
    public function getExtension();
}
