@extends('master.master')
@section('title')
    Edit Post
@endsection

<body>
    @section('content')
    <div class="row">
        
        <div class="col-sm-6 offset-3 p-3  ">
            <div class="container-fluid">
                <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Update User</h1>

                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>
            <div class="col-xl-12 col-lg-10">
                <div class="card-body">
               
                    <form action="{{route('userlist.update', $users->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inputState">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$users->name}}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{$users->email}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="inputState">Role</label>
                            <select id="inputState" class="form-control" name="role">
                                    <option {{$users->role == '1' ? 'selected' : ''}} value="1">Admin</option>
                                    <option {{$users->role == '2' ? 'selected' : ''}} value="2">Manager</option>
                                    <option {{$users->role == '3' ? 'selected' : ''}} value="3">Employee</option>
                              
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" value="{{$users->password}}">
                        </div>
                        
                       
                        <button type="submmit" class="btn btn-primary">Update</button>
                    </form>
                    
                  </div>
            </div>
        </div>
        </div>
        @endsection
  
    
    </body>
    </html>
