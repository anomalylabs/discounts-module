<?php namespace Anomaly\DiscountsModule\Filter\Extension;

use Anomaly\DiscountsModule\Filter\Contract\FilterInterface;
use Anomaly\DiscountsModule\Filter\Extension\Contract\FilterExtensionInterface;
use Anomaly\DiscountsModule\Filter\Extension\Form\FilterExtensionFormBuilder;
use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class FilterExtension
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Filter\Extension
 */
class FilterExtension extends Extension implements FilterExtensionInterface
{

    /**
     * Return the form builder.
     *
     * @param DiscountInterface  $discount
     * @param FilterInterface $filter
     * @return FilterExtensionFormBuilder
     * @throws \Exception
     */
    public function form(DiscountInterface $discount, FilterInterface $filter = null)
    {
        throw new \Exception(get_class($this) . ' must implement the ' . __FUNCTION__ . ' method.');
    }

    /**
     * Return the column value for the table.
     *
     * @param DiscountInterface  $discount
     * @param FilterInterface $filter
     * @return string
     */
    public function column(DiscountInterface $discount, FilterInterface $filter)
    {
        throw new \Exception(get_class($this) . ' must implement the ' . __FUNCTION__ . ' method.');
    }
}
