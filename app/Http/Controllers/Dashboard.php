<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Auth;

class Dashboard extends Controller
{
    //
    function dashboard()

    {
        // $tasks = Task::select('user_id','title','work','reminderTime')->where('reminderTime','=',carbon::now()->toDateTimeString())->where('status','pending')->get();
        // dd(carbon::now()->toDateTimeString().$tasks);




        // $task = Task::where('user_id',Auth::user()->id)->leftjoin('categories','categories.id','tasks.category_id')->select
        // (
        //     'tasks.id as id',
        //     'categories.category_name as category',
        //     'tasks.title as title',
        //     'tasks.status as status',
        //     'tasks.work as work',
        //     'tasks.reminderTime as reminderTime',

        // )->get();

        // $users =Task::whereNotNull('reminderTime')->get();
        // dd($users);
        $task = Task::with('category')->where('user_id',Auth::user()->id)->get();
        // dd($tasks);

        return view('pages.index',compact('task'));
    }




    public function showAddTask()
    {
       $category = Category::all();
       return view('pages.addtask',compact('category'));
    }

}
