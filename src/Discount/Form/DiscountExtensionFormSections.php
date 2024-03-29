<?php namespace Anomaly\DiscountsModule\Discount\Form;


/**
 * Class DiscountExtensionFormSections
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount\Form
 */
class DiscountExtensionFormSections
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
                        'discount_start_date',
                        'discount_end_date',
                    ],
                ],
            ]
        );
    }
}
