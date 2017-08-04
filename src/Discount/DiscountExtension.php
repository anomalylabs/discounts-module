<?php namespace Anomaly\DiscountsModule\Discount;

use Anomaly\DiscountsModule\Discount\Command\GetFormBuilder;
use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\DiscountsModule\Discount\Form\DiscountExtensionFormBuilder;
use Anomaly\StoreModule\Contract\OrderInterface;
use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class DiscountExtension
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount
 */
class DiscountExtension extends Extension
{

    /**
     * The discount interface.
     *
     * @var DiscountInterface
     */
    protected $discount;

    /**
     * Return the form builder.
     *
     * @return DiscountExtensionFormBuilder
     */
    public function form()
    {
        return $this->dispatch(new GetFormBuilder($this, $this->discount));
    }

    /**
     * Calculate the discount.
     *
     * @param OrderInterface $order
     * @return float
     */
    public function calculate(OrderInterface $order)
    {
        throw new \Exception(__CLASS__ . "must implement " . __METHOD__);
    }

    /**
     * Get the discount.
     *
     * @return DiscountInterface
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
