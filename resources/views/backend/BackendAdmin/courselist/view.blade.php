<?php
$countries = \App\Models\Backend\BackendAdmin\Country::all();
$universities = \App\Models\Backend\BackendAdmin\UniversityList::all();

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
                            <h1 class="h3 mb-0 text-gray-800">View Course</h1>
    
                            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                        </div>
                        <div class="col-xl-12 col-lg-10">
                            <div class="card-body">
                           
                                <table class="table table-stripped">
                                    <tr>
                                        <th>Country</th>
                                         <th>University</th>  
                                        <th>Course</th>
                                        <th>Intake</th>
                                        <th>Tuition Fees</th>
                                        <th>Duration</th>
                                        <th>Priority</th>

                                        <th>Action</th>  

                                       </tr>
                                       @foreach($courselists as $courselist)
                                        <tr>
                                            
                                           
                                            <td>{{$courselist->country->name}}</td>
                                            <td>{{$courselist->uni_id}}</td>
                                            {{-- <td>{{$courselist->universities->uni_name}}</td>     --}}
                                            <td>{{$courselist->course_name}}</td>
                                            <td>{{$courselist->intake}}</td>
                                            <td>{{$courselist->tuitionfees}}</td>
                                            <td>{{$courselist->duration}}</td>
                                            <td>{{$courselist->priority}}</td>
                                         
                                            <td>
                                                 <a href="{{ route('admin.courselist.edit',$courselist->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                 <a href="{{ route('admin.courselist.destroy',$courselist->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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