<?php

namespace App\Controllers;

use App\Models\Package;

class PackagesController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{

		// response(Package::all());
		echo view('package');
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store()
	{

		// $row = new Package;
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
		// $row = Package::find($id);
		// $row->column = requestData('column');
		// $row->save();
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($id)
	{
		// $row = Package::find($id);
		// $row->delete();
	}
}