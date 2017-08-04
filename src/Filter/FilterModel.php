<?php namespace Anomaly\DiscountsModule\Filter;

use Anomaly\DiscountsModule\Filter\Contract\FilterInterface;
use Anomaly\DiscountsModule\Filter\Extension\FilterExtension;
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
     * Return the extension.
     *
     * @return FilterExtension
     */
    public function extension()
    {
        return $this
            ->getExtension()
            ->setFilter($this);
    }

    /**
     * Get the extension.
     *
     * @return FilterExtension
     */
    public function getExtension()
    {
        return $this->extension;
    }
}
