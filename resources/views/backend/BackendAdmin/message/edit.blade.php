<?php

$userapplications = \App\Models\Backend\BackendAdmin\UserApplication::all();
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

                <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                    <form method="post" class="needs-validation" novalidate="" action="{{route('admin.message.update', $message->id)}}" >
                        @csrf
                    <div class="card-header">
                        <h4>Update Message</h4>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                    <div class="form-group col-12">
                                     <label>User Id</label>
                                     <input type="text" name="user_id" class="form-control" value="{{($message->user_id)}}">

                                    </div>
                                    <div class="form-group  col-12">
                                     <label>Message</label>
                                     <textarea name="message" class="form-control" cols="10" rows="20">
                                        {{($message->message)}}
                                     </textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer  text-right">
                        <button class="btn btn-primary offset-2">Update Message</button>
                    </div>
                    </form>
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