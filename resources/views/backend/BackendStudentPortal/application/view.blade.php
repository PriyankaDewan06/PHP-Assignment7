<?php
$countries = \App\Models\Backend\BackendAdmin\Country::all();
$universities = \App\Models\Backend\BackendAdmin\UniversityList::all();
$courselists =  \App\Models\Backend\BackendAdmin\CourseList::all()
?>
@extends('backend.BackendStudentPortal.layouts.master')
@section('title')
    View Application
@endsection

@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('backend.BackendStudentPortal.layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('backend.BackendStudentPortal.layouts.topbar')
                <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">View Application</h1>

                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
                    <div class="col-xl-12 col-lg-10">
                        <div class="card-body">
                       
                            <table class="table table-stripped">
                                <tr valign="center">
                                    {{-- <th >ID</th>  --}}
                                    <th >Name</th> 

                                    <th>Country</th>
                                    <th>University</th>
                                    {{-- <th>Course</th>   --}}
                                    <th>Course Name</th> 
                                    {{-- <th>Intake</th>  --}}
                                    {{-- <th>Tuition Fees</th> 
                                    <th>Duration</th> 
                                    <th>Priority</th>  --}}

                                    <th>Action</th>
                                   </tr>
                                   @foreach($applications as $application)
                                    <tr>
                                         {{-- <td>{{$application->student_id}}</td>  --}}
                                         <td>{{$application->student_name}}</td> 
                                        <td>{{$application->country->name}}</td>
                                        <td>{{$application->university->uni_name}}</td>
                                        {{-- <td>{{$application->course_id}}</td> --}}
                                        <td>{{ $application->course->course_name }}</td> 
                                        {{-- <td>{{ $application->intake }}</td> 
                                        <td>{{ $application->tuitionfees }}</td> 
                                        <td>{{ $application->duration }}</td> 
                                        <td>{{ $application->priority }}</td>  --}}


                                        <td>
                                            <a href="{{ route('application.edit',$application->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a> 
                                            <a href="{{ route('application.destroy',$application->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> 
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
