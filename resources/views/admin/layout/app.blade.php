<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AdminPanel</title>
    <!--favicon-->
    <link rel="icon" href="\back\assets\images\logo.png" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="\back\assets\plugins\vectormap\jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <!-- simplebar CSS-->
    <link href="\back\assets\plugins\simplebar\css\simplebar.css" rel="stylesheet">
    <!-- Bootstrap core CSS-->
    <link href="\back\assets\css\bootstrap.min.css" rel="stylesheet">
    <!-- animate CSS-->
    <link href="\back\assets\css\animate.css" rel="stylesheet" type="text/css">
    <!-- Icons CSS-->
    <link href="\back\assets\css\icons.css" rel="stylesheet" type="text/css">
    <!-- Sidebar CSS-->
    <link href="\back\assets\css\sidebar-menu.css" rel="stylesheet">
    <!-- Custom Style-->
    <link href="\back\assets\css\app-style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" type="text/css">
</head>

<body class="bg-theme bg-theme9">

<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loader"></div></div></div></div>
<!-- end loader -->

<!-- Start wrapper-->
<div id="wrapper">
    @auth
        @include('admin.layout.aside')

        @include('admin.layout.topbar')

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- End container-fluid-->

        </div><!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 20222 Reshape Global
                </div>
            </div>
        </footer>
        <!--End footer-->


    @else
        @yield('login')
    @endauth
</div><!--End wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="\back\assets\js\jquery.min.js"></script>
<script src="\back\assets\js\popper.min.js"></script>
<script src="\back\assets\js\bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="\back\assets\plugins\simplebar\js\simplebar.js"></script>
<!-- sidebar-menu js -->
<script src="\back\assets\js\sidebar-menu.js"></script>
<!-- loader scripts -->
<script src="\back\assets/js/jquery.loading-indicator.js"></script>
<!-- Custom scripts -->
<script src="\back\assets\js\app-script.js"></script>
<!-- Chart js -->

<script src="\back\assets\plugins\Chart.js\Chart.min.js"></script>
<!-- Vector map JavaScript -->
<script src="\back\assets\plugins\vectormap\jquery-jvectormap-2.0.2.min.js"></script>
<script src="\back\assets\plugins\vectormap\jquery-jvectormap-world-mill-en.js"></script>
<!-- Easy Pie Chart JS -->
<script src="\back\assets\plugins\jquery.easy-pie-chart\jquery.easypiechart.min.js"></script>
<!-- Sparkline JS -->
<script src="\back\assets\plugins\sparkline-charts\jquery.sparkline.min.js"></script>
<script src="\back\assets\plugins\jquery-knob\excanvas.js"></script>
<script src="\back\assets\plugins\jquery-knob\jquery.knob.js"></script>

<script>
    $(function() {
        $(".knob").knob();
    });
</script>
<!-- Index js -->
<script src="\back\assets\js\index.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{Session::get('alert-type','info')}}";
    switch (type) {
        case 'info':
            toastr.options.progressBar = true;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.info("{{Session::get('message')}}");
            break;
        case 'success':
            toastr.options.progressBar = true;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.success("{{Session::get('message')}}");
            break;
        case 'warning':
            toastr.options.progressBar = true;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.warning("{{Session::get('message')}}");
            break;
        case 'error':
            toastr.options.progressBar = true;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.error("{{Session::get('message')}}");
            break;
    }
    @endif
</script>
@yield('script')

</body>
</html>
