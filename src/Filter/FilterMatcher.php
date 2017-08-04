<?php namespace Anomaly\DiscountsModule\Filter;

use Anomaly\DiscountsModule\Filter\Contract\FilterInterface;

/**
 * Class FilterMatcher
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class FilterMatcher
{

    /**
     * The filter instance.
     *
     * @var FilterInterface
     */
    protected $filter;

    /**
     * Create a new FilterMatcher instance.
     *
     * @param FilterInterface $filter
     */
    public function __construct(FilterInterface $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Return if the filter matches or not.
     *
     * @param $target
     * @return bool
     */
    public function matches($target)
    {
        return $this->filter
            ->getExtension()
            ->matches($target);
    }
}
