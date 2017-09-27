<?php
use App\Task;
use App\Project;
use Carbon\Carbon;
 function getTimetodeadline()
  {
    if( Auth::check())
    {
         $project = Project::where('id', Auth::user()->id)->get(['id']);
         $tasks = Task::with('project')->get();
         
         foreach ($tasks as $task){
          
         $time=(Carbon::now())->diffInHours(Carbon::parse($task->expiry_date),false);
        
         if ( $time<=24 ) {
            
            // add this to send a notification
           

           $notificationmessage="your task -{$task->title}- expires in less than 1 day";
         return $notificationmessage;
         }
         
        
     }
   
    //view()->share('amount', $cart_item->amount);
    }}
  ?>