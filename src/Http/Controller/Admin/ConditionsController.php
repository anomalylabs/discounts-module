<?php namespace Anomaly\DiscountsModule\Http\Controller\Admin;

use Anomaly\DiscountsModule\Condition\Contract\ConditionInterface;
use Anomaly\DiscountsModule\Condition\Contract\ConditionRepositoryInterface;
use Anomaly\DiscountsModule\Condition\Extension\Contract\ConditionExtensionInterface;
use Anomaly\DiscountsModule\Condition\Extension\Form\ConditionExtensionFormBuilder;
use Anomaly\DiscountsModule\Condition\Table\ConditionTableBuilder;
use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\DiscountsModule\Discount\Contract\DiscountRepositoryInterface;
use Anomaly\Streams\Platform\Addon\Extension\ExtensionCollection;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class ConditionsController
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Http\Controller\Admin
 */
class ConditionsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ConditionTableBuilder       $table
     * @param DiscountRepositoryInterface $discounts
     * @param                             $discount
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ConditionTableBuilder $table, DiscountRepositoryInterface $discounts, $discount)
    {
        /* @var DiscountInterface $discount */
        if ($discount = $discounts->find($discount)) {
            $table->setDiscount($discount);
        }

        return $table->render();
    }

    /**
     * Choose the condition extension to use.
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

        $conditions = $extensions
            ->search('anomaly.module.discounts::condition.*')
            ->enabled();

        return $this->view->make(
            'anomaly.module.discounts::admin/conditions/choose',
            compact('conditions', 'discount')
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
        /* @var ConditionExtensionInterface $extension */
        $extension = $extensions->get($this->request->get('condition'));

        /* @var DiscountInterface $discount */
        $discount = $discounts->find($discount);

        /* @var ConditionExtensionFormBuilder $form */
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
     * @internal param ConditionFormBuilder $form
     */
    public function edit(
        DiscountRepositoryInterface $discounts,
        ConditionRepositoryInterface $conditions,
        $discount,
        $id
    ) {
        /* @var DiscountInterface $discount */
        $discount = $discounts->find($discount);

        /* @var ConditionInterface $condition */
        $condition = $conditions->find($id);

        /* @var ConditionExtensionInterface $extension */
        $extension = $condition->getExtension();

        /* @var ConditionExtensionFormBuilder $form */
        $form = $extension->form($discount, $condition);

        return $form->render();
    }
}
