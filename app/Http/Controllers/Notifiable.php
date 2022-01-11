<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;

class Notifiable extends Controller
{


    public function notify()
    {
        // $tasks = Task::select('user_id','title','work','reminderTime')->where('reminderTime','=',carbon::now()->toDateTimeString())->where('status','pending')->get();

        $tasks = Task::where('reminderTime', '<=', carbon::now()->toDateTimeString())->where('status', 'pending')->get();

        // dd($tasks);

        if (!$tasks->isEmpty()) {
            foreach ($tasks as $task) {

                $beamsClient = new \Pusher\PushNotifications\PushNotifications(array(
                    "instanceId" => "954c8cc3-aa4f-445d-b5a7-317d9f0e6758",
                    "secretKey" => "AAC4F66233D3B73FBB2D9384488D5CFEA8B09235C99D40E7DF5CC360DD48702A",
                ));

                $publishResponse = $beamsClient->publishToInterests(
                    array("hello"),
                    array(
                        "web" => array("notification" => array(
                            "title" => "Reminder Alert",
                            "body" => "Your this task is completed " . $task->title . " kindly look at it.",
                            "deep_link" => "https://www.pusher.com",
                        )),
                    )
                );
            }
        }
        return false;
    }



}
