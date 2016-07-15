<?php namespace Anomaly\DiscountsModule\Filter\Contract;

use Anomaly\DiscountsModule\Filter\Extension\Contract\FilterExtensionInterface;
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
     * Get the extension.
     *
     * @return FilterExtensionInterface
     */
    public function getExtension();
}
