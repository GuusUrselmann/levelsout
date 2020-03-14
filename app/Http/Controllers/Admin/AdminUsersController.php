<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Task;
use App\User;
use Validator;

class AdminUsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('inertia.admin');
        // $this->middleware('admin');
    }

    public function Users()
    {
        $users = User::with('level:id,level');
        $users = $users->select(['id','name','description','email','level_id','userlevel'])->take(10)->get();
        //dd($users);
        return Inertia::render('Admin/Users/Users');
    }
}
