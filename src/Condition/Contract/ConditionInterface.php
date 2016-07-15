<?php namespace Anomaly\DiscountsModule\Condition\Contract;

use Anomaly\DiscountsModule\Condition\Extension\Contract\ConditionExtensionInterface;
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
     * Get the extension.
     *
     * @return ConditionExtensionInterface
     */
    public function getExtension();
}
