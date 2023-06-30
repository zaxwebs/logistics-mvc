<?php

app()->setNamespace('\App\Controllers');

app()->get('/', function () {
	echo view('index');
});

app()->get('/drivers/create', 'DriversController@create');