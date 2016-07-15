<?php namespace Anomaly\DiscountsModule\Http\Controller\Admin;

use Anomaly\ProductsModule\Product\Contract\ProductRepositoryInterface;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class TestController extends AdminController
{

    public function test(ProductRepositoryInterface $products, $id)
    {
        $product = $products->find($id);


    }
}
