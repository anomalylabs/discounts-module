<?php namespace Anomaly\DiscountsModule\Discount\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class DiscountMultipleFormSections
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount\Form
 */
class DiscountMultipleFormSections
{

    /**
     * @param DiscountMultipleFormBuilder $builder
     */
    public function handle(DiscountMultipleFormBuilder $builder)
    {
        /* @var DiscountFormBuilder $discount */
        /* @var FormBuilder $extension */
        $discount  = $builder->getChildForm('discount');
        $extension = $builder->getChildForm('condition');

        $builder->setSections(
            [
                'discount' => [
                    'title'  => 'anomaly.module.discounts::title.discount',
                    'fields' => $discount->getFormFieldSlugs('discount_')
                ]
            ]
        );

        if ($extension) {
            $builder->addSection(
                'conditions',
                [
                    'context' => 'info',
                    'title'   => 'anomaly.module.discounts::title.conditions',
                    'fields'  => $extension->getFormFieldSlugs('condition_')
                ]
            );
        }
    }
}
