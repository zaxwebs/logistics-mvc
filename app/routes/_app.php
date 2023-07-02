<?php

app()->setNamespace('\App\Controllers');

app()->get('/', function () {
	echo view('index');
});

app()->get('/drivers', 'DriversController@index');
app()->get('/drivers/create', 'DriversController@create');
app()->post('/drivers', 'DriversController@store');
app()->post('/drivers/{id}/delete', 'DriversController@destroy');
app()->get('/shipments', 'ShipmentsController@index');
app()->get('/shipments/create', 'ShipmentsController@create');