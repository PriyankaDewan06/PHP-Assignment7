<?php
$loginUserFromUserProfile = '';
$auth_user = auth()->user()->id;

$users_profile = \App\Models\Backend\BackendStudentProfile\UserProfile::all()->where('user_id', $auth_user);

foreach ($users_profile as $user) {
    $loginUserFromUserProfile = $user->user_id;
}
?>
<!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Applicantor</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('user.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider  my-0">

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Student Portal
    </div> --}}

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfile"
            aria-expanded="true" aria-controls="collapseProfile">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Profile</span>
        </a>
        <div id="collapseProfile" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Student Profile</h6>
                <?php 
                    if($auth_user != $loginUserFromUserProfile){
                ?>
                    <a class="collapse-item" href="{{route('user.profile.create')}}">Create Profile</a>
                <?php
                }?>
                <a class="collapse-item" href="{{route('user.profile.view')}}">Profile View</a>
                
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider  my-0">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUniversity"
            aria-expanded="true" aria-controls="collapseUniversity">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>University Application</span>
        </a>
        <div id="collapseUniversity" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">University Application</h6>
                <a class="collapse-item" href="{{route('application.create')}}">Add Application</a>
                <a class="collapse-item" href="{{route('application.view')}}"> View Application</a>                 
            </div>
        </div>
    </li>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider  my-0"> --}}

    {{-- <li class="nav-item">
        <a class="nav-link" href="profile-feedback.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Notifications</span></a>
    </li> --}}
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
