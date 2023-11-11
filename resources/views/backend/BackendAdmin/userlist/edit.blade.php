<?php
$countries = \App\Models\Backend\BackendAdmin\Country::all();
$universities = \App\Models\Backend\BackendAdmin\UniversityList::all();
?>
@extends('backend.BackendAdmin.layouts.master')
    @section('title')
       University List
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
                            <h1 class="h3 mb-0 text-gray-800">Update User</h1>
    
                            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                        </div>
                        <div class="col-xl-12 col-lg-10">
                            <div class="card-body">
                           
                                <form action="{{route('admin.userlist.update', $users->id)}}" method="POST">
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
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{$users->phone}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" value="{{$users->address}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password" value="{{$users->password}}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputState">Status</label>
                                        <select id="inputState" class="form-control" name="status">
                                                <option {{$users->status == 'Active' ? 'selected' : ''}} value="Active">Active</option>
                                                <option {{$users->status == 'Inactive' ? 'selected' : ''}} value="Inactive">Inactive</option>
                                                 
                                          
                                        </select>
                                    </div>
                                    <button type="submmit" class="btn btn-primary">Update</button>
                                </form>
                                
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
    