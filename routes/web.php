<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/keygen', function() {
    echo str_random(32);
});


//CRUD WITH COMPANIES

$router->get('/companies', 'CompaniesController@showAllCompanies');
$router->get('/companies/{id}', 'CompaniesController@getCompanyById');
$router->post('/companies','CompaniesController@create');
$router->put('/companies/{id}','CompaniesController@update');
$router->delete('/companies/{id}','CompaniesController@delete');
// $router->get('/companies/types/{type}', 'CompaniesController@getCompanyByType');




//CRUD WITH EMPLYEES

$router->get('/employees','EmployeesController@showAllEmployees');
$router->get('/employees/{id}', 'EmployeesController@showEmployeeById');
$router->post('/employees','EmployeesController@create');
$router->put('/employees/{id}','EmployeesController@update');
$router->delete('/employees/{id}','EmployeesController@delete');
// $router->get('/employees?job={job}', 'EmployeesController@showEmployeeByJob');