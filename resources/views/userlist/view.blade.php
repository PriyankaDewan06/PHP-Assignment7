@extends('master.master')
@section('title')
    User List
@endsection
<body>
    @section('content')
    <div class="row">
        
        <div class="col-sm-6  offset-3 p-3  ">
            <div class="card-body">
                           
                <table class="table table-stripped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>

                       </tr>
                       @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                          
                            <td>
                                <a href="{{ route('userlist.edit',$user->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('userlist.destroy',$user->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                           </td>
                            @endforeach
                        </tr>
                </table>
              </div>
        </div>
        
      </div>

              
      
  
      @endsection  
</html>
