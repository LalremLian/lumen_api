<?php

// Show ALL products
$router->get('/products', 'ProductController@index');

//show Each Products By ID
$router->get('/products/{id}', 'ProductController@show');

//store products
$router->post('/products/create', 'ProductController@store');

//update products
$router->post('/products/update/{id}', 'ProductController@update');

// Delete
$router->delete('/products/delete/{id}', 'ProductController@destroy');


$router->get('/', function () use ($router) {
    return $router->app->version();
});
