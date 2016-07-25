<?php namespace Anomaly\DiscountsModule\Discount\Table;

use Illuminate\Contracts\Config\Repository;

/**
 * Class DiscountTableColumns
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Discount\Table
 */
class DiscountTableColumns
{

    /**
     * Handle the command.
     *
     * @param DiscountTableBuilder $builder
     */
    public function handle(DiscountTableBuilder $builder)
    {
        $builder->setColumns(
            [
                'name',
                'description',
                'code' => [
                    'wrapper' => '<pre>{value}</pre>'
                ],
                'entry.enabled.label',
            ]
        );
    }
}
