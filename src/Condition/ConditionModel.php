<?php namespace Anomaly\DiscountsModule\Condition;

use Anomaly\DiscountsModule\Condition\Contract\ConditionInterface;
use Anomaly\DiscountsModule\Condition\Extension\ConditionExtension;
use Anomaly\Streams\Platform\Model\Discounts\DiscountsConditionsEntryModel;

/**
 * Class ConditionModel
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ConditionModel extends DiscountsConditionsEntryModel implements ConditionInterface
{

    /**
     * Get the extension.
     *
     * @return ConditionExtension
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Return the extension.
     *
     * @return ConditionExtension
     */
    public function extension()
    {
        return $this
            ->getExtension()
            ->setCondition($this);
    }
}
