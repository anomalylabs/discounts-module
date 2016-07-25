<?php namespace Anomaly\DiscountsModule\Discount;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\Streams\Platform\Model\Discounts\DiscountsDiscountsEntryModel;
use Illuminate\Database\Eloquent\Builder;

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
     * Return the discount extension.
     *
     * @return DiscountExtension
     */
    public function extension()
    {
        $extension = $this->getExtension();

        $extension->setDiscount($this);

        return $extension;
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
}
