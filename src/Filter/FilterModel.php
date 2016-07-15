<?php namespace Anomaly\DiscountsModule\Filter;

use Anomaly\DiscountsModule\Filter\Contract\FilterInterface;
use Anomaly\DiscountsModule\Filter\Extension\Contract\FilterExtensionInterface;
use Anomaly\Streams\Platform\Model\Discounts\DiscountsFiltersEntryModel;

/**
 * Class FilterModel
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Filter
 */
class FilterModel extends DiscountsFiltersEntryModel implements FilterInterface
{

    /**
     * Get the extension.
     *
     * @return FilterExtensionInterface
     */
    public function getExtension()
    {
        return $this->extension;
    }
}
