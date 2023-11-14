<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * index
     *
     * @param  mixed $request
     * @return \Illuminate\Http\View
     */
    public function index(): View
    {
        return view('pages.backend.dashboard.index');
    }
}
