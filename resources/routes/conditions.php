<?php

return [
    'admin/discounts/conditions/{discount}'           => 'Anomaly\DiscountsModule\Http\Controller\Admin\ConditionsController@index',
    'admin/discounts/conditions/{discount}/choose'    => 'Anomaly\DiscountsModule\Http\Controller\Admin\ConditionsController@choose',
    'admin/discounts/conditions/{discount}/create'    => 'Anomaly\DiscountsModule\Http\Controller\Admin\ConditionsController@create',
    'admin/discounts/conditions/{discount}/edit/{id}' => 'Anomaly\DiscountsModule\Http\Controller\Admin\ConditionsController@edit'
];
