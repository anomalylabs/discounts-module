<?php namespace Anomaly\DiscountsModule\Condition;

use Anomaly\DiscountsModule\Condition\Contract\ConditionInterface;
use Anomaly\DiscountsModule\Condition\Extension\Contract\ConditionExtensionInterface;
use Anomaly\Streams\Platform\Model\Discounts\DiscountsConditionsEntryModel;

/**
 * Class ConditionModel
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Condition
 */
class ConditionModel extends DiscountsConditionsEntryModel implements ConditionInterface
{

    /**
     * Get the extension.
     *
     * @return ConditionExtensionInterface
     */
    public function getExtension()
    {
        return $this->extension;
    }
}
