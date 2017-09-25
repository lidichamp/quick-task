@include('header')


@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    

                    <div class="col-md-12">
                    <form action="{{ route('storetask') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
        
                    <!-- Task Names -->
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Task Title</label>
        
                        <div class="col-sm-6">
                            <input type="text" name="task-title" id="task-title" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Other name 1</label>
        
                        <div class="col-sm-6">
                            <input type="text" name="name1" id="name1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Other name 2</label>
        
                        <div class="col-sm-6">
                            <input type="text" name="name2" id="name2" class="form-control">
                        </div>
                    </div>
                    <!-- Task description-->
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Task Description</label>
        
                        <div class="col-sm-6">
                            <textarea rows="5" name="task-description" id="task-description" class="form-control"></textarea>
                        </div>
                    </div>

                    <!-- Project -->
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
<!--Task creation date using carbon-->
<input type="hidden" name="creation_date" value="{{Carbon\Carbon::today()->format('Y-m-d')}}" />
                    <!-- Task expiry date-->
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Task Deadline</label>
        
                        <div class="col-sm-6">
                            <input type="date" name="expiry" id="expiry" class="form-control">
                        </div>
                    </div>
                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> Add Task
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