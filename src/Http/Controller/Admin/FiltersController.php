<?php namespace Anomaly\DiscountsModule\Http\Controller\Admin;

use Anomaly\DiscountsModule\Filter\Form\FilterFormBuilder;
use Anomaly\DiscountsModule\Filter\Table\FilterTableBuilder;
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
     * @param FilterTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(FilterTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param FilterFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(FilterFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param FilterFormBuilder $form
     * @param                   $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(FilterFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
