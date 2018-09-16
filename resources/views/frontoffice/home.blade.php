@extends('frontoffice.layouts.master', ['title' => 'Bienvenue sur APRIL, l\'application de prise de RDV en ligne de l\'Hôpital Central de Yaoundé'])

@section('title')

@section('content')
	<!-- Main Content -->
	<div class="main-content">
		<section class="section home-banner row-middle">
			<div class="inner-bg"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9">
						<div class="banner-content">
							<h1>APRIL - HCY</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a title="Prendre un rendez-vous" class="btn btn-primary consult-btn" href="{{ asset('appointment') }}">Prendre un RDV</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section features">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-header text-center">
							<h3 class="header-title">A propos de APRIL</h3>
							<div class="line"></div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim. Aenean vitae metus in augue pretium ultrices. Duis dictum eget dolor vel blandit.
							</p>
						</div>
					</div>
				</div>
				<div class="row feature-row">
					<div class="col-sm-6">
						<div class="feature-box">
							<div class="feature-img">
								<img width="60" height="60" alt="Prendre un Rendez-vous" src="{{ asset('img/icon-03.png') }}">
							</div>
							<h4>Prendre un rendez-vous</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="feature-box">
							<div class="feature-img">
								<img width="60" height="60" alt="Consult with a Doctor" src="{{ asset('img/icon-01.png') }}">
							</div>
							<h4>Voir les horaires de consultation</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="see-all">
							<a href="{{ url('about') }}" class="btn btn-primary see-all-btn">Lire plus</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section departments">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-header text-center">
							<h3 class="header-title"> Nos Spécialités</h3>
							<div class="line"></div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim. Aenean vitae metus in augue pretium ultrices. Duis dictum eget dolor vel blandit.
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="dept-box">
							<div class="dept-img">
								<a href="javascript:;"><img width="67" height="80" alt="Dentists" src="{{ asset('img/icon-04.png') }}"></a>
							</div>
							<h4><a href="javascript:;">Cardiologie</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="dept-box">
							<div class="dept-img">
								<a href="javascript:;"><img width="63" height="80" alt="Neurology" src="{{ asset('img/icon-05.png') }}"></a>
							</div>
							<h4><a href="javascript:;">Neurologie</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="dept-box">
							<div class="dept-img">
								<a href="javascript:;"><img width="92" height="80" alt="Opthalmology" src="{{ asset('img/icon-06.png') }}"></a>
							</div>
							<h4><a href="javascript:;">Opthalmologie</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="dept-box">
							<div class="dept-img">
								<a href="javascript:;"><img width="40" height="80" alt="Orthopedics" src="{{ asset('img/icon-07.png') }}"></a>
							</div>
							<h4><a href="javascript:;">Physio-kinésithérapie</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="dept-box">
							<div class="dept-img">
								<a href="javascript:;"><img width="76" height="80" alt="Cancer Department" src="{{ asset('img/icon-08.png') }}"></a>
							</div>
							<h4><a href="javascript:;">Infectiologie</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="dept-box">
							<div class="dept-img">
								<a href="javascript:;"><img width="47" height="80" alt="ENT Department" src="{{ asset('img/icon-09.png') }}"></a>
							</div>
							<h4><a href="javascript:;">ORL</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="see-all">
							<a href="{{ url('specialities') }}" class="btn btn-primary see-all-btn">Voir toutes les spécialités</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection