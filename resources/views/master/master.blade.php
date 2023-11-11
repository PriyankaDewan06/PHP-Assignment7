<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- Fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>
        @yield('title')
    </title>
    
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            @if (Auth::user()->role === '1')
                 <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Dashboard</a>
            @elseif (Auth::user()->role === '2')
                <a class="navbar-brand" href="{{ route('manager.dashboard') }}">Dashboard</a>
            @else
            <a class="navbar-brand" href="{{ route('employee.dashboard') }}">Dashboard</a>
                @endif
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if (Auth::user()->role === '1')
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('userlist.view') }}">Users</a>
                    </li>   
                    @endif
                    
              
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('posts.index') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Posts
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('posts.create')}}">Create Post</a></li>
                    <li><a class="dropdown-item" href="#">Edit Post</a></li>
                    <li><a class="dropdown-item" href="#">Delete Post</a></li>
                    </ul>
                </li>
              
            </ul>
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
          </div>
        </div>
      </nav>
      @yield('content')
      
              
      
  
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('backend/BackendStudentPortal/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/BackendStudentPortal/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend/BackendStudentPortal/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('backend/BackendStudentPortal/js/sb-admin-2.min.js')}}"></script>
    <!--Toaster js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
      @if(Session::has('alert'))
        toastr.options={
          "closeButton" : true,
          "progressBar" : true
        }
        toastr.success("{{ session('alert') }}");
      @endif
      
    </script>
    <script>
        $(document).ready(function(){
            $('.auto_click').click();
        })
    </script>
    @yield('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!--Toaster js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script>
       @if ($errors->any())
           @foreach ($errors->all() as $error)
               toastr.error("{{$error}}")
           @endforeach
       @endif
   </script>
</body>
</html>
