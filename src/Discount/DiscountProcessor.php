<?php namespace Anomaly\DiscountsModule\Discount;

use Anomaly\DiscountsModule\Discount\Contract\DiscountRepositoryInterface;

/**
 * Class DiscountProcessor
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class DiscountProcessor
{

    /**
     * The discount repository.
     *
     * @var DiscountRepositoryInterface
     */
    protected $discounts;

    /**
     * Create a new DiscountProcessor instance.
     *
     * @param DiscountRepositoryInterface $discounts
     */
    public function __construct(DiscountRepositoryInterface $discounts)
    {
        $this->discounts = $discounts;
    }

    /**
     * Process the item.
     *
     * @param $target
     */
    public function process($target)
    {
        $discounts = $this->discounts
            ->enabled()
            ->matching($target);

        $discounts->apply($target);
    }
}
