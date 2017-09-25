@include('header')


@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    

                    <div class="col-md-12">
                    <form action="{{URL::route('addupdate',array($project->id))}}" method="PATCH" class="form-horizontal">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
                    <h3>Edit Project {{ $project->id }}</h3>
                    <p class="category">{{ $project->name }}</p>
                    <!-- Project Name -->
                    <div class="form-group">
                        <label for="Project" class="col-sm-3 control-label">Project Title</label>
        
                        <div class="col-sm-6">
                            <input type="text" name="title" id="title" placeholder="{{$project->title}}" class="form-control">
                        </div>
                    </div>
                    
                    <!-- Add Project Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-edit"></i> Edit Project
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