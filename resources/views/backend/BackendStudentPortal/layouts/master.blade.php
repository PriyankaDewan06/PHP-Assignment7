<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>
        @yield('title')
    </title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/BackendStudentPortal/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend/BackendStudentPortal/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <!-- Custom css for developer -->
    <link rel="stylesheet" href="{{asset('backend/BackendStudentPortal/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link  href="{{asset('backend/BackendStudentPortal/img/favicon.png')}}" rel="icon">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
    @yield('content')


    
     <!-- Bootstrap core JavaScript-->
     <script src="{{asset('backend/BackendStudentPortal/vendor/jquery/jquery.min.js')}}"></script>
     <script src="{{asset('backend/BackendStudentPortal/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 
     <!-- Core plugin JavaScript-->
     <script src="{{asset('backend/BackendStudentPortal/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
     
     <!-- Custom scripts for all pages-->
     <script src="{{asset('backend/BackendStudentPortal/js/sb-admin-2.min.js')}}"></script>
     <!--Toaster js-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <script>
         @if ($errors->any())
             @foreach ($errors->all() as $error)
                 toastr.error("{{$error}}")
             @endforeach
         @endif
     </script>
     
     <script>
         $(document).ready(function(){
             $('.auto_click').click();
         })
     </script>
     @yield('js')
     <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

</body>    
</html>