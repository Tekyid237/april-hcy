@extends('errors.errors', ['title' => 'Page non trouvée'])

@section('content')
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
	                <div class="mobile-menu-item clearfix">
	                    <a href="{{ url('appointment') }}">Prendre un rendez-vous</a>
	                </div>
	            </li>
	        </ul>
	    </div>
	</div>

    <div class="main-content error-wrapper">
        <div class="content m-t-50">
            <div class="container">
                <div class="error-box">
                    <h1>404</h1>
                    <h3><i class="fa fa-warning"></i> Oops! Page non trouvée!</h3>
                    <p>La page que vous avez demandé n'existe pas.</p>
                    <div class="error-btn">
                        <a class="btn btn-primary" href="{{ url('home') }}">Revenir à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar-overlay" data-reff="#side_menu"></div>
@endsection