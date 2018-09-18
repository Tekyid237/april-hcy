 <header class="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-2 pull-left">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img alt="{{ config('app.name') }}" src="{{ asset('img/logo.png') }}" width="56" height="50"></a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="nav navbar-nav main-nav pull-right navbar-right">
                            <li class="{{ set_active('home') }}"><a href= "{{ url('home') }}">Accueil</a></li>
                            <li class="{{ set_active('about') }}"><a href="{{ url('about') }}">A Propos</a></li>
                            <li class="{{ set_active('contact') }}"><a href="{{ url('contact') }}">Contact</a></li>
                            @if (!Auth::guest())
                                <li><a class="btn btn-primary appoint-btn" href="{{ url('appointment') }}">Prendre un RDV</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle settings-icon" data-toggle="dropdown">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('account') }}">Mon Compte</a></li>
                                        <li><a href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()";>Déconnexion</a></li>
                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @else
                                <li><a class="btn btn-primary appoint-btn" href="{{ url('login') }}">Prendre un RDV</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle settings-icon" data-toggle="dropdown">
                                        <i class="fa fa-user"></i>
                                    </a>
                               
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('login') }}">Se Connecter</a></li>
                                        <li><a href="{{ url('register') }}">S'inscrire</a></li>
                                    </ul>
                                </li>
                            @endif
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Header -->
<header class="mobile-header">
    <div class="panel-control-left">
        <a class="toggle-menu" href="#side_menu">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="page_title">
        <a href="index.html">
            <img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') }}" class="img-responsive" width="60" height="60">
        </a>
    </div>
    <div class="panel-control-right">
        <ul class="mobile-menu-icon">
            <li class="dropdown">
                <a class="dropdown-toggle settings-icon" data-toggle="dropdown">
                    <i class="fa fa-user"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('login') }}">Se Connecter</a></li>
                    <li><a href="{{ url('register') }}">S'inscrire</a></li>
                    {{-- <li><a href="{{ url('account') }}">Mon Compte</a></li>
                    <li><a href="{{ url('appointment') }}">Prendre un RDV</a></li>
                    <li><a href="{{ url('logout') }}">Déconnexion</a></li> --}}
                </ul>
            </li>
        </ul>
    </div>
</header>

<!-- Mobile Sidebar -->
<div class="sidebar sidebar-menu" id="side_menu">
    <div class="sidebar-inner slimscroll">
        <a id="close_menu" href="#"><i class="fa fa-close"></i></a>
        <ul class="mobile-menu-wrapper" style="display: block;">
            <li class="active">
                <div class="mobile-menu-item clearfix">
                    <a href="{{ url('home') }}">Accueil</a>
                </div>
            </li>
            <li>
                <div class="mobile-menu-item clearfix">
                    <a href="{{ url('about') }}">A Propos</a>
                </div>
            </li>
            <li>
                <div class="mobile-menu-item clearfix">
                    <a href="{{ url('faq') }}">Questions Fréquentes</a>
                </div>
            </li>
            <li>
                <div class="mobile-menu-item clearfix">
                    <a href="{{ url('contact') }}">Contact</a>
                </div>
            </li>
            <li>
                @if(!Auth::guest())
                    <div class="mobile-menu-item clearfix">
                        <a href="{{ url('appointment') }}">Prendre un rendez-vous</a>
                    </div>
                @else
                    <div class="mobile-menu-item clearfix">
                        <a href="{{ url('login') }}">Prendre un rendez-vous</a>
                    </div>
                @endif
            </li>
        </ul>
    </div>
</div>