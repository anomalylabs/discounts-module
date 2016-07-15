<?php

return [
    'admin/discounts'           => 'Anomaly\DiscountsModule\Http\Controller\Admin\DiscountsController@index',
    'admin/discounts/create'    => 'Anomaly\DiscountsModule\Http\Controller\Admin\DiscountsController@create',
    'admin/discounts/edit/{id}' => 'Anomaly\DiscountsModule\Http\Controller\Admin\DiscountsController@edit',
    'admin/discounts/test/{id}' => 'Anomaly\DiscountsModule\Http\Controller\Admin\TestController@test',
];
