

@extends('backend.BackendAdmin.layouts.master')
    @section('title')
       Applicant List
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
                            <h1 class="h3 mb-0 text-gray-800">Applicant List</h1>
    
                            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>  --}}
                        </div>
                        <div class="col-xl-12 col-lg-10">
                            <div class="card-body">
                           
                                <table class="table table-stripped">
                                    <tr>
                                        <th>Applicant ID </th>
                                        <th>Applicant Name </th>
                                        <th>Applicant Email</th>
                                        <th>Applicant Phone</th>
                                        <th>Applied At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>

                                       </tr>
                                      
                                       @foreach($unique_user as $user)
                                    
                                        <tr>
                                                             
                                             <td>{{$user->student_id}}</td> 
                                            <td>{{$user->student_name}}</td>  
                                            <td>{{$user->student_email}}</td>
                                            <td>{{$user->student_phone}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>{{$user->updated_at}}</td>
                                            <td><a href="{{ route('admin.userapplication.givemessage',$user->id)}}" class="btn btn-success btn-sm">Give Message</a></td> 
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
    