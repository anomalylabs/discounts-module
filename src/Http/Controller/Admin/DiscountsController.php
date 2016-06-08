<?php namespace Anomaly\DiscountsModule\Http\Controller\Admin;

use Anomaly\DiscountsModule\Discount\Form\DiscountFormBuilder;
use Anomaly\DiscountsModule\Discount\Table\DiscountTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

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
     * Create a new entry.
     *
     * @param DiscountFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(DiscountFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param DiscountFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(DiscountFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
