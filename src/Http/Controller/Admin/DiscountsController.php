<?php namespace Anomaly\DiscountsModule\Http\Controller\Admin;

use Anomaly\DiscountsModule\Discount\Contract\DiscountExtensionInterface;
use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\DiscountsModule\Discount\Contract\DiscountRepositoryInterface;
use Anomaly\DiscountsModule\Discount\DiscountExtension;
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
     * Choose the condition extension to use.
     *
     * @param ExtensionCollection $extensions
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function choose(ExtensionCollection $extensions)
    {
        $discounts = $extensions
            ->search('anomaly.module.discounts::discount.*')
            ->enabled();

        return $this->view->make(
            'anomaly.module.discounts::admin/discounts/choose',
            compact('discounts')
        );
    }

    /**
     * Create a new entry.
     *
     * @param DiscountFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ExtensionCollection $extensions)
    {
        /* @var DiscountExtension $extension */
        $extension = $extensions->get($this->request->get('discount'));

        return $extension->form()->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param DiscountFormBuilder $form
     * @param                     $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(DiscountRepositoryInterface $discounts, $id)
    {
        /* @var DiscountInterface $discount */
        $discount = $discounts->find($id);

        $extension = $discount->extension();

        return $extension->form()->render();
    }
}
