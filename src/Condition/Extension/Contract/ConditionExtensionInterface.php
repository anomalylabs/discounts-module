<?php namespace Anomaly\DiscountsModule\Condition\Extension\Contract;

use Anomaly\DiscountsModule\Condition\Extension\Form\ConditionExtensionFormBuilder;

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
     * @return ConditionExtensionFormBuilder
     */
    public function form();
}
