<?php namespace Anomaly\DiscountsModule\Discount\Command;

use Anomaly\ConfigurationModule\Configuration\Form\ConfigurationFormBuilder;
use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\DiscountsModule\Discount\DiscountExtension;
use Anomaly\DiscountsModule\Discount\Form\DiscountExtensionFormBuilder;
use Anomaly\DiscountsModule\Discount\Form\DiscountFormBuilder;


/**
 * Class GetFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount\Command
 */
class GetFormBuilder
{

    /**
     * The discount interface.
     *
     * @var DiscountInterface
     */
    protected $discount;

    /**
     * The discount extension.
     *
     * @var DiscountExtension
     */
    protected $extension;

    /**
     * Create a new GetFormBuilder instance.
     *
     * @param DiscountExtension $extension
     * @param DiscountInterface $discount
     */
    public function __construct(DiscountExtension $extension, DiscountInterface $discount = null)
    {
        $this->discount  = $discount;
        $this->extension = $extension;
    }

    /**
     * Handle the command.
     *
     * @param DiscountExtensionFormBuilder $builder
     * @param ConfigurationFormBuilder     $configuration
     * @param DiscountFormBuilder          $discount
     * @return DiscountExtensionFormBuilder
     */
    public function handle(
        DiscountExtensionFormBuilder $builder,
        ConfigurationFormBuilder $configuration,
        DiscountFormBuilder $discount
    ) {
        $builder->addForm('discount', $discount->setExtension($this->extension)->setEntry($this->discount));
        $builder->addForm('configuration', $configuration->setEntry($this->extension->getNamespace()));

        if ($this->discount) {
            $configuration->setScope($this->discount->getSlug());
        } else {
            $configuration->on(
                'saving',
                function () use ($configuration) {

                    /* @var DiscountInterface $entry */
                    $entry = $this->discount->getId();

                    $configuration->setScope($entry->getSlug());
                }
            );
        }

        return $builder;
    }
}
