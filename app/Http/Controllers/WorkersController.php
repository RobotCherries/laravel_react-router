<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkersController extends Controller
{
    /**
     * Require authentication in order to view page
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view()
    {
        return view('dashboard.workers.view');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add()
    {
        return view('dashboard.workers.add');
    }
}
