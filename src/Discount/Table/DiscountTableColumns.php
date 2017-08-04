<?php namespace Anomaly\DiscountsModule\Discount\Table;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;

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
                    'wrapper' => function(DiscountInterface $entry) {
                return $entry->hasCode() ? '<code>{value}</code>' : null;
                    },
                ],
                'entry.enabled.label',
            ]
        );
    }
}
