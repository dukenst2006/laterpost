<?php

namespace Laterpost\Http\Controllers;

class AppController extends Controller
{
    /**
     * AppController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Dashboard View.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }
}