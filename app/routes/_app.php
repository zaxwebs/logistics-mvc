<?php

app()->setNamespace('\App\Controllers');

app()->get('/', function () {
	echo view('index');
});

app()->get('/drivers', 'DriversController@index');
app()->get('/drivers/create', 'DriversController@create');
app()->post('/drivers', 'DriversController@store');
app()->get('/drivers/{id}', 'DriversController@show');
app()->post('/drivers/{id}/delete', 'DriversController@destroy');
app()->get('/shipments', 'ShipmentsController@index');
app()->get('/shipments/create', 'ShipmentsController@create');
app()->get('/users', 'UsersController@index');
app()->get('/assignments', 'AssignmentsController@index');
app()->get('/assignments/create', 'AssignmentsController@create');
app()->get('/packages', 'PackagesController@index');
app()->get('/dashboard', function () {
	echo view('dashboard');
});