<?php namespace Anomaly\DiscountsModule\Condition\Table;

use Anomaly\DiscountsModule\Condition\Contract\ConditionInterface;

/**
 * Class ConditionTableColumns
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\DiscountsModule\Condition\Table
 */
class ConditionTableColumns
{

    /**
     * Handle the command.
     *
     * @param ConditionTableBuilder $builder
     */
    public function handle(ConditionTableBuilder $builder)
    {
        $builder->setColumns(
            [
                [
                    'heading' => 'anomaly.module.discounts::field.condition.name',
                    'value'   => function (ConditionInterface $entry) use ($builder) {

                        $extension = $entry->getExtension();

                        return $extension->column($builder->getDiscount(), $entry);
                    },
                ],
            ]
        );
    }
}
