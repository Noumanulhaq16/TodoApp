<?php

namespace App\Http\Controllers;
use Auth;
use Validator;
use App\Models\Task;
use App\Models\Category;


use Carbon\Carbon;


use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function addTask(Request $req){

        $validator = Validator::make(
            $req->all(),
            [
                'title' => 'required',
                'work' => 'required',
                'reminderTime' => 'required',
                'status'=>'required',
                'category'=>'required',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user = Auth::user();

        $task = new Task();
        $task->title = $req->title;
        $task->work = $req->work;
        $task->reminderTime = Carbon::parse($req->reminderTime)->format('Y-m-d H:i:s');
        $task->status = $req->status;
        $task->category_id = $req->category;
        $task->user_id=$user->id;
        $task->save();

        return redirect('dashboard')->with('status','Task Added');

    }

    public function edit($id){

        $user = Auth::User();
        $task =Task::where('id',$id)->first();
        $category = Category::select('id','category_name')->get();

    //   Carbon::createFromFormat('Y-m-d H:s:i',$task->reminderTime);
      $updatedformat= date('Y-m-d\TH:i',strtotime($task->reminderTime));



        return view('pages/updateTask',compact('task','updatedformat','category'));

    }

    public function updateTask(Request $req){

        $validator = Validator::make(
            $req->all(),
            [
                'title' => 'required',
                'work' => 'required',
                'reminderTime' => 'required',
                'status'=>'required',
                'category'=>'required',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }



            $task =Task::find($req->id);
            $task->title = $req->title;
            $task->work = $req->work;
            $task->reminderTime = Carbon::parse($req->reminderTime)->format('Y-m-d H:i:s');
            $task->status = $req->status;
            $task->category_id = $req->category;
            // $task->user_id=$user->id;
            $task->save();

            return redirect('dashboard')->with('message','Task Updated');
        }

    public function taskDelete($id){

            $task = Task::find($id);
            $task->delete();
            return redirect('dashboard')->with('status2','Task Deleted Successfully');

    }
}
