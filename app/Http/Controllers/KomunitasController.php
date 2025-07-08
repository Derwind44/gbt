<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    /**
     * Display the komunitas page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('komunitas');
    }
}