<?php namespace Anomaly\DiscountsModule\Filter\Extension\Contract;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\DiscountsModule\Filter\Contract\FilterInterface;
use Anomaly\DiscountsModule\Filter\Extension\Form\FilterExtensionFormBuilder;
use Anomaly\ProductsModule\Product\Contract\ProductInterface;

/**
 * Interface FilterExtensionInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Filter\Extension\Contract
 */
interface FilterExtensionInterface
{

    /**
     * Return the form builder.
     *
     * @param DiscountInterface $discount
     * @param FilterInterface   $filter
     * @return FilterExtensionFormBuilder
     */
    public function form(DiscountInterface $discount, FilterInterface $filter = null);

    /**
     * Return the column value for the table.
     *
     * @param DiscountInterface $discount
     * @param FilterInterface   $filter
     * @return string
     */
    public function column(DiscountInterface $discount, FilterInterface $filter);

    /**
     * Return if a product passes the filter or not.
     *
     * @param DiscountInterface $discount
     * @param ProductInterface  $product
     * @return bool
     */
    public function passes(DiscountInterface $discount, ProductInterface $product);
}
