<?php namespace Anomaly\DiscountsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class DiscountsModuleServiceProvider
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule
 */
class DiscountsModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon singletons.
     *
     * @var array
     */
    protected $singletons = [
        'Anomaly\DiscountsModule\Discount\Contract\DiscountRepositoryInterface' => 'Anomaly\DiscountsModule\Discount\DiscountRepository'
    ];
}
