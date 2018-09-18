<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <!-- Mobile Specific Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}"><!-- CSRF Token for Laravel-->
    <meta name="robots" content="index,follow,noodp">
    <meta name="url" content="{{ url('/') }}">
    <meta http-equiv="content-language" content="fr">
    <meta name="category" content="hopital, rendez-vous, appointment, hospital">
    <meta name="langage" content="fr">
    <meta name="description" content="APRIL est l'application de prise de rendez-vous en ligne de l'Hôpital Central de Yaoundé">
    <!-- Meta Keyword -->
    <meta name="keywords" content="hopital, rendez-vous, appointment, hospital, yaounde, cameroun">
    <meta name="copyright" content="www.hopitalcentral.cm">
    <meta name="author" content="Idriss Tekeudo, idriss.tekeudo@gmail.com">
    <!-- Open Graph Meta -->
    <meta property="og:type" content="application">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:langage" content="fr">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@april-hcy">
    <meta name="twitter:creator" content="@Tekyid237">
    
    <!-- Others Meta for SEO -->
    <meta name="copyright" content="{{ config('app.name') }}">
    <meta name="geo.placename" content="Yaoundé, Centre, Cameroun">
    <meta name="twitter:image" content="favicon">

    <meta name="mobile-web-app-capable" content="yes">
    
    <title>{{ set_page_title($title ?? '') }}</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

    <!-- CSS links -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.min.css') }}">
    
    @yield('stylesheet')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!--[if lt IE 9]>
        <script src="{{ asset('js/html5shiv.min.js') }}"></script>
        <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
    
    <!-- Tag manager for Google go here -->
</head>
<body>
   <!-- preloader div -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- preloader div -->

    @include('frontoffice.layouts.partials._navbar')

    @yield('content')
        
    @include('frontoffice.layouts.partials._footer')

    <div class="sidebar-overlay" data-reff="#side_menu"></div>

    <!-- Javascript loading -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>
    @yield('script')
</body>
</html>