@extends('frontoffice.layouts.master', ['title'=>'Mon compte'])

@section('content')
    <div class="main-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <span>Mon Compte</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container">
                <div class="row">
                	<div class="">
                		<div class="col-lg-6 col-sm-6">
                			<div class="card hovercard">
                				<div class="card-background">
                					<img class="card-bkimg" alt="{{ Auth::user()->firstname.' '.Auth::user()->lastname }}" src="{{ asset('img/default.jpg') }}">
                				</div>
                				<div class="useravatar">
                					<img alt="" src="{{ asset('img/default.jpg') }}" style="cursor: pointer;">
                				</div>
                				<div class="card-info">
                					<span class="card-title">{{ Auth::user()->firstname.' '.Auth::user()->lastname }}</span>
                				</div>
                			</div>
                			<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                				<div class="btn-group" role="group">
                					<button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="fa fa-user" aria-hidden="true"></span>
                						<div class="hidden-xs">Profil</div>
                					</button>
                				</div>
                				<div class="btn-group" role="group">
                					<button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="fa fa-gear" aria-hidden="true"></span>
                						<div class="hidden-xs">Paramètres</div>
                					</button>
                				</div>
                			</div>

                			<div class="well well-box">
                				<div class="tab-content">
                					<div class="tab-pane fade in active" id="tab1">
                						<h3>Modifier mes infos de compte</h3>
                						<form class="form-signin" id="registerForm" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                							@csrf
                							<div class="form-group">
                								<label for="firstname">Prénom (s)</label>
                								<input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ auth()->user()->firstname }}" autofocus>

                								@if ($errors->has('firstname'))
                								<span class="invalid-feedback" role="alert">
                									<strong>{{ $errors->first('firstname') }}</strong>
                								</span>
                								@endif
                							</div>

                							<div class="form-group">
                								<label for="lastname">Nom (s)</label>
                								<input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ auth()->user()->lastname }}" required>

                								@if ($errors->has('lastname'))
                								<span class="invalid-feedback" role="alert">
                									<strong>{{ $errors->first('lastname') }}</strong>
                								</span>
                								@endif
                							</div>

                							<div class="form-group">
                								<label for="email">Adresse email</label>
                								<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ auth()->user()->email }}" required>

                								@if ($errors->has('email'))
                								<span class="invalid-feedback" role="alert">
                									<strong>{{ $errors->first('email') }}</strong>
                								</span>
                								@endif
                							</div>

                							<div class="form-group">
                								<label for="phone">Numéro de téléphone</label>
                								<input id="phone" type="tel" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                								@if ($errors->has('phone'))
                								<span class="invalid-feedback" role="alert">
                									<strong>{{ $errors->first('phone') }}</strong>
                								</span>
                								@endif
                							</div>
                							<div class="form-group">
                								<label for="phone">Numéro de téléphone</label>
                								<input id="phone" type="tel" class="form-control input-inline{{ $errors->has('email') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                							</div>
                							

                							<div class="form-group text-center">
                								<button class="btn btn-primary" type="submit">Mettre à jour mon profil</button>
                							</div>
                						</form>
                					</div>
                					<div class="tab-pane fade in" id="tab2">
                						<h3>This is tab 2</h3>
                					</div>
                					<div class="tab-pane fade in" id="tab3">
                						<h3>This is tab 3</h3>
                					</div>
                				</div>
                			</div>

                		</div>
                		<div class="col-lg-6 col-sm-6">
                			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
@endsection