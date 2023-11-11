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
                           
                                <form action="{{route('admin.setting.update', $generalSettings->id)}}" method="POST">
                                    @csrf
                                   
                                    <div class="form-group">
                                        <label>Site Name</label>
                                        <input type="text" class="form-control" name="site_name" value="{{$generalSettings->site_name}}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Contact Email</label>
                                        <input type="text" class="form-control" name="contact_email" value="{{$generalSettings->contact_email}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Phone</label>
                                        <input type="text" class="form-control" name="contact_phone" value="{{$generalSettings->contact_phone}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Address</label>
                                        <input type="text" class="form-control" name="contact_address" value="{{$generalSettings->contact_address}}">
                                        {{-- {{@$generalSettings->contact_address}} --}}
                                    </div>
                                    
                                    
                                    
                                    <button type="submit" class="btn btn-primary">Update</button>
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
    