<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bdvets.com </title>

    <link href="{{asset('css/chosen.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom fonts for this template-->
    <link href="{{asset('file/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('file/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <!-- Custom style-->
    <link href="{{asset('css/abasas.css')}}" rel="stylesheet">

    @yield('css')

</head>

<body id="page-top">




    @include('layout.nav')
    @include('layout.form_link')

    <div>

        <!-- Page Wrapper -->
        <div id="wrapper">

        @if( Auth::user()->isAdmin() )

            @include('layout.adminSidebar')
            @elseif (Auth::user()->isDoctor())

            @include('layout.doctorSidebar')
            @else
            return "your are not allowed this ";

            @endif
            @yield('content')
        </div>
    </div>

    @include('layout.footer')



    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('file/jquery/jquery.min.js')}}"></script>


    <script src="{{asset('file/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('file/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('file/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('file/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('file/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('js/custom/datatables.js')}}"></script>
    <script src="{{asset('js/custom/chosen.js')}}"></script>
    <script src="{{asset('js/custom/location.js')}}"></script>
    <script src="{{asset('js/custom/village.js')}}"></script>
    <script src="{{asset('js/custom/farmer.js')}}"></script>
    <script src="{{asset('js/custom/medichine.js')}}"></script>
    <script src="{{asset('js/custom/category.js')}}"></script>
    <script src="{{asset('js/custom/doctor.js')}}"></script>
    <script src="{{asset('js/custom/sign.js')}}"></script>
    <script src="{{asset('js/custom/diagnosis.js')}}"></script>
    <script src="{{asset('js/custom/necropsy.js')}}"></script>
    <script src="{{asset('js/custom/advice.js')}}"></script>

    <script src="{{asset('js/custom/office.js')}}"></script>

    <script src="{{asset('js/custom/prescription.js')}}"></script>






    <script type="text/javascript">
        $(".chosen").chosen();
    </script>






    @yield('js')

</body>

</html>