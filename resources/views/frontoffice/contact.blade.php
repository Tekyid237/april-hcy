@extends('frontoffice.layouts.master', ['title' => 'Contact'])

@section('content')
	<!-- Content -->
    <div class="main-content">

        <!-- Page Header -->
        <div class="content">
            <div class="container">	
                <div class="row">
                    <aside class="col-sm-4">
                        <div class="contact-left">
							<div class="contact-address">
								<h3 class="company-name">APRIL</h3>
								<p>L'hôpital Central de Yaoundé est situé à:
									<br> La rue 2.008, derrière CENAME,
									<br> Yaoundé, Cameroun </p>
								<p class="m-b-0"><strong>Tel</strong>: <a href="tel:+237222222086">(+237) 222 222 086</a>, <a href="tel:+222234020">(+237) 222 234 020</a>
									<br>
									<strong>Fax</strong>: <a href="tel:+23722232089">(+237) 222 232 089</a>
									<br>
									<strong>Email</strong>: <a href="mailto:info@hopitalcentral.cm">medifab@example.com</a></p>
							</div>	
                            <div class="working-hours">
                                <h3>Heures de consultations</h3>
                                <ul>
                                    <li><span>Lundi</span> <b>De 9.00 à 15.00</b></li>
                                    <li><span>Mardi</span> <b>De 9.00 à 15.00</b></li>
                                    <li><span>Mercredi</span> <b>De 9.00 à 15.00</b></li>
                                    <li><span>Jeudi</span> <b>De 9.00 à 15.00</b></li>
                                    <li><span>Vendredi</span> <b>De 9.00 à 15.00</b></li>
                                    <li><span>Samedi</span> <b>Pas de consultations</b></li>
                                    <li><span>Dimanche</span> <b>Pas de consultations</b></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <div class="col-sm-8 map-frame">
                        <iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.715762680772!2d11.50820551410908!3d3.8710197971842732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcf76fcd36bb5%3A0xcd5127c4d68f875!2sH%C3%B4pital+Central!5e0!3m2!1sfr!2scm!4v1537140470510" height="450" allowfullscreen></iframe>
						<p class="contact-cont">APRIL en coordination avec le personnel l'Hôpital Central de Yaoundé vous permet de prendre un rendez-vous n'importe où.<br/>
						L'Hôpital Central de Yaoundé est situé au quartier Centre Ville , rue 2.008 derrière la CENAME (Centrale Nationale de Médicaments Essentiels) et non loin du Camp SIC Messa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection