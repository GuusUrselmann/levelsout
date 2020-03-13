<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Level;

class AppHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('inertia.app');
    }

    public function home()
    {
        $user = Auth::user();
        $level_step = ceil($user->level()/4)*4-4;
        $levels = Level::where('level', '>', $level_step)->take(4)->get();
        return Inertia::render('App/Home/Home', [
            'levels' => $levels
        ]);
    }
}
