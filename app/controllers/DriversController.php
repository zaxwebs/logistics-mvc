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
		$data = request()->body();

		$validation = form()->validate([
			'name' => 'text',
			'license_number' => 'number'
		]);

		if (!$validation) {
			session()->set('errors', form()->errors());
			app()->push("/drivers/create");
		} else {
			$driver = new Driver;
			$driver->name = $data['name'];
			$driver->contact_number = $data['contact_number'];
			$driver->license_number = $data['license_number'];
			$driver->vehicle_number = $data['vehicle_number'];
			$driver->save();
			flash()->set("Driver was successfully added.", "success");
			app()->push("/drivers");
		}
	}

	/**
	 * Display the specified resource.
	 */
	public function show($id)
	{
		$driver = Driver::find($id);
		echo view('driver.show', ['driver' => $driver]);
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
		$driver = Driver::find($id);
		$driver->delete();
		flash()->set("Driver was successfully deleted.", "success");
		app()->push("/drivers");
	}
}