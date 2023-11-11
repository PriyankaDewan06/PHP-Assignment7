<?php
$countries = \App\Models\Backend\BackendAdmin\Country::all();
$universities = \App\Models\Backend\BackendAdmin\UniversityList::all();
?>
@extends('backend.BackendAdmin.layouts.master')
    @section('title')
       Message List
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
                            <h1 class="h3 mb-0 text-gray-800">Message List</h1>
    
                            <a href="{{ route('admin.userapplication.view')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">View Applicant List</a>
                        </div>
                        <div class="col-xl-12 col-lg-10">
                            <div class="card-body">
                           
                                <table class="table table-striped">
                                    <tr>
                                        <th>ID</th>
                                        <th>User ID</th>
                                        <th>Message</th>
                                        <th>Message Time</th>
                                        <th>Action</th> 
                                      </tr>
                                       @foreach($messages as $message)
                                        <tr>
                                             <td>{{$message->id}}</td>
                                             <td>{{$message->user_id}}</td>
                                            <td>{{$message->message}}</td>
                                            <td>{{$message->created_at}}</td>

                                            <td>
                                                 <a href="{{ route('admin.message.edit',$message->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                 <a href="{{ route('admin.message.destroy',$message->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
    