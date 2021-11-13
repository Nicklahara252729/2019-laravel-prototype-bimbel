<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Siswa Dashboard</title>
    <link href="{{asset('assets/siswa/css/vendor.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/siswa/css/theme-core.min.css')}}" rel="stylesheet">
    
    <link href="{{asset('assets/siswa/css/module-essentials.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/siswa/css/module-material.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/siswa/css/module-layout.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/siswa/css/module-sidebar.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/siswa/css/module-sidebar-skins.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/siswa/css/module-navbar.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/siswa/css/module-messages.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/siswa/css/module-carousel-slick.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/siswa/css/module-charts.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/siswa/css/module-maps.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/siswa/css/module-colors-alerts.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/siswa/css/module-colors-background.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/siswa/css/module-colors-buttons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/siswa/css/module-colors-text.min.css')}}" rel="stylesheet" />
    
</head>
<body>
@include('theme.siswa.fixed-navbar');
@include('theme.siswa.banner');
@yield('main')
@include('theme.siswa.footer');
<script>
    var colors = {
        "danger-color": "#e74c3c",
        "success-color": "#81b53e",
        "warning-color": "#f0ad4e",
        "inverse-color": "#2c3e50",
        "info-color": "#2d7cb5",
        "default-color": "#6e7882",
        "default-light-color": "#cfd9db",
        "purple-color": "#9D8AC7",
        "mustard-color": "#d4d171",
        "lightred-color": "#e15258",
        "body-bg": "#f6f6f6"
    };
    var config = {
        theme: "html",
        skins: {
            "default": {
                "primary-color": "#42a5f5"
            }
        }
    };
    </script>
    <!-- Separate Vendor Script Bundles -->
    <script src="{{asset('assets/siswa/js/vendor-core.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/vendor-countdown.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/vendor-tables.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/vendor-forms.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/vendor-carousel-slick.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/vendor-player.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/vendor-charts-flot.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/vendor-nestable.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/module-essentials.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/module-material.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/module-layout.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/module-sidebar.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/module-carousel-slick.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/module-player.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/module-messages.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/module-maps-google.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/module-charts-flot.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/theme-core.min.js')}}"></script>
</body>
</html>