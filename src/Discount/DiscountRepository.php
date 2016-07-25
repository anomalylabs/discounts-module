<?php namespace Anomaly\DiscountsModule\Discount;

use Anomaly\DiscountsModule\Discount\Contract\DiscountRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

/**
 * Class DiscountRepository
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount
 */
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

    /**
     * Return only enabled discounts.
     *
     * @param bool $enabled
     * @return DiscountCollection
     */
    public function enabled()
    {
        return $this->model->available()->where('enabled', true)->get();
    }
}
