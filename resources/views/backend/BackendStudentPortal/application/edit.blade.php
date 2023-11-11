<?php
$countries = \App\Models\Backend\BackendAdmin\Country::all();
$universities = \App\Models\Backend\BackendAdmin\UniversityList::all();
$courselists =  \App\Models\Backend\BackendAdmin\CourseList::all()
?>
@extends('backend.BackendStudentPortal.layouts.master')
@section('title')
   Edit Application
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

                <!-- Content Area Start -->
                <div id="layoutSidenav_content">
                    <main>
                        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                            <div class="container-xl px-4">
                                <div class="page-header-content">
                                    <div class="row align-items-center justify-content-between pt-3">
                                        <div class="col-auto mb-3">
                                            <h1 class="page-header-title">
                                                <div class="page-header-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg></div>
                                                    Edit Application
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Main page content-->
                        <div class="container-xl px-4 mt-4">
                            <div class="row">
                                <div class="col-xl-12">
                                    <!-- Form Start -->
                                    <form action="{{ route('application.update', $application->id) }}" method="post">
                                        @csrf

                                        <!-- Applying Universities card start-->
                                        <div class="card mb-4">
                                            <div class="card-header">Apply to University</div>
                                            <div class="card-body">

                                                <!-- Form Row -->
                                                <div class="row gx-3 mb-3">

                                                    <!-- Form Group (country) -->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputCountry">Choose Country
                                                        </label>
                                                        <select class="form-control" name="countryName" id="inputCountry">
                                                            <option value="">Select Country</option>
                                                                        
                                                                @foreach ($countries as $country)
                                                                <option {{$country->id == $application->country_id ? 'selected' : ''}} value="{{$country->id}}">{{$country->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <!-- Form Group (university) -->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputUniversity">Choose University
                                                        </label>
                                                        <select class="form-control" name="universityName"
                                                            id="inputUniversity">
                                                            <option value="">Select University</option>
                                                         
                                                            @foreach ($universities as $university)
                                                            <option {{$university->id == $application->university_id ? 'selected' : ''}} value="{{$university->id}}">{{$university->uni_name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>

                                                    <!-- Form Group (course) -->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="inputCourse">Choose Course
                                                        </label>
                                                        <select class="form-control" name="course_name" id="inputCourse">
                                                            <option value="">Select Course</option>
                                                          
                                                            @foreach ($courselists as $course)
                                                            <option {{$course->id == $application->course_id ? 'selected' : ''}} value="{{$course->id}}">{{$course->course_name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                     {{-- <!-- Form Group (Intake) -->
                                                     <div class="col-md-4">
                                                        <label class="small mb-1" for="">Intake
                                                        </label>
                                                        <input type="text" class="form-control" name="intake" id="" value="{{$application->intake}}" />
                                                         
                                                    </div>
                                                    <!-- Form Group (Tuition Fees) -->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="">Tuition Fees
                                                        </label>
                                                        <input type='text' class="form-control" name="tuitionfees" id="" value="{{$application->tuitionfees}}">
                                                    </div>
                                                    <!-- Form Group (Duration) -->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="">Duration
                                                        </label>
                                                        <input type='text' class="form-control" name="duration" id="" value="{{$application->duration}}">
                                                    </div>
                                                    <!-- Form Group (Priority) -->
                                                    <div class="col-md-4">
                                                        <label class="small mb-1" for="">Priority
                                                        </label>
                                                        <input type='text' class="form-control" name="priority" id="" value="{{$application->priority}}">
                                                    </div> --}}

                                                </div>

                                            </div>
                                        </div>

                                        <button class="btn btn-primary offset-md-5" type="submit">Update</button>
                                        <!-- Save changes button-->
                                    </form>
                                    <!-- Form End -->
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <!-- Content Area End -->

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
@section('js')
<script>
$(document).ready(function() {
    // get university by country
    $('#inputCountry').on('change', function() {
            var country_id = $(this).val();
        // $("#inputUniversity").html('');
        $.ajax({
            url:"/get-uni-by-country",
            type: "GET",
            data: {
            country_id: country_id,
            
            },
            // dataType : 'json',
            success: function(result){
                
                $('#inputUniversity').html('<option value="">Select University</option>'); 
                $.each(result.universities,function(key,value){
                    $("#inputUniversity").append('<option value="'+value.id+'">'+value.uni_name+'</option>');
                });
            }
        });  
    }); 

    // get course by university
    $('#inputUniversity').on('change', function() {
            var university_id = $(this).val();
            //alert(university_id);
        // $("#inputUniversity").html('');
        $.ajax({
            url:"/get-course-by-uni",
            type: "GET",
            data: {
                university_id: university_id,
            },
            // dataType : 'json',
            success: function(result){
                
                $('#inputCourse').html('<option value="">Select Course</option>'); 
                $.each(result.courselists,function(key,value){
                    $("#inputCourse").append('<option value="'+value.id+'">'+value.course_name+'</option>');
                    
                });
            }
        });  
    }); 
});  
</script>

@endsection