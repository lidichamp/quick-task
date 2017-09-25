@include('header')


@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">.
                    

                    <div class="col-md-12">
                    <div class="card ">
                    <div class="header">
                        <h4 class="title">Projects</h4>
                        
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
                                @foreach($projects as $project)
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                            </label>
                                        </td>
                                        <td>{{$project->title}}</td>
                                        <td class="td-actions text-right">
                                        <a href ="{{URL::route('getproject',array($project->id))}}" >        <button type="button" rel="tooltip" title="View Project" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-eye"></i>
                                            </button></a>
                                       <a href ="{{URL::route('editproject',array($project->id))}}" >        <button type="button" rel="tooltip" title="Edit Project" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button></a>
                                            <a href ="{{URL::route('deleteproject',array($project->id))}}" >     <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button></a>
                                        </td>
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