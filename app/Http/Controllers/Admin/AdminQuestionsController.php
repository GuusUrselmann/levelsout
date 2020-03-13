<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Question;
use Validator;

class AdminQuestionsController extends Controller
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

    public function questions()
    {
         return Inertia::render('Admin/Questions/Questions', [
             'questions' => Question::all()
         ]);
    }
}
