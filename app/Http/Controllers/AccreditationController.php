<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccreditationController extends Controller
{
	public function index(Request $request)
	{
		return view('collage.accreditation.index');
	}

	public function store(Request $request)
	{
		dd($request->all());
	}
}
