<?php namespace Anomaly\DiscountsModule\Http\Controller\Admin;

use Anomaly\DiscountsModule\Discount\Contract\DiscountExtensionInterface;
use Anomaly\DiscountsModule\Discount\Form\DiscountFormBuilder;
use Anomaly\DiscountsModule\Discount\Form\DiscountMultipleFormBuilder;
use Anomaly\DiscountsModule\Discount\Table\DiscountTableBuilder;
use Anomaly\Streams\Platform\Addon\Extension\ExtensionCollection;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class DiscountsController
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Http\Controller\Admin
 */
class DiscountsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param DiscountTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(DiscountTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * @param ExtensionCollection $extensions
     * @return \Illuminate\Contracts\View\View|mixed|object
     */
    public function choose(ExtensionCollection $extensions)
    {
        $extensions = $extensions->search('anomaly.module.discounts::discount.*');

        return $this->view->make('anomaly.module.discounts::admin/discounts/choose', compact('extensions'));
    }

    /**
     * Create a new entry.
     *
     * @param DiscountFormBuilder|DiscountMultipleFormBuilder $form
     * @param DiscountFormBuilder                             $discount
     * @param ExtensionCollection                             $extensions
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(
        DiscountMultipleFormBuilder $form,
        DiscountFormBuilder $discount,
        ExtensionCollection $extensions
    ) {
        /* @var DiscountExtensionInterface $extension */
        $extension = $extensions->get($this->request->get('extension'));

        $form->addForm('discount', $discount->setExtension($extension));

        $extension->integrate($form);

        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param DiscountFormBuilder $form
     * @param                     $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(DiscountFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
