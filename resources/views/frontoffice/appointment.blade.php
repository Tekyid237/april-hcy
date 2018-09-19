@extends('frontoffice.layouts.master', ['title' => 'Rendez-vous'])

@section('stylesheet')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
@endsection

@section('content')
	<div class="main-content account-content">
		
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-header text-center">
							<h3 class="header-title">Prendre un rendez-vous</h3>
							<div class="line"></div>
						</div>
					</div>
				</div>
				<div class="account-box">
					<div class="appointment">
						<ul class="nav nav-tabs nav-justified">
							<li class="active">
								<a href="#user-consultation" data-toggle="tab" aria-expanded="true"><span>RDV pour moi</span></a>
							</li>
							<li class="">
								<a href="#clinic-consultation" data-toggle="tab" aria-expanded="false"><span>Pour un autre patient</span></a>
							</li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane" id="clinic-consultation">
								<form>
									<div class="form-group">
										<label>Name <span class="text-red">*</span></label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label>Email <span class="text-red">*</span></label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label>Mobile <span class="text-red">*</span></label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label>Select Consultation Type <span class="text-red">*</span></label>
										<select class="select">
											<option value="">Please select</option>
											<option value="Blood Checkup">Blood Checkup</option>
											<option value="Diabetology">Diabetology</option>
											<option value="Endocrinology">Endocrinology</option>
											<option value="Vaccination Center">Vaccination Center</option>
											<option value="Interventional Cardiology">Interventional Cardiology</option>
											<option value="Pulmonology">Pulmonology</option>
											<option value="Gastro Entorology">Gastro Entorology</option>
											<option value="Nephrology">Nephrology</option>
											<option value="Psychiatry">Psychiatry</option>
											<option value="Obstetrics & Gynaecology">Obstetrics & Gynaecology</option>
											<option value="Urology">Urology</option>
											<option value="Physiotherapy">Physiotherapy</option>
											<option value="Premarital Counseling">Premarital Counseling</option>
										</select>
									</div>
									<div class="form-group">
										<label>Message (optional)</label>
										<textarea class="form-control"></textarea>
									</div>
									<div class="form-group text-center m-b-0">
										<input type="submit" class="btn btn-primary account-btn" value="Submit" />
									</div>
								</form>
							</div>
							<div class="tab-pane active" id="user-consultation">
								<form>
									<div class="form-group">
										<label>Choose the Date</label>
										<div class="cal-icon">
											<input type="text" class="form-control datetimepicker" />
										</div>
									</div>
									<div class="form-group">
										<label class="m-b-20">Choose your Convenient Time</label>
										<ul class="appoint-time">
											<li>10:00am - 11:00am</li>
											<li>11:00am - 12:00pm</li>
											<li class="selected">12:00pm - 01:00pm</li>
											<li>01:00pm - 02:00pm</li>
											<li>02:00pm - 03:00pm</li>
											<li>03:00pm - 04:00pm</li>
											<li>04:00pm - 05:00pm</li>
											<li>05:00pm - 06:00pm</li>
										</ul>
										<div class="text-center">
											<a href="#" class="btn btn-primary more-btn">Show me more times</a>
										</div>
									</div>
									<div class="form-group">
										<label>Select the Treatment Name</label>
										<select class="select">
											<option value="">Option 1</option>
											<option value="">Option 1</option>
											<option value="">Option 1</option>
										</select>
									</div>
									<div class="form-group">
										<label>Choose the Doctor</label>
										<select class="select">
											<option value="">Option 1</option>
											<option value="">Option 1</option>
											<option value="">Option 1</option>
										</select>
									</div>
									<div class="form-group text-center m-b-0">
										<button class="btn btn-primary account-btn" type="submit">Confirm Booking</button>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection