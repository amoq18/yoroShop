<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/ventura/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2019 17:25:22 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Ventura - Dashboard</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/assets/back/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/back/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="/assets/back/css/font-awesome.min.css">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="/assets/back/css/feathericon.min.css">

        <!-- Datatables CSS -->
        <link rel="stylesheet" href="/assets/back/plugins/datatables/datatables.min.css">

		<link rel="stylesheet" href="/assets/back/plugins/morris/morris.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="/assets/back/css/style.css">
    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
            @include('back.layouts.header')

            <!-- Sidebar -->
            @include('back.layouts.menu')
            @yield('content')
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="/assets/back/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="/assets/back/js/popper.min.js"></script>
        <script src="/assets/back/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
        <script src="/assets/back/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Datatables JS -->
        <script src="/assets/back/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/assets/back/plugins/datatables/datatables.min.js"></script>

		<script src="/assets/back/plugins/raphael/raphael.min.js"></script>
		<script src="/assets/back/plugins/morris/morris.min.js"></script>
		<script src="/assets/back/js/chart.morris.js"></script>

		<!-- Custom JS -->
		<script  src="/assets/back/js/script.js"></script>

    </body>

</html>
