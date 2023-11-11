@extends('backend.BackendStudentPortal.layouts.master')
    @section('title')
       User Profile Update
    @endsection

@section('content')
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

                  <div class="section-body">

                <div class="row mt-sm-4">

                  <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                      <form method="post" class="needs-validation" novalidate="" action="{{route('updateuserprofile')}}" enctype="multipart/form-data">
                          @csrf
                        <div class="card-header">
                          <h4>Update Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                              <div class="form-group col-12">
                                  <div class="mb-3">
                                      <img width="100px" src="{{asset(Auth::user()->image)}}" alt="">
                                  </div>
                                  <label>Image</label>
                                  <input type="file" name="image" class="form-control">

                                </div>

                              <div class="form-group col-md-6 col-12">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">

                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="{{Auth::user()->email}}" >

                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Phone</label>
                                <input type="text" name="email" class="form-control" value="{{Auth::user()->phone}}" >

                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Country</label>
                                <input type="text" name="address" class="form-control" value="{{Auth::user()->address}}" >

                              </div>
                            </div>

                            
                        </div>
                        <div class="card-footer text-right">
                          <button class="btn btn-primary">Save Changes</button>
                        </div>
                      </form>
                    </div>
                  </div>


                   <div class="col-12 col-md-12 col-lg-7">
                      <div class="card">

                        <form method="post" class="needs-validation" novalidate="" action="{{route('updateuserprofile')}}" enctype="multipart/form-data">
                            @csrf
                          <div class="card-header">
                            <h4>Update Password</h4>
                          </div>
                          <div class="card-body">
                              <div class="row">
                                <div class="form-group col-12">
                                  <label>Name</label>
                                  <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" >
                                </div>
                                <div class="form-group col-12">
                                  <label>Email</label>
                                  <input type="text" name="email" class="form-control" value="{{Auth::user()->email}}" >

                                </div>
                                 
                                <div class="form-group col-12">
                                  <label>Current Password</label>
                                  <input type="password" name="current_password" class="form-control" value="{{Auth::user()->password}}">
                                </div>
                                <div class="form-group col-12">
                                  <label>New Password</label>
                                  <input type="password" name="newpassword" class="form-control" value="" >
                                </div>
                                <div class="form-group col-12">
                                  <label>Confirm Password</label>
                                  <input type="password" name="password_confirmation" class="form-control" value="" >
                                </div>

                              </div>


                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary">Save Changes</button>
                          </div>
                        </form>
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
