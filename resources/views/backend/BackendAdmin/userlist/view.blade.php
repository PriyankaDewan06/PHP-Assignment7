@extends('backend.BackendAdmin.layouts.master')
    @section('title')
       User List
    @endsection
    @section('content')
     <!-- Page Wrapper -->
     <div id="wrapper">
  
        <!-- Sidebar -->
        @include('backend.BackendAdmin.layouts.sidebar')
        <!-- End of Sidebar -->
    
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
    
            <!-- Main Content -->
            <div id="content">
    
                <!-- Topbar -->
                @include('backend.BackendAdmin.layouts.topbar')
                <!-- End of Topbar -->
    
               
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                            <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">User List</h1>
    
                            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                        </div>
                        <div class="col-xl-12 col-lg-10">
                            <div class="card-body">
                           
                                <table class="table table-stripped">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Country</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                       </tr>
                                       @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->address}}</td>
                                            

                                            <td>
                                                @if($user->status == 1)
                                                <a href="{{ Route('admin.userlist.userstatus',$user->id) }}" class="btn btn-success btn-sm">Active</a>
                                            @else
                                                <a href="{{ Route('admin.userlist.userstatus',$user->id) }}" class="btn btn-warning btn-sm">Inactive</a>
                                            @endif
                                        </td>
                                            <td>
                                                <a href="{{ route('admin.userlist.edit',$user->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                <a href="{{ route('admin.userlist.destroy',$user->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                           </td>
                                            @endforeach
                                        </tr>
                                </table>
                              </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
      
               
      
              </div>
              <!-- End of Main Content -->
      
              <!-- Footer -->
              @include('backend.BackendStudentPortal.layouts.footer')
              <!-- End of Footer -->
      
          </div>
          <!-- End of Content Wrapper -->
      
      </div>
      <!-- End of Page Wrapper -->
      
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
      </a>
    @endsection
    