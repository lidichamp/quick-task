@include('header')


@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    

                    <div class="col-md-12">
                    <div class="card ">
                    <div class="header">
                        <h4 class="title">Tasks</h4>
                        
                    </div>
                    <div class="content">
                    @if (Session::has('error'))
        <div class="alert alert-danger alert-auth small">
          <button class="close" data-dismiss-"alert" type="button">X
          </button>
            {{session('error')}}
        </div>
      @endif
@if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
@endif
                        <div class="table-full-width">
                            <table class="table">
                                <tbody>
                                Order tasks: <a href ="{{ action('TaskController@ShowProjectAscending')}}" >        <button type="button" rel="tooltip" title="sort by closer to deadline" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-sort-amount-asc"></i>
                                            </button></a><a href ="{{ action('TaskController@ShowProjectDescending')}}">        <button type="button" rel="tooltip" title="sort by farthest from deadline" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-sort-amount-desc"></i>
                                            </button></a>
                                <td class="text-primary"> status</td>
                                    <td class="text-primary">Title</td>
                                    <td class="text-primary">Name 1</td>
                                    <td class="text-primary">Name 2</td>
                                    <td class="text-primary">Details</td>
                                    <td class="text-primary">Created</td>
                                    <td class="text-primary">Deadline</td>
                                    <td class="text-primary">Project</td>
                                    <td class="text-primary">Actions</td>
                                
                                    <tr>
                                    @foreach($tasks as $task)
                                  <!--  <td>
                                            <label class="checkbox">
                                                <input type="checkbox" value="1" data-toggle="checkbox">
                                            </label>
                                            
                                        </td>-->
                                         @if ($task->complete==1)
                                        
                                        <td>complete</td>
                                        @else
                                        <td>Pending</td>
                                        @endif
                                        <td> {{$task->title}} </td>
                                        <td> {{$task->name1}}</td>
                                        <td>  {{$task->name2}}</td>
                                        <td> {{$task->description}}</td>
                                        <td> {{$task->add_date}}</td>
                                        <td> {{$task->expiry_date}}</td>
                                       <td> {{$task->project->title}}</td>
                                        <td class="td-actions text-right">
                                        <a href ="{{URL::route('viewmovetask',array($task->id))}}" >    
                                        <a href ="{{URL::route('complete',array($task->id))}}" >     <button type="button" rel="tooltip" title="Complete" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-check"></i></button></a>
                                            <button type="button" rel="tooltip" title="Move Task" class="btn btn-primary btn-simple ">
                                                 <i class="pe-7s-way"></i>
                                             </button></a>
                                        <a href ="{{URL::route('edittask',array($task->id))}}" >       
                                         <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                 <i class="fa fa-edit"></i>
                                             </button></a>
                                             <a href ="{{URL::route('deletetask',array($task->id))}}" >     
                                             <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                 <i class="fa fa-times"></i>
                                             </button></a>
                                         </td><br>
                                        
                                     </tr>
                                     @endforeach
                                    
                                 </tbody>
                             </table>
                         </div>
 
                         <div class="footer">
                             <hr>
                             <div class="stats">
                                 <i class="fa fa-history"></i> Updated 3 minutes ago
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
                 </div>
 
 
 
                 
 
                     
         @include('footer')