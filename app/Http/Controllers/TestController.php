<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ToDoController extends Controller
{
   // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('todo.index');
    }

}

