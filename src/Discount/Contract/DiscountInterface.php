<?php namespace Anomaly\DiscountsModule\Discount\Contract;

use Anomaly\DiscountsModule\Condition\ConditionCollection;
use Anomaly\DiscountsModule\Discount\DiscountExtension;
use Anomaly\DiscountsModule\Filter\FilterCollection;
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
     * Get the code.
     *
     * @return string
     */
    public function getCode();

    /**
     * Return if the discount
     * has a coupon code or not.
     *
     * @return bool
     */
    public function hasCode();

    /**
     * Get the extension.
     *
     * @return DiscountExtension
     */
    public function getExtension();

    /**
     * Return the discount extension.
     *
     * @return DiscountExtension
     */
    public function extension();

    /**
     * Get the filters.
     *
     * @return FilterCollection
     */
    public function getFilters();

    /**
     * Get the conditions.
     *
     * @return ConditionCollection
     */
    public function getConditions();
}
