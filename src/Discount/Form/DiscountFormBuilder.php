<?php namespace Anomaly\DiscountsModule\Discount\Form;

use Anomaly\DiscountsModule\Discount\Contract\DiscountExtensionInterface;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class DiscountFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount\Form
 */
class DiscountFormBuilder extends FormBuilder
{

    /**
     * The discount extension.
     *
     * @var DiscountExtensionInterface
     */
    protected $extension;

    /**
     * Fields to skip.
     *
     * @var array|string
     */
    protected $skips = [
        'used',
        'extension',
    ];

    /**
     * Fired just before saving.
     */
    public function onSaving()
    {
        $rate = $this->getFormEntry();

        if ($extension = $this->getExtension()) {
            $rate->setAttribute('extension', $extension);
        }
    }

    /**
     * Get the extension.
     *
     * @return DiscountExtensionInterface
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set the extension.
     *
     * @param DiscountExtensionInterface $extension
     * @return $this
     */
    public function setExtension(DiscountExtensionInterface $extension)
    {
        $this->extension = $extension;

        return $this;
    }
}
