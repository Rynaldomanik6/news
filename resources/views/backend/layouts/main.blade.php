<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>{{ $title }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Dropzone CSS -->
	<link href="{!! asset('backend/vendors/dropzone/dist/dropzone.css') !!}" rel="stylesheet" type="text/css"/>
	
	<!-- Bootstrap Dropzone CSS -->
	<link href="{!! asset('backend/vendors/dropify/dist/css/dropify.min.css') !!}" rel="stylesheet" type="text/css"/>
	
	<!-- Morris Charts CSS -->
    <link href="{!! asset('backend/vendors/morris.js/morris.css') !!}" rel="stylesheet" type="text/css" />
	
    <!-- Toggles CSS -->
    <link href="{!! asset('backend/vendors/jquery-toggles/css/toggles.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('backend/vendors/jquery-toggles/css/themes/toggles-light.css') !!}" rel="stylesheet" type="text/css">
	
	<!-- Toastr CSS -->
    <link href="{!! asset('backend/vendors/jquery-toast-plugin/dist/jquery.toast.min.css') !!}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{!! asset('backend/dist/css/style.css') !!}" rel="stylesheet" type="text/css">

    <!-- Data Table CSS -->
    <link href="{!! asset('backend/vendors/datatables.net-dt/css/jquery.dataTables.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('backend/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') !!}" rel="stylesheet" type="text/css" />

    <!-- jQuery -->
    <script src="{!! asset('backend/vendors/jquery/dist/jquery.min.js') !!}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{!! asset('backend/vendors/popper.js/dist/umd/popper.min.js') !!}"></script>
    <script src="{!! asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js') !!}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{!! asset('backend/dist/js/jquery.slimscroll.js') !!}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{!! asset('backend/dist/js/feather.min.js') !!}"></script>

    <!-- Toggles JavaScript -->
    <script src="{!! asset('backend/vendors/jquery-toggles/toggles.min.js') !!}"></script>
    <script src="{!! asset('backend/dist/js/toggle-data.js') !!}"></script>
	
	<!-- Toastr JS -->
    <script src="{!! asset('backend/vendors/jquery-toast-plugin/dist/jquery.toast.min.js') !!}"></script>
	<script src="{!! asset('backend/dist/js/toast-data.js') !!}"></script>
	
    <!-- Counter Animation JavaScript -->
	<script src="{!! asset('backend/vendors/waypoints/lib/jquery.waypoints.min.js') !!}"></script>
	<script src="{!! asset('backend/vendors/jquery.counterup/jquery.counterup.min.js') !!}"></script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">
        @include('backend.layouts.partials.navbar')

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
                <div class="row">
                    <div class="col-xl-12">
                        @yield('container')
                    </div>
                </div>
            </div>
            <!-- /Container -->
			
            @include('backend.layouts.partials.footer')
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- Fancy Dropdown JS -->
    <script src="{!! asset('backend/dist/js/dropdown-bootstrap-extended.js') !!}"></script>

    <!-- Data Table JavaScript -->
    <script src="{!! asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('backend/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
    <script src="{!! asset('backend/vendors/datatables.net-dt/js/dataTables.dataTables.min.js') !!}"></script>
    <script src="{!! asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') !!}"></script>
    <script src="{!! asset('backend/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') !!}"></script>
    <script src="{!! asset('backend/vendors/datatables.net-buttons/js/buttons.flash.min.js') !!}"></script>
    <script src="{!! asset('backend/vendors/jszip/dist/jszip.min.js') !!}"></script>
    <script src="{!! asset('backend/vendors/pdfmake/build/pdfmake.min.js') !!}"></script>
    <script src="{!! asset('backend/vendors/pdfmake/build/vfs_fonts.js') !!}"></script>
    <script src="{!! asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js') !!}"></script>
    <script src="{!! asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js') !!}"></script>
    <script src="{!! asset('backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') !!}"></script>
    <script src="{!! asset('backend/dist/js/dataTables-data.js') !!}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{!! asset('backend/vendors/raphael/raphael.min.js') !!}"></script>
    <script src="{!! asset('backend/vendors/morris.js/morris.min.js') !!}"></script>
	
	<!-- Easy pie chart JS -->
    <script src="{!! asset('backend/vendors/easy-pie-chart/dist/jquery.easypiechart.min.js') !!}"></script>
	
	<!-- Flot Charts JavaScript -->
    <script src="{!! asset('backend/vendors/flot/excanvas.min.js') !!}"></script>
    <script src="{!! asset('backend/vendors/flot/jquery.flot.js') !!}"></script>
    <script src="{!! asset('backend/vendors/flot/jquery.flot.pie.js') !!}"></script>
    <script src="{!! asset('backend/vendors/flot/jquery.flot.resize.js') !!}"></script>
    <script src="{!! asset('backend/vendors/flot/jquery.flot.time.js') !!}"></script>
    <script src="{!! asset('backend/vendors/flot/jquery.flot.stack.js') !!}"></script>
    <script src="{!! asset('backend/vendors/flot/jquery.flot.crosshair.js') !!}"></script>
    <script src="{!! asset('backend/vendors/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js') !!}"></script>
	
	<!-- EChartJS JavaScript -->
    <script src="{!! asset('backend/vendors/echarts/dist/echarts-en.min.js') !!}"></script>
    
    <!-- Init JavaScript -->
    <script src="{!! asset('backend/dist/js/init.js') !!}"></script>
	<script src="{!! asset('backend/dist/js/dashboard2-data.js') !!}"></script>

    <!-- Dropzone JavaScript -->
	<script src="{!! asset('backend/vendors/dropzone/dist/dropzone.js') !!}"></script>
	
	<!-- Dropify JavaScript -->
	<script src="{!! asset('backend/vendors/dropify/dist/js/dropify.min.js') !!}"></script>
	
	<!-- Form Flie Upload Data JavaScript -->
	<script src="{!! asset('backend/dist/js/form-file-upload-data.js') !!}"></script>

    <!-- Tinymce JavaScript -->
    <script src="{!! asset('backend/vendors/tinymce/tinymce.min.js') !!}"></script>

    <!-- Tinymce Wysuhtml5 Init JavaScript -->
    <script src="{!! asset('backend/dist/js/tinymce-data.js') !!}"></script>

    <!-- Jasny-bootstrap  JavaScript -->
    <script src="{!! asset('backend/vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') !!}"></script>

	
</body>

</html>