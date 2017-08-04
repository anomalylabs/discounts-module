<?php namespace Anomaly\DiscountsModule\Condition\Contract;

use Anomaly\DiscountsModule\Condition\Extension\ConditionExtension;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Interface ConditionInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Condition\Contract
 */
interface ConditionInterface extends EntryInterface
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
     * @return ConditionExtension
     */
    public function getExtension();
}
