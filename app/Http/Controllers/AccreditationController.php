<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccreditationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('akreditasi.index');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
