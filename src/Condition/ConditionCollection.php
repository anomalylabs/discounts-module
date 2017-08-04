<?php namespace Anomaly\DiscountsModule\Condition;

use Anomaly\DiscountsModule\Condition\Contract\ConditionInterface;
use Anomaly\Streams\Platform\Entry\EntryCollection;

/**
 * Class ConditionCollection
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ConditionCollection extends EntryCollection
{

    /**
     * Return if any conditions match or not.
     *
     * @param $target
     * @return bool
     */
    public function match($target)
    {
        return (bool)$this->first(
            function (ConditionInterface $condition) use ($target) {
                return (new ConditionMatcher($condition))->matches($target);
            }
        );
    }
}
