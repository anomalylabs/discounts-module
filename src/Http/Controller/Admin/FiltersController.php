<?php namespace Anomaly\DiscountsModule\Http\Controller\Admin;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\DiscountsModule\Discount\Contract\DiscountRepositoryInterface;
use Anomaly\DiscountsModule\Filter\Contract\FilterInterface;
use Anomaly\DiscountsModule\Filter\Contract\FilterRepositoryInterface;
use Anomaly\DiscountsModule\Filter\Extension\Contract\FilterExtensionInterface;
use Anomaly\DiscountsModule\Filter\Extension\Form\FilterExtensionFormBuilder;
use Anomaly\DiscountsModule\Filter\Table\FilterTableBuilder;
use Anomaly\Streams\Platform\Addon\Extension\ExtensionCollection;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class FiltersController
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Http\Controller\Admin
 */
class FiltersController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param FilterTableBuilder          $table
     * @param DiscountRepositoryInterface $discounts
     * @param                             $discount
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(FilterTableBuilder $table, DiscountRepositoryInterface $discounts, $discount)
    {
        /* @var DiscountInterface $discount */
        if ($discount = $discounts->find($discount)) {
            $table->setDiscount($discount);
        }

        return $table->render();
    }

    /**
     * Choose the filter extension to use.
     *
     * @param ExtensionCollection         $extensions
     * @param DiscountRepositoryInterface $discounts
     * @param                             $discount
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function choose(ExtensionCollection $extensions, DiscountRepositoryInterface $discounts, $discount)
    {
        /* @var DiscountInterface $discount */
        $discount = $discounts->find($discount);

        $filters = $extensions
            ->search('anomaly.module.discounts::filter.*')
            ->enabled();

        return $this->view->make(
            'anomaly.module.discounts::admin/filters/choose',
            compact('filters', 'discount')
        );
    }

    /**
     * Create a new entry.
     *
     * @param DiscountRepositoryInterface $discounts
     * @param                             $discount
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(DiscountRepositoryInterface $discounts, ExtensionCollection $extensions, $discount)
    {
        /* @var FilterExtensionInterface $extension */
        $extension = $extensions->get($this->request->get('filter'));

        /* @var DiscountInterface $discount */
        $discount = $discounts->find($discount);

        /* @var FilterExtensionFormBuilder $form */
        $form = $extension->form($discount);

        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param DiscountRepositoryInterface $discounts
     * @param                             $discount
     * @param                             $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @internal param FilterFormBuilder $form
     */
    public function edit(
        DiscountRepositoryInterface $discounts,
        FilterRepositoryInterface $filters,
        $discount,
        $id
    ) {
        /* @var DiscountInterface $discount */
        $discount = $discounts->find($discount);

        /* @var FilterInterface $filter */
        $filter = $filters->find($id);

        /* @var FilterExtensionInterface $extension */
        $extension = $filter->getExtension();

        /* @var FilterExtensionFormBuilder $form */
        $form = $extension->form($discount, $filter);

        return $form->render();
    }
}
