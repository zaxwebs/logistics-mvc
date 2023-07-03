<?php

namespace App\Controllers;

use App\Models\Assignment;

class AssignmentsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$assignments = Assignment::with('driver')->get();
		echo view('assignment.index', ['assignments' => $assignments]);
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
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($id)
	{
	}
}