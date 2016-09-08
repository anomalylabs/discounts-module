<?php namespace Anomaly\DiscountsModule\Filter\Table;

use Anomaly\DiscountsModule\Filter\Contract\FilterInterface;

/**
 * Class FilterTableColumns
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Filter\Table
 */
class FilterTableColumns
{

    /**
     * Handle the command.
     *
     * @param FilterTableBuilder $builder
     */
    public function handle(FilterTableBuilder $builder)
    {
        $builder->setColumns(
            [
                [
                    'heading' => 'anomaly.module.discounts::field.filter.name',
                    'value'   => function (FilterInterface $entry) use ($builder) {

                        $extension = $entry->getExtension();

                        return $extension->column($builder->getDiscount(), $entry);
                    },
                ],
            ]
        );
    }
}
