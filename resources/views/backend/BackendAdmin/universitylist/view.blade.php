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
                            <h1 class="h3 mb-0 text-gray-800">View University</h1>
    
                            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                        </div>
                        <div class="col-xl-12 col-lg-10">
                            <div class="card-body">
                           
                                <table class="table table-stripped">
                                    <tr>
                                        <th>Country</th>
                                        {{-- <th>Country Name</th> --}}
                                        <th>University Name</th>
                                        <th>University Location</th>
                                        <th>University Image</th>

                                        <th>Status</th> 
                                        <th>Action</th> 
                                       </tr>
                                       @foreach($universitylists as $universitylist)
                                        <tr>
                                            {{-- <td>{{$universitylist->country_id}}</td> --}}
                                           
                                            <td>{{$universitylist->country->name}}</td>
                                         
                                            <td>{{$universitylist->uni_name}}</td>
                                            <td>{{$universitylist->uni_location}}</td>
                                            <td><img width='100px' src="{{asset($universitylist->universitypic)}}"></td>
                                            
                                            <td>
                                                    @if($universitylist->status==1)
                                                    <a href="{{ Route('admin.status',$universitylist->id) }}" class="btn btn-success btn-sm">Active</a>
                                                @else
                                                    <a href={{ Route('admin.status',$universitylist->id) }}" class="btn btn-warning btn-sm">Inactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                 <a href="{{ route('admin.universitylist.edit',$universitylist->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                 <a href="{{ route('admin.universitylist.destroy',$universitylist->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
    