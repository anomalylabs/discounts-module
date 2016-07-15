<?php namespace Anomaly\DiscountsModule\Discount\Table;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
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
     * @param Repository           $config
     */
    public function handle(DiscountTableBuilder $builder, Repository $config)
    {
        $symbol = $config->get('streams::currencies.supported.' . $config->get('streams::currencies.default') . '.symbol');

        $builder->setColumns(
            [
                'name',
                'description',
                'code' => [
                    'wrapper' => '<pre>{value}</pre>'
                ],
                'amount' => [
                    'wrapper' => function(DiscountInterface $entry) use ($symbol) {
                        return ends_with($entry->getAmount(), '%') ? $entry->getAmount() : $symbol . $entry->getAmount();
                    }
                ],
                'entry.enabled.label',
            ]
        );
    }
}
