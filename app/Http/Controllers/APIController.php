<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class APIController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function dataTableusers(Request $request)
    {
        $amount = $request->has('amount') ? $request->amount : 0;
        $offset = $request->has('offset') ? $request->offset : 0;
        $users = User::with('level:id,level')->select(['id','name','description','email','level_id','userlevel'])->limit($amount)->get();
        return [
            'data' => $users,
            'request' => $request->all()
        ];
    }


}
