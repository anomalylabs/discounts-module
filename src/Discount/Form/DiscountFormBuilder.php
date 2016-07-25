<?php namespace Anomaly\DiscountsModule\Discount\Form;

use Anomaly\DiscountsModule\Discount\DiscountExtension;
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
     * @var DiscountExtension|null
     */
    protected $extension = null;

    /**
     * The skipped fields.
     *
     * @var array
     */
    protected $skips = [
        'extension',
    ];

    /**
     * Fired just before saving.
     */
    public function onSaving()
    {
        if ($extension = $this->getExtension()) {

            $entry = $this->getFormEntry();

            $entry->setAttribute('extension', $extension);
        }
    }

    /**
     * Get the extension.
     *
     * @return DiscountExtension
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set the discount.
     *
     * @param DiscountExtension $extension
     * @return $this
     */
    public function setExtension(DiscountExtension $extension)
    {
        $this->extension = $extension;

        return $this;
    }
}
