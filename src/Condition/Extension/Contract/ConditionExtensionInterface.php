<?php namespace Anomaly\DiscountsModule\Condition\Extension\Contract;

use Anomaly\DiscountsModule\Condition\Contract\ConditionInterface;
use Anomaly\DiscountsModule\Condition\Extension\Form\ConditionExtensionFormBuilder;
use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;

/**
 * Interface ConditionExtensionInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Condition\Extension\Contract
 */
interface ConditionExtensionInterface
{

    /**
     * Return the form builder.
     *
     * @param DiscountInterface  $discount
     * @param ConditionInterface $condition
     * @return ConditionExtensionFormBuilder
     */
    public function form(DiscountInterface $discount, ConditionInterface $condition = null);

    /**
     * Return the column value for the table.
     *
     * @param DiscountInterface  $discount
     * @param ConditionInterface $condition
     * @return string
     */
    public function column(DiscountInterface $discount, ConditionInterface $condition);
}
