@include('header')


@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    

                    <div class="col-md-12">
                    <form action="{{URL::route('movetask',array($task->id))}}" method="PATCH" class="form-horizontal">
                    {{ csrf_field() }}
                   
                    <h3>Edit Task {{ $task->id }} </h3>
                    <p class="category">{{ $task->title }}</p>
                    <!-- Project Name -->
                    
                    
                    <!-- Select Basic -->
<div class="form-group">
  <label class="col-sm-3 control-label" for="project">Choose New Project</label>
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


                    <!-- Add Project Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-edit"></i> Move Task
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