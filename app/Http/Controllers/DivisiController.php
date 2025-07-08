<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display the divisi page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('divisi');
    }
}