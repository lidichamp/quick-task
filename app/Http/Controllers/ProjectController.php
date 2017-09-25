<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class ProjectController extends Controller
{
    public function getView()
    {
      
        
          
    return view('create_project');
    }
    public function storeProject(Request $request)
    {
        $this->validate(request(),[
            //put fields to be validated here
            ]);         
       
        $addProject= new Project();
        $addProject->title= $request['title'];
        $addProject->user_id= $request['user_id'];
    // add other fields
    $addProject->save();

            
    return redirect('home')->with('message','You have successfully added project');
    }
    public function ShowProject()
    {
        $projects = Project::where('user_id', auth()->id())->get();
            
            return view('view_projects', compact('projects') );
        
    }
    public function editProject($id)
    {
        
        $project = Project::find($id);

       
        return view('edit_project', compact('project') );
      
    }
    public function UpdateProject($id,Request $request)
    {
    
        
        $updateproject= Project::find($id);
       // dd($updateproject);
        $updateproject->title= $request['title'];
        $updateproject->user_id= $request['user_id'];
        $updateproject->save();
        return redirect('viewproject')->with('message','You have successfully edited project');
    }
    
    public function getProjectascending($id)
    {
        
        //$projects = Project::find($id)->with('tasks')->get();
        $projects = Project::find($id);
        dd($projects);
        $tasks = Task::with('project')->orderBy('expiry_date', 'ASC')->get();
       dd($tasks);
        
        return view('project_asc', compact('projects','tasks') );
    }
    

    public function getProject($id)
    {
        
        //$projects = Project::find($id)->with('tasks')->get();
        $projects = Project::find($id);
        //dd($projects);
        $tasks = Task::with('project')->get();
       
        
        return view('project_listed', compact('projects','tasks') );
    }
    public function getDelete($id){
        
            $aprojects = Project::find($id)->delete();
        
            return redirect('viewproject')->with('message','You have successfully deleted project');
            
          }
}
