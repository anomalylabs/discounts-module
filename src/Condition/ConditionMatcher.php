<?php namespace Anomaly\DiscountsModule\Condition;

use Anomaly\DiscountsModule\Condition\Contract\ConditionInterface;

/**
 * Class ConditionMatcher
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ConditionMatcher
{

    /**
     * The condition instance.
     *
     * @var ConditionInterface
     */
    protected $condition;

    /**
     * Create a new ConditionMatcher instance.
     *
     * @param ConditionInterface $condition
     */
    public function __construct(ConditionInterface $condition)
    {
        $this->condition = $condition;
    }

    /**
     * Return if the condition matches or not.
     *
     * @param $target
     * @return bool
     */
    public function matches($target)
    {
        return $this->condition
            ->getExtension()
            ->matches($target);
    }
}
