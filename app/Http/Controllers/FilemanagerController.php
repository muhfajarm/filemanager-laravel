<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilemanagerController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('collage.filemanager.index');
    }
}
