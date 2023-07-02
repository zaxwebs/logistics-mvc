<?php

namespace App\Controllers;

use App\Models\User;

class UsersController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$users = User::all();
		echo view('user.index', ['users' => $users]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		//
		echo view('user.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store()
	{
		// $data = request()->body();

		// $validation = form()->validate([
		// 	'name' => 'text',
		// 	'license_number' => 'number'
		// ]);

		// if (!$validation) {
		// 	session()->set('errors', form()->errors());
		// 	app()->push("/Users/create");
		// } else {
		// 	$User = new User;
		// 	$User->name = $data['name'];
		// 	$User->contact_number = $data['contact_number'];
		// 	$User->license_number = $data['license_number'];
		// 	$User->vehicle_number = $data['vehicle_number'];
		// 	$User->save();
		// 	flash()->set("User was successfully added.", "success");
		// 	app()->push("/Users");
		// }
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
		// $row = User::find($id);
		// $row->column = requestData('column');
		// $row->save();
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($id)
	{
		$User = User::find($id);
		$User->delete();
		flash()->set("User was successfully deleted.", "success");
		app()->push("/Users");
	}
}