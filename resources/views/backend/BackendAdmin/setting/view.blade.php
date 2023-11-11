
@extends('backend.BackendAdmin.layouts.master')
    @section('title')
       View Setting
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
                            <h1 class="h3 mb-0 text-gray-800">View Setting</h1>
    
                            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                        </div>
                        <div class="col-xl-12 col-lg-10">
                            <div class="card-body">
                           
                                <table class="table table-stripped">
                                    <tr>
                                        <th>Id</th>
                                        {{-- <th>Country Name</th> --}}
                                        <th>Site Name</th>
                                        <th>Contact Email</th>
                                        <th>Contact Phone</th> 
                                        <th>Contact Address</th> 
                                        <th>Action</th>
                                       </tr>
                                       @foreach($generalSettings as $generalSetting)
                                        <tr>
                                            {{-- <td>{{$universitylist->country_id}}</td> --}}
                                           <td>{{$generalSetting->id}}</td>
                                            
                                         
                                            <td>{{$generalSetting->site_name}}</td>
                                            <td>{{$generalSetting->contact_email}}</td>

                                            <td>{{$generalSetting->contact_phone}}</td>
                                            <td>{{$generalSetting->contact_address}}</td>

                                            <td>
                                                <a href="{{ route('admin.setting.edit',$generalSetting->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                <a href="{{ route('admin.setting.destroy',$generalSetting->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
    