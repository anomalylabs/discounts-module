<?php namespace Anomaly\DiscountsModule\Condition\Extension;

use Anomaly\DiscountsModule\Condition\Extension\Contract\ConditionExtensionInterface;
use Anomaly\DiscountsModule\Condition\Extension\Form\ConditionExtensionFormBuilder;
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
     * @return ConditionExtensionFormBuilder
     */
    public function form()
    {
        throw new \Exception(get_class($this) . ' must implement the form method.');
    }
}
