<?php namespace Anomaly\DiscountsModule\Filter\Contract;

use Anomaly\DiscountsModule\Condition\Extension\ConditionExtension;
use Anomaly\DiscountsModule\Filter\Extension\FilterExtension;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface FilterInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Filter\Contract
 */
interface FilterInterface extends EntryInterface
{

    /**
     * Return the extension.
     *
     * @return ConditionExtension
     */
    public function extension();

    /**
     * Get the extension.
     *
     * @return FilterExtension
     */
    public function getExtension();
}
