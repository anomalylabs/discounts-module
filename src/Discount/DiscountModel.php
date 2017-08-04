<?php namespace Anomaly\DiscountsModule\Discount;

use Anomaly\DiscountsModule\Condition\ConditionCollection;
use Anomaly\DiscountsModule\Condition\ConditionModel;
use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\DiscountsModule\Filter\FilterCollection;
use Anomaly\DiscountsModule\Filter\FilterModel;
use Anomaly\Streams\Platform\Model\Discounts\DiscountsDiscountsEntryModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class DiscountModel
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount
 */
class DiscountModel extends DiscountsDiscountsEntryModel implements DiscountInterface
{

    /**
     * Restrict to available discounts only.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeAvailable(Builder $query)
    {
        return $query
            ->where('enabled', true)
            ->where(
                function (Builder $query) {
                    $query
                        ->where('start_date', '<=', date('Y-m-d'))
                        ->orWhere('start_date', null);
                }
            );
    }

    /**
     * Get the slug.
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Get the scope.
     *
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Get the amount.
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Get the extension.
     *
     * @return DiscountExtension
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Return the discount extension.
     *
     * @return DiscountExtension
     */
    public function extension()
    {
        return $this
            ->getExtension()
            ->setDiscount($this);
    }

    /**
     * Get the filters.
     *
     * @return FilterCollection
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * Return the filters relationship.
     *
     * @return HasMany
     */
    public function filters()
    {
        return $this->hasMany(FilterModel::class, 'discount_id');
    }

    /**
     * Get the conditions.
     *
     * @return ConditionCollection
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Return the conditions relationship.
     *
     * @return HasMany
     */
    public function conditions()
    {
        return $this->hasMany(ConditionModel::class, 'discount_id');
    }
}
