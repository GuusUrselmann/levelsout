<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

class GuestHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('inertia.guest');
    }

    public function home()
    {
        return Inertia::render('Guest/Home/Home');
    }
    public function about()
    {
        return Inertia::render('Guest/Home/About');
    }
}
