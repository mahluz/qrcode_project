<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
        @yield('css')
        <!-- Styles -->
        <style>

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif


        @yield('content')

        </div>

        @yield('footer')
        <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
        <!-- CORE JQUERY  -->
        <script src="{{url('public/js/jquery-1.11.1.min.js')}}"></script>

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
