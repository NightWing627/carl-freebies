<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Freebies - Admin Panel</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/venders/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{ asset('assets/venders/css/bootstrap-theme.css') }}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ asset('assets/venders/css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/venders/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="{{ asset('assets/venders/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/venders/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="{{ asset('assets/venders/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link href="{{ asset('assets/venders/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/venders/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <!-- Custom styles -->
    <link href="{{ asset('assets/venders/css/fullcalendar.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/venders/css/widgets.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/venders/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/venders/css/style-responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/venders/css/xcharts.min.css') }}" rel=" stylesheet">
    <link href="{{ asset('assets/venders/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    @yield('css')

</head>

<body>
    <!-- container section start -->
    <section id="container" class="">
        @include('admin.header')
        <!--header end-->

        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a class="" href="{{ route('admin.dashboard') }}">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{ route('admin.user') }}">
                            <i class="fa fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <i class="fa fa-th"></i>
                            <span>Categories</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <i class="fa fa-comments"></i>
                            <span>Freebies</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="app">
            @yield('content')
        </div>


    </section>

    <!-- Vue App.js -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <!-- End -->
    <script src="{{ asset('assets/venders/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/venders/js/jquery-ui-1.10.4.min.js') }}"></script>
    <script src="{{ asset('assets/venders/js/jquery-ui-1.9.2.custom.min.js') }}" type="text/javascript"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/venders/js/bootstrap.min.js') }}"></script>
    <!-- nice scroll -->
    <script src="{{ asset('assets/venders/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('assets/venders/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="{{ asset('assets/venders/jquery-knob/js/jquery.knob.js') }}"></script>
    <script src="{{ asset('assets/venders/js/jquery.sparkline.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/venders/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
    <script src="{{ asset('assets/venders/js/owl.carousel.js') }}"></script>
    <!-- jQuery full calendar -->
    <script src="{{ asset('assets/venders/js/fullcalendar.min.js') }}"></script> <!-- Full Google Calendar - Calendar -->
    <script src="{{ asset('assets/venders/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
    <!--script for this page only-->
    <script src="{{ asset('assets/venders/js/calendar-custom.js') }}"></script>
    <script src="{{ asset('assets/venders/js/jquery.rateit.min.js') }}"></script>
    <!-- custom select -->
    <script src="{{ asset('assets/venders/js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('assets/venders/chart-master/Chart.js') }}"></script>

    <!--custome script for all page-->
    <script src="{{ asset('assets/venders/js/scripts.js') }}"></script>
    <!-- custom script for this page-->
    <script src="{{ asset('assets/venders/js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('assets/venders/js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('assets/venders/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/venders/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/venders/js/xcharts.min.js') }}"></script>
    <script src="{{ asset('assets/venders/js/jquery.autosize.min.js') }}"></script>
    <script src="{{ asset('assets/venders/js/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('assets/venders/js/gdp-data.js') }}"></script>
    <script src="{{ asset('assets/venders/js/morris.min.js') }}"></script>
    <script src="{{ asset('assets/venders/js/sparklines.js') }}"></script>
    <script src="{{ asset('assets/venders/js/charts.js') }}"></script>
    <script src="{{ asset('assets/venders/js/jquery.slimscroll.min.js') }}"></script>
    <script>
        //knob
        $(function() {
            $(".knob").knob({
                'draw': function() {
                    $(this.i).val(this.cv + '%')
                }
            })
        });

        //carousel
        $(document).ready(function() {
            $("#owl-slider").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true

            });
        });

        //custom select box

        $(function() {
            $('select.styled').customSelect();
        });

        /* ---------- Map ---------- */
        $(function() {
            $('#map').vectorMap({
                map: 'world_mill_en',
                series: {
                    regions: [{
                        values: gdpData,
                        scale: ['#000', '#000'],
                        normalizeFunction: 'polynomial'
                    }]
                },
                backgroundColor: '#eef3f7',
                onLabelShow: function(e, el, code) {
                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                }
            });
        });
    </script>
    {{-- ckeditor --}}
    <script>
        if ($(document).find('#editor1').length > 0) {
            CKEDITOR.replace('editor1');
        }
    </script>

</body>

</html>
