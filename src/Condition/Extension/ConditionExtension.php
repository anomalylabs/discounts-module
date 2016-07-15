<?php namespace Anomaly\DiscountsModule\Condition\Extension;

use Anomaly\DiscountsModule\Condition\Contract\ConditionInterface;
use Anomaly\DiscountsModule\Condition\Extension\Contract\ConditionExtensionInterface;
use Anomaly\DiscountsModule\Condition\Extension\Form\ConditionExtensionFormBuilder;
use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class ConditionExtension
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Condition\Extension
 */
class ConditionExtension extends Extension implements ConditionExtensionInterface
{

    /**
     * Return the form builder.
     *
     * @param DiscountInterface  $discount
     * @param ConditionInterface $condition
     * @return ConditionExtensionFormBuilder
     * @throws \Exception
     */
    public function form(DiscountInterface $discount, ConditionInterface $condition = null)
    {
        throw new \Exception(get_class($this) . ' must implement the ' . __FUNCTION__ . ' method.');
    }

    /**
     * Return the column value for the table.
     *
     * @param DiscountInterface  $discount
     * @param ConditionInterface $condition
     * @return string
     */
    public function column(DiscountInterface $discount, ConditionInterface $condition)
    {
        throw new \Exception(get_class($this) . ' must implement the ' . __FUNCTION__ . ' method.');
    }
}
