<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Task;
use Validator;

class AdminDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('inertia.admin');
        // $this->middleware('admin');
    }

    public function dashboard()
    {
         return Inertia::render('Admin/Dashboard/Dashboard', [
             'user' => Auth::user()
         ]);
    }
}
