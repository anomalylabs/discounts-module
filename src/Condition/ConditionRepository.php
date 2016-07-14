<?php namespace Anomaly\DiscountsModule\Condition;

use Anomaly\DiscountsModule\Condition\Contract\ConditionRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class ConditionRepository extends EntryRepository implements ConditionRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var ConditionModel
     */
    protected $model;

    /**
     * Create a new ConditionRepository instance.
     *
     * @param ConditionModel $model
     */
    public function __construct(ConditionModel $model)
    {
        $this->model = $model;
    }
}
