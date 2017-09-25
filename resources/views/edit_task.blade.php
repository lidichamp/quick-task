@include('header')


@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    

                    <div class="col-md-12">
                    <form action="{{URL::route('updatetask',array($task->id))}}" method="PATCH" class="form-horizontal">
                    {{ csrf_field() }}
                   
                    <h3>Edit Task {{ $task->id }} </h3>
                    <p class="category">{{ $task->name }}</p>
                    <!-- Project Name -->
                    
                    <div class="form-group">
                        <label for="Project" class="col-sm-3 control-label">Task Title</label>
        
                        <div class="col-sm-6">
                            <input type="text" name="task-title" id="task-title" placeholder="{{$task->title}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Project" class="col-sm-3 control-label">Task other names</label>
        
                        <div class="col-sm-6">
                            <input type="text" name="task-title" id="task-title" placeholder="{{$task->name1}},{{$task->name2}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Project" class="col-sm-3 control-label">Task Description</label>
        
                        <div class="col-sm-6">
                            <textarea rows="5" name="task-description" id="task-description" placeholder="{{$task->description}}" class="form-control"></textarea>
                        </div>
                    </div>
                    <!-- Select Basic -->
<div class="form-group">
  <label class="col-sm-3 control-label" for="project">Project Category</label>
  <div class="col-md-4">
  <div class="form-group">
    
    
</div>
    
    <select id="project" name="project" class="form-control">
    @foreach($projects as $project)
    <option value="{{$project->id}}">{{$project->title}}</option>
    @endforeach
    </select>
  </div>
</div>

<div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Task Deadline</label>
        
                        <div class="col-sm-6">
                            <input type="date" name="expiry" id="expiry" placeholder="{{$task->expiry_date}}"class="form-control">
                        </div>
                    </div>
                    <!-- Add Project Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-edit"></i> Edit Task
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
                </div>



                

                    
        @include('footer')