<?php

namespace App\Controllers;

use App\Models\Driver;

class DriversController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		echo view('driver.index');
		/*
								|--------------------------------------------------------------------------
								|
								| This is an example which retrieves all the data (rows)
								| from our model. You can un-comment it to use this
								| example
								|
								*/
		// response(Driver::all());
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		//
		echo view('driver.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store()
	{
		/*
								|--------------------------------------------------------------------------
								|
								| This is an example which deletes a particular row. 
								| You can un-comment it to use this example
								|
								*/
		// $row = new Driver;
		// $row->column = requestData('column');
		// $row->delete();
	}

	/**
	 * Display the specified resource.
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update($id)
	{
		/*
								|--------------------------------------------------------------------------
								|
								| This is an example which edits a particular row. 
								| You can un-comment it to use this example
								|
								*/
		// $row = Driver::find($id);
		// $row->column = requestData('column');
		// $row->save();
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($id)
	{
		/*
								|--------------------------------------------------------------------------
								|
								| This is an example which deletes a particular row. 
								| You can un-comment it to use this example
								|
								*/
		// $row = Driver::find($id);
		// $row->delete();
	}
}