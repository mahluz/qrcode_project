<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Admin</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="{{url('public/css/bootstrap.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.css.map')}}">
    <!-- FONT AWESOME STYLE  -->
    <link href="{{url('public/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="{{url('public/css/horizontal-admin.css')}}" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="{{url('public/js/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    {{-- full calendar --}}
    <link rel='stylesheet' href='{{url('public/fullcalendar/fullcalendar.css')}}' />
    {{-- datepicker css --}}
    <link rel="stylesheet" href="{{url('public/css/bootstrap-datepicker.min.css')}}">
    <!-- Bootstrap datepicker -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <style type="text/css">
        html, body{
            width:100%;
            height:100%;
            background-color:#fff;
            font-family: 'Sansita', sans-serif;
        }
    </style>
    @yield('css')

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="{{url('public/img/logo/logo.png')}}" />
                </a>

            </div>

            <div class="right-div">
                <a href="#" class="btn btn-info pull-right" onclick="event.preventDefault();document.getElementById('logout-form').submit();">LOG ME OUT</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="{{url('main')}}" @yield('schedule-active') ><i class="fa fa-calendar-o"></i> Absent Data</a></li>
                            <li><a href="{{url('people')}}" @yield('order-active') ><i class="fa fa-group"></i> People</a></li>
                            {{-- <li><a href="{{url('admin/staff')}}" @yield('staff-active') ><i class="fa fa-group"></i> Staff</a></li> --}}
                            <!-- /.dropdown -->
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
    @yield('content')
    </div>

    {{-- every modal placed here --}}

     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2014 asegaf@ymail.com |<a href="http://www.facebook.com/zulham.achmad" target="_blank"  > Design Edited by : Zulham Azwar Achmad with Love</a>
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="{{url('public/js/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{url('public/js/bootstrap.min.js')}}"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="{{url('public/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{url('public/js/dataTables/dataTables.bootstrap.js')}}"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="{{url('public/js/horizontal-admin.js')}}"></script>
    <script src="{{url('public/fullcalendar/lib/moment.min.js')}}"></script>
    <script src="{{url('public/fullcalendar/fullcalendar.min.js')}}"></script>
    <script src="{{url('public/fullcalendar/locale/id.js')}}"></script>
    <script src="{{url('public/js/bootstrap-datepicker.js')}}" charset="utf-8"></script>
    <script src="{{url('public/locales/bootstrap-datepicker.id.min.js')}}" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="{{url('public/js/printThis.js')}}" charset="utf-8"></script>
    <script src="{{url('public/js/qrcodelib.js')}}"></script>
    <script src="{{url('public/js/webcodecamjs.js')}}"></script>
    <script src="{{url('public/js/webcodecamjquery.js')}}"></script>
    @yield('script')
</body>
</html>
