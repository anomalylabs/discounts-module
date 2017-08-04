<?php namespace Anomaly\DiscountsModule\Filter\Form;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\DiscountsModule\Filter\Extension\FilterExtension;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class FilterFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Filter\Form
 */
class FilterFormBuilder extends FormBuilder
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
     * @var null|FilterExtension
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
     * @return FilterExtension|null
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set the extension.
     *
     * @param FilterExtension $extension
     * @return $this
     */
    public function setExtension(FilterExtension $extension)
    {
        $this->extension = $extension;

        return $this;
    }
}
