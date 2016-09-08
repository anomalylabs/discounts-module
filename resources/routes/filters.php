<?php

return [
    'admin/discounts/filters/{discount}'           => 'Anomaly\DiscountsModule\Http\Controller\Admin\FiltersController@index',
    'admin/discounts/filters/{discount}/choose'    => 'Anomaly\DiscountsModule\Http\Controller\Admin\FiltersController@choose',
    'admin/discounts/filters/{discount}/create'    => 'Anomaly\DiscountsModule\Http\Controller\Admin\FiltersController@create',
    'admin/discounts/filters/{discount}/edit/{id}' => 'Anomaly\DiscountsModule\Http\Controller\Admin\FiltersController@edit',
];
