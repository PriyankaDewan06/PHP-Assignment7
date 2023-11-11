<?php
$countries = \App\Models\Backend\BackendAdmin\Country::all();
$university_lists = \App\Models\Backend\BackendAdmin\UniversityList::all();
?>
@extends('backend.BackendAdmin.layouts.master')
    @section('title')
       Course List
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
                            <h1 class="h3 mb-0 text-gray-800">Update Course</h1>
    
                            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                        </div>
                        <div class="col-xl-12 col-lg-10">
                            <div class="card-body">
                           
                                <form action="{{route('admin.courselist.update', $courselist->id)}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="inputCountry">Country</label>
                                        <select  class="form-control" name="country" id="inputCountry">
                                          <option value="">Select Country</option>
                                          @foreach ($countries as $country)
                                          <option {{$country->id == $courselist->country_id ? 'selected' : ''}} value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUniversity">University Name</label>
                                        <select  class="form-control" name="uni_id" id="inputUniversity">
                                            <option value="">Select University</option>
                                        @foreach ($university_lists as $university)
                                        <option {{$university->id == $courselist->uni_id ? 'selected' : ''}} value="{{$university->id}}">{{$university->uni_name}}</option>
                                    @endforeach
                                       
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Course Name</label>
                                        <input type="text" class="form-control" name="course_name" value="{{$courselist->course_name}}" placeholder="Insert Course Name">
                                    </div>
                                    <!-- Form Group (Intake) -->
                                    <div class="form-group">
                                        <label class="small mb-1" for="">Intake
                                        </label>
                                        <input type="text" class="form-control" name="intake" id="" value="{{$courselist->intake}}" />
                                         
                                    </div>
                                    <!-- Form Group (Tuition Fees) -->
                                    <div class="form-group">
                                        <label class="small mb-1" for="">Tuition Fees
                                        </label>
                                        <input type='text' class="form-control" name="tuitionfees" id="" value="{{$courselist->tuitionfees}}">
                                    </div>
                                    <!-- Form Group (Duration) -->
                                    <div class="form-group">
                                        <label class="small mb-1" for="">Duration
                                        </label>
                                        <input type='text' class="form-control" name="duration" id="" value="{{$courselist->duration}}">
                                    </div>
                                    <!-- Form Group (Priority) -->
                                    <div class="form-group">
                                        <label class="small mb-1" for="">Priority
                                        </label>
                                        <input type='text' class="form-control" name="priority" id="" value="{{$courselist->priority}}">
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
    @section('js')
    <script>
    jQuery(document).ready(function() {
        // get university by country
        jQuery('#inputCountry').change(function() {
                let country_id = jQuery(this).val();
                // alert(country_id)
            $("#inputUniversity").html('');
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
    
        
    });  
    </script>
    @endsection