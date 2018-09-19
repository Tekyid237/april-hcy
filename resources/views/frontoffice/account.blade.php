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
                					<img class="card-bkimg" alt="" src="{{ asset('img/default-user-avatar.png') }}">
                				</div>
                				<div class="useravatar">
                					<img alt="" src="{{ asset('img/default-user-avatar.png') }}">
                				</div>
                				<div class="card-info"> <span class="card-title">Tatepon Jean-Calvin</span>

                				</div>
                			</div>
                			<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                				<div class="btn-group" role="group">
                					<button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                						<div class="hidden-xs">Infos de compte</div>
                					</button>
                				</div>
                				<div class="btn-group" role="group">
                					<button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                						<div class="hidden-xs">Mes rendez-vous</div>
                					</button>
                				</div>
                			</div>

                			<div class="well">
                				<div class="tab-content">
                					<div class="tab-pane fade in active" id="tab1">
                						<h3>This is tab 1</h3>
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
                	</div>
                </div>
            </div>
        </div>
    </div>
@endsection