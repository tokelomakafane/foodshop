<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Titima Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}">

    <!-- jvectormap -->
    <link href="{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/fullcalendar/vanillaCalendar.css')}}" rel="stylesheet" type="text/css"  />

    <link href="{{asset('backend/plugins/morris/morris.css')}}" rel="stylesheet">

    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link href="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />



    <!-- Plugins css -->
    <link href="{{asset('backend/plugins/timepicker/tempusdominus-bootstrap-4.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/timepicker/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/clockpicker/jquery-clockpicker.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/colorpicker/asColorPicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('backend/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />



</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

<!-- Begin page -->
<div id="wrapper">

   @include('admin.body.sidebar')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            @include('admin.body.header')

            <div class="page-content-wrapper ">
                <div class="container-fluid">
    @yield('admin')


                </div><!-- container -->

            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->


</div>
<!-- END wrapper -->
</div>



<!-- Plugins js -->
<script src="{{asset('backend/plugins/timepicker/moment.js')}}"></script>
<script src="{{asset('backend/plugins/timepicker/tempusdominus-bootstrap-4.js')}}"></script>
<script src="{{asset('backend/plugins/timepicker/bootstrap-material-datetimepicker.js')}}"></script>
<script src="{{asset('backend/plugins/clockpicker/jquery-clockpicker.min.js')}}"></script>
<script src="{{asset('backend/plugins/colorpicker/jquery-asColor.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/colorpicker/jquery-asGradient.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/colorpicker/jquery-asColorPicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/select2/select2.min.js')}}" type="text/javascript"></script>

<script src="{{asset('backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('backend/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('backend/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>

<!-- Plugins Init js -->
<script src="{{asset('backend/pages/form-advanced.js')}}"></script>

<!-- jQuery  -->
<script src="{{asset('backend/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/js/popper.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/modernizr.min.js')}}"></script>
<script src="{{asset('backend/js/detect.js')}}"></script>
<script src="{{asset('backend/js/fastclick.js')}}"></script>
<script src="{{asset('backend/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('backend/js/waves.js')}}"></script>
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>

<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

<script src="{{asset('backend/plugins/skycons/skycons.min.js')}}"></script>
<script src="{{asset('backend/plugins/fullcalendar/vanillaCalendar.js')}}"></script>

<script src="{{asset('backend/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('backend/plugins/morris/morris.min.js')}}"></script>



<!-- App js -->
<script src="{{asset('backend/js/app.js')}}"></script>

<!-- Required datatable js -->
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('backend/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('backend/pages/datatables.init.js')}}"></script>

<!-- App js -->

<script>
    $(document).ready(function() {
        $('#datatable2').DataTable();
    } );
</script>

</body>
</html>
