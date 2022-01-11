<?php

namespace App\Http\Controllers;
use App\Models\Task;
use app\Models\User;

use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function showFilterPage()
    {
        $task=Task::all();
        return view('pages.filter',compact('task'));
    }

    public function filter(Request $req)
    {


        $task=Task::where('reminderTime','>=',$req->from)->where('reminderTime','<=',$req->to)->get();
        return view('pages.filter',compact('task'));

    }
}
