<?php

app()->setNamespace('\App\Controllers');

app()->get('/', function () {
	echo view('index');
});