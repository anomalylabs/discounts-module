<?php namespace Anomaly\DiscountsModule\Condition\Form;

use Anomaly\DiscountsModule\Condition\Extension\Contract\ConditionExtensionInterface;
use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class ConditionFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Condition\Form
 */
class ConditionFormBuilder extends FormBuilder
{

    /**
     * The form fields.
     *
     * @var array
     */
    protected $skips = [
        'extension',
        'discount',
    ];

    /**
     * The discount instance.
     *
     * @var null|DiscountInterface
     */
    protected $discount = null;

    /**
     * The extension instance.
     *
     * @var null|ConditionExtensionInterface
     */
    protected $extension = null;

    /**
     * Fired just before saving.
     */
    public function onSaving()
    {
        $entry = $this->getFormEntry();

        if (!$entry->exists) {
            $entry
                ->setAttribute('discount', $this->getDiscount())
                ->setAttribute('extension', $this->getExtension());
        }
    }

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

    /**
     * Get the extension.
     *
     * @return ConditionExtensionInterface|null
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set the extension.
     *
     * @param ConditionExtensionInterface $extension
     * @return $this
     */
    public function setExtension(ConditionExtensionInterface $extension)
    {
        $this->extension = $extension;

        return $this;
    }
}
