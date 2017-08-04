<?php namespace Anomaly\DiscountsModule\Discount;

/**
 * Class DiscountOperator
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class DiscountOperator
{

    /**
     * Compare two values with a string operator.
     *
     * @param $comparator
     * @param $operator
     * @param $value
     * @return bool
     * @throws \Exception
     */
    public static function compare($comparator, $operator, $value)
    {
        switch ($operator) {
            case 'equal_to':
                return $comparator == $value;
            case 'not_equal_to':
                return $comparator != $value;
            case 'greater_than':
                return $comparator > $value;
            case 'less_than':
                return $comparator < $value;
            case 'equal_to_or_greater_than':
                return $comparator >= $value;
            case 'equal_to_or_less_than':
                return $comparator <= $value;
            default;
        }

        throw new \Exception("The operator [{$operator}] is invalid.");
    }
}
