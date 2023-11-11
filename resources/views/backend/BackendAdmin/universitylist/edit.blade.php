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
                            <h1 class="h3 mb-0 text-gray-800">Add University</h1>
    
                            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                        </div>
                        <div class="col-xl-12 col-lg-10">
                            <div class="card-body">
                           
                                <form action="{{route('admin.universitylist.update', $universitylist->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="inputState">Country</label>
                                        <select id="inputState" class="form-control" name="country">
                                          <option value="">Select</option>
                                          @foreach ($countries as $country)
                                            <option {{$country->id == $universitylist->country_id ? 'selected' : ''}} value="{{$country->id}}">{{$country->name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>University Name</label>
                                        <input type="text" class="form-control" name="uni_name" value="{{$universitylist->uni_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>University Location</label>
                                        <input type="text" class="form-control" name="uni_location" value="{{$universitylist->uni_location}}">
                                    </div>
                                    <div class="form-group">
                                        <label>University Picture</label>
                                        <img width="200" src="{{asset($universitylist->universitypic)}}" alt="" />
                                        <input type="file" class="form-control" name="universitypic">

                                    </div>

                                    <div class="form-group">
                                        <label for="inputState">Status</label>
                                        <select id="inputState" class="form-control" name="status">
                                                <option {{$universitylist->status == 'Active' ? 'selected' : ''}} value="Active">Active</option>
                                                <option {{$universitylist->status == 'Inactive' ? 'selected' : ''}} value="Inactive">Inactive</option>
                                                 
                                          
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
    