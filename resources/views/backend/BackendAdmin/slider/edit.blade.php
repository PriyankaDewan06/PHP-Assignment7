
@extends('backend.BackendAdmin.layouts.master')
    @section('title')
       View Sliders
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
                            <h1 class="h3 mb-0 text-gray-800">View Slider</h1>
    
                            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                        </div>
                        <div class="col-xl-12 col-lg-10">
                            <div class="card-body">
                                <form action="{{route('admin.slider.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                  
                                    <div class="form-group">
                                        <label>Preview</label>
                                        <br>
                                        <img width="200" src="{{asset($slider->banner)}}" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label>Banner</label>
                                        <input type="file" class="form-control" name="banner">
                                    </div>
                                    <div class="form-group">
                                        <label>Caption</label>
                                        <input type="text" class="form-control" name="caption"  value="{{$slider->caption}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Heading</label>
                                        <input type="text" class="form-control" name="heading"  value="{{$slider->heading}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Details</label>
                                        <input type="text" class="form-control" name="details"  value="{{$slider->details}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Button Url</label>
                                        <input type="text" class="form-control" name="btn_url" value="{{$slider->btn_url}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Serial</label>
                                        <input type="text" class="form-control" name="serial" value="{{$slider->serial}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputState">Status</label>
                                        <select id="inputState" class="form-control" name="status">
                                          <option {{$slider->status == 1 ? 'selected': ''}} value="1">Active</option>
                                          <option {{$slider->status == 0 ? 'selected': ''}} value="0">Inactive</option>
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
    