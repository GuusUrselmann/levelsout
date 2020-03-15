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
        $search = $request->has('search') ? $request->search : '';
        $search = '%'.$search.'%';
        $search_fields = $request->has('searchfields') ? $request->searchfields : false;
        $users = User::with('level:id,level')->select(['id','name','description','email','level_id','userlevel']);
        if($search_fields) {
            foreach($search_fields as $i=>$field) {
                if($i == 0) {
                    $users = $users->where($field, 'like', $search);
                }
                else {
                    $users = $users->orWhere($field, 'like', $search);
                }
            }
        }
        $users = $users->limit($amount)->get();
        return [
            'data' => $users
        ];
    }


}
