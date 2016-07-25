<?php namespace Anomaly\DiscountsModule\Discount\Form;

use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class DiscountExtensionFormSections
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount\Form
 */
class DiscountExtensionFormSections implements SelfHandling
{

    /**
     * Handle the command.
     *
     * @param DiscountExtensionFormBuilder $builder
     */
    public function handle(DiscountExtensionFormBuilder $builder)
    {
        $builder->setSections(
            [
                'discount' => [
                    'fields' => [
                        'discount_name',
                        'discount_slug',
                        'discount_description',
                        'discount_code',
                    ],
                ],
                'action'   => [
                    'fields' => $builder->getChildFormFieldSlugs('configuration', 'configuration_'),
                ],
                'options'  => [
                    'fields' => [
                        'discount_enabled',
                        'discount_limit_per_coupon',
                        'discount_limit_per_customer',
                        'discount_start_date',
                        'discount_end_date',
                    ],
                ]
            ]
        );
    }
}
