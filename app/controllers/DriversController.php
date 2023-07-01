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
		$drivers = Driver::all();
		echo view('driver.index', ['drivers' => $drivers]);
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
		// $row = Driver::find($id);
		// $row->column = requestData('column');
		// $row->save();
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($id)
	{
		// $row = Driver::find($id);
		// $row->delete();
	}
}