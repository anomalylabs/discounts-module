<?php namespace Anomaly\DiscountsModule\Filter\Extension\Form;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\Streams\Platform\Ui\Form\Multiple\MultipleFormBuilder;

/**
 * Class FilterExtensionFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Filter\Extension\Form
 */
class FilterExtensionFormBuilder extends MultipleFormBuilder
{

    /**
     * The discount instance.
     *
     * @var null|DiscountInterface
     */
    protected $discount = null;

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
