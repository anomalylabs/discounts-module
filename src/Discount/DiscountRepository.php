<?php namespace Anomaly\DiscountsModule\Discount;

use Anomaly\DiscountsModule\Discount\Contract\DiscountRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class DiscountRepository extends EntryRepository implements DiscountRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var DiscountModel
     */
    protected $model;

    /**
     * Create a new DiscountRepository instance.
     *
     * @param DiscountModel $model
     */
    public function __construct(DiscountModel $model)
    {
        $this->model = $model;
    }
}
