<?php namespace Anomaly\DiscountsModule\Filter;

use Anomaly\DiscountsModule\Filter\Contract\FilterRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class FilterRepository extends EntryRepository implements FilterRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var FilterModel
     */
    protected $model;

    /**
     * Create a new FilterRepository instance.
     *
     * @param FilterModel $model
     */
    public function __construct(FilterModel $model)
    {
        $this->model = $model;
    }
}
