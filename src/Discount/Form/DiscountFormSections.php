<?php namespace Anomaly\DiscountsModule\Discount\Form;

use Illuminate\Contracts\Config\Repository;

/**
 * Class DiscountFormSections
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount\Form
 */
class DiscountFormSections
{

    /**
     * Handle the command.
     *
     * @param DiscountFormBuilder $builder
     */
    public function handle(DiscountFormBuilder $builder)
    {
        $builder->setSections(
            [
                'general'  => [
                    'fields' => [
                        'name',
                        'slug',
                        'description',
                    ],
                ],
                'discount' => [
                    'fields' => [
                        'amount',
                        'code',
                        'scope',
                    ],
                ],
                'options'  => [
                    'fields' => [
                        'enabled',
                        'limit_per_coupon',
                        'limit_per_customer',
                        'allowed_customer_groups',
                    ],
                ]
            ]
        );
    }
}
