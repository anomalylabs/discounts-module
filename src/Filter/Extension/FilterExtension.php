<?php namespace Anomaly\DiscountsModule\Filter\Extension;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\DiscountsModule\Filter\Contract\FilterInterface;
use Anomaly\DiscountsModule\Filter\Extension\Form\FilterExtensionFormBuilder;
use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class FilterExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class FilterExtension extends Extension
{

    /**
     * The filter instance.
     *
     * @var FilterInterface
     */
    protected $filter;

    /**
     * Return the form builder.
     *
     * @param DiscountInterface $discount
     * @param FilterInterface   $filter
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
     * @param DiscountInterface $discount
     * @param FilterInterface   $filter
     * @return string
     */
    public function column(DiscountInterface $discount, FilterInterface $filter)
    {
        throw new \Exception(get_class($this) . ' must implement the ' . __FUNCTION__ . ' method.');
    }

    /**
     * Return if the filter matches or not.
     *
     * @param $target
     * @return string
     */
    public function matches($target)
    {
        throw new \Exception(get_class($this) . ' must implement the ' . __FUNCTION__ . ' method.');
    }

    /**
     * Set the filter.
     *
     * @param FilterInterface $filter
     * @return $this
     */
    public function setFilter(FilterInterface $filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Get the filter.
     *
     * @return FilterInterface
     */
    public function getFilter()
    {
        return $this->filter;
    }
}
