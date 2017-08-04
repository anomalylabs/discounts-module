<?php namespace Anomaly\DiscountsModule\Filter;

use Anomaly\DiscountsModule\Filter\Contract\FilterInterface;
use Anomaly\Streams\Platform\Entry\EntryCollection;

/**
 * Class FilterCollection
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class FilterCollection extends EntryCollection
{

    /**
     * Return if any filters match or not.
     *
     * @param $target
     * @return bool
     */
    public function match($target)
    {
        return (bool)$this->first(
            function (FilterInterface $filter) use ($target) {
                return (new FilterMatcher($filter))->matches($target);
            }
        );
    }
}
