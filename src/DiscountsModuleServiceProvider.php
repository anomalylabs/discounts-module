<?php namespace Anomaly\DiscountsModule;

use Anomaly\CartsModule\Cart\CartProcessor;
use Anomaly\CartsModule\Item\ItemProcessor;
use Anomaly\DiscountsModule\Condition\ConditionModel;
use Anomaly\DiscountsModule\Condition\ConditionRepository;
use Anomaly\DiscountsModule\Condition\Contract\ConditionRepositoryInterface;
use Anomaly\DiscountsModule\Discount\Contract\DiscountRepositoryInterface;
use Anomaly\DiscountsModule\Discount\DiscountModel;
use Anomaly\DiscountsModule\Discount\DiscountProcessor;
use Anomaly\DiscountsModule\Discount\DiscountRepository;
use Anomaly\DiscountsModule\Filter\Contract\FilterRepositoryInterface;
use Anomaly\DiscountsModule\Filter\FilterModel;
use Anomaly\DiscountsModule\Filter\FilterRepository;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Model\Discounts\DiscountsConditionsEntryModel;
use Anomaly\Streams\Platform\Model\Discounts\DiscountsDiscountsEntryModel;
use Anomaly\Streams\Platform\Model\Discounts\DiscountsFiltersEntryModel;

/**
 * Class DiscountsModuleServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class DiscountsModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon bindings.
     *
     * @var array
     */
    protected $bindings = [
        DiscountsFiltersEntryModel::class    => FilterModel::class,
        DiscountsDiscountsEntryModel::class  => DiscountModel::class,
        DiscountsConditionsEntryModel::class => ConditionModel::class,
    ];

    /**
     * The addon singletons.
     *
     * @var array
     */
    protected $singletons = [
        FilterRepositoryInterface::class    => FilterRepository::class,
        DiscountRepositoryInterface::class  => DiscountRepository::class,
        ConditionRepositoryInterface::class => ConditionRepository::class,
    ];

    /**
     * Boot the addon.
     *
     * @param CartProcessor $carts
     * @param ItemProcessor $items
     */
    public function boot(CartProcessor $carts, ItemProcessor $items)
    {
        $carts->addProcessor(DiscountProcessor::class);
        $items->addProcessor(DiscountProcessor::class);
    }
}
