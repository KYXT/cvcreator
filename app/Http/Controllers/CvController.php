<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store()
    {
        return redirect()
            ->route('part');
    }

    public function part()
    {
        return view('part');
    }

}
