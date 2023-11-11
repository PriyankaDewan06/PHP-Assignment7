<?php
$loginUserFromUserProfile = '';
$viewMessageFromMessage = '';
$loginUserIDFromMessage = '';
$auth_user = auth()->user()->id;
$auth_name = auth()->user()->name;

$users_profile = \App\Models\Backend\BackendStudentProfile\UserProfile::all()->where('user_id', $auth_user);
$adminMessages = \App\Models\Backend\BackendStudentProfile\Message::all()->where('user_id', $auth_user);

foreach ($adminMessages as $messages) {
    $viewMessageFromMessage = $messages->message;
    $loginUserIDFromMessage = $messages->user_id;
}

foreach ($users_profile as $user) {
    $loginUserFromUserProfile = $user->user_id;
}
// dd ($loginUserFromUserProfile);
?>
@extends('backend.BackendStudentPortal.layouts.master')
@section('title')
    Profile Create - Student Portal
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
                        {{-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> --}}
  
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
  
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <?php 
                            if($auth_user != $loginUserFromUserProfile){
                        ?>
                            <h2 class="h4 mb-0 text-gray-800">Dear {{$auth_name}}, Please Create Your Profile. <a href="{{route('user.profile.create')}}">Click here</a></h2>
                        <?php } else { ?>
                            <h2 class="h4 mb-0 text-gray-800">Dear {{$auth_name}}, Please Keep Your Profile Updated. <a href="{{route('user.profile.view')}}">Click here</a></h2>
                            <?php } ?>
                        </div>
  
                    <!-- Content Row -->
  
                    <div class="row">  
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h4 class="m-0 font-weight-bold text-primary">Your Applicantor's Messages</h4>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <?php 
                                        if($auth_user === $loginUserIDFromMessage){
                                        ?>
                                        <h3 class="text-danger">Hello, Dear {{$auth_name}}.  {{$viewMessageFromMessage}}</h3>
                                        <?php
                                        }else{
                                            echo '<h3 class="text-danger">You dont have any Message From APPLICANTOR</h3>';
                                        } ?>
                                    </div>
                                </div>
                            </div>
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