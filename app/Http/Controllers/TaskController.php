<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;
class TaskController extends Controller
{
    public function getAdd()
    {
      
      $projects = Project::get(['id','title']);
      
    return view('add_task',compact('id', 'projects'));
    }

    public function storeTask(Request $request)
    {
        $this->validate(request(),[
            //put fields to be validated here
            ]);        
            
       
        $addtask= new Task();
        $addtask->title= $request['task-title'];
        $addtask->name1= $request['name1'];
        $addtask->name2= $request['name2'];
        $addtask->description= $request['task-description'];
        $addtask->add_date= $request['creation_date'];
        $addtask->expiry_date= $request['expiry'];
        $addtask->project_id= $request['project'];
        
    // add other fields
    $addtask->save();

            
    return redirect('home')->with('message','Your have successfully added a task');
    }
    public function ShowProject()
    {
        $projects = Project::where('user_id', auth()->id())->get();
            
        //$authors = Project::with('tasks')->get();
        $tasks = Task::with('project')->get();
       
        
        //return view('author_list', compact('authors','books') ); 
            return view('view_tasks', compact('projects','tasks') );
        
    }
    public function edittask($id)
    {
        // get the nerd
        $task = Task::find($id);
        $projects = Project::get(['id','title']);
        // show the edit form and pass the nerd
        return view('edit_task', compact('task','id','projects') );
        //return View::make('edit_project')
           // ->with('project', $project);
    }
    public function updatetask($id,Request $request)
    {
    
        
        $updatetask= Task::find($id);
       // dd($updatetask);
       $updatetask->title= $request['task-title'];
       $updatetask->name1= $request['name1'];
       $updatetask->name2= $request['name2'];
       $updatetask->description= $request['task-description'];
       $updatetask->expiry_date= $request['expiry'];
       $updatetask->project_id= $request['project'];
        $updatetask->update();
        return redirect('viewtask')->with('message','You have successfully edited project');
    }
 
    public function viewmovetask($id)
    {
        // get the nerd
        $task = Task::find($id);
        $projects = Project::get(['id','title']);
        // show the edit form and pass the nerd
        return view('move_task', compact('task','id','projects') );
        //return Viewake('edit_project')
           // ->with('project', $project);
    }
    public function movetask($id,Request $request)
    {
    
        
        $updatetask= Task::find($id);
       // dd($updatetask);
       
       $updatetask->project_id= $request['project'];
        $updatetask->update();
        return redirect('viewtask')->with('message','You have successfully moved task');
    }
    public function complete($id){
    $completetask= Task::find($id);
    
    
    $completetask->complete= 1;
     $completetask->update();
     return redirect('viewtask')->with('message','You have successfully marked task as complete');
 }
    public function getDelete($id){
        
            $tasks = Task::find($id)->delete();
        
            return redirect('viewtask')->with('message','You have successfully deleted task');
            
          }
}
