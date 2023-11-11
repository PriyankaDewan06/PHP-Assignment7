<?php 

$countries = \App\Models\Backend\BackendAdmin\Country::all();
$universities = \App\Models\Backend\BackendAdmin\UniversityList::all();
$courselists =  \App\Models\Backend\BackendAdmin\CourseList::all();


$applicantId= $userapplications->student_id;
$applicantinfo = \App\Models\Backend\BackendStudentProfile\UniversityApplication::all()->where('student_id', $applicantId);
//dd($applicantId);


 

?>
@extends('backend.BackendAdmin.layouts.master')
    @section('title')
       Message to User
    @endsection
@section('content')
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

            <div class="section-body">

          <div class="row mt-sm-4">

                <div class="col-12 col-md-12 col-lg-6">
                <div class="card">
                    <form method="post" class="needs-validation" novalidate="" action="{{route('admin.message.store')}}" >
                        @csrf
                    <div class="card-header">
                        <h4>Give Message to User</h4>
                    </div>
                    <div class="card-body ">
                            <div class="row">
                               
                                <div class="form-group col-6">
                                    <label>Applicant ID</label>
                                    <input type="text" name="user_id" class="form-control" value="{{$userapplications->student_id}}">

                                   </div>
                                <div class="form-group col-6">
                                    <label>Applicant Name</label>
                                    <input type="text" name="user_name" class="form-control" value="{{$userapplications->student_name}}">
                                   </div>
 
                                    <div class="form-group col-12">
                                     <label>Message</label>
                                        <textarea name="message" class="form-control" cols="100" rows="20">
                                        </textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer  text-right">
                        <button class="btn btn-primary offset-2">Send Message</button>
                    </div>
                    </form>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>University Applied by {{$userapplications->student_name}} </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group  col-12">
                                    <h4 class="text-center col-12"> University List </h4>  
                                    <table class="table  caption-top table-success table-striped">
                                    
                                    <tr>
                                        <th>Country Name</th>
                                        <th> University Name</th>
                                        <th>Course name</th>
                                    
                                    </tr>
                                    @foreach($applicantinfo as $applicant)
                                        
                                        <tr>
                                            <td>{{$applicant->country->name}}</td>
                                            <td>{{$applicant->university->uni_name}}</td>
                                            <td>{{$applicant->course->course_name}}</td>
                                @endforeach
                                        </tr>
                                </table>
                            </div>
                            </div>
                        </div>
                 </div>
                </div>
                </div>


            

          </div>
        </div>
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

