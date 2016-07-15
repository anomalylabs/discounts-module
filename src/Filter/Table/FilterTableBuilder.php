<?php namespace Anomaly\DiscountsModule\Filter\Table;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\Streams\Platform\Ui\Table\TableBuilder;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class FilterTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Filter\Table
 */
class FilterTableBuilder extends TableBuilder
{

    /**
     * The discount instance.
     *
     * @var null|DiscountInterface
     */
    protected $discount = null;

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * Fired just before querying.
     *
     * @param Builder $query
     */
    public function onQuerying(Builder $query)
    {
        if ($discount = $this->getDiscount()) {
            $query->where('discount_id', $discount->getId());
        }
    }

    /**
     * Get the discount.
     *
     * @return DiscountInterface|null
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the discount.
     *
     * @param DiscountInterface $discount
     * @return $this
     */
    public function setDiscount(DiscountInterface $discount)
    {
        $this->discount = $discount;

        return $this;
    }
}
