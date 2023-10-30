@extends('layouts.landing')

@section('content')


@include('includes.nav')
    
<!-- Swiper Silder
    ================================================== --> 
<!-- Slider main container -->
<div class="swiper-container main-slider" id="myCarousel">
  <div class="swiper-wrapper">
    <div class="swiper-slide slider-bg-position" style="background:url('img/img1.png')" data-hash="slide1">
      <!-- <h2 style="color:red">We supply diesel </h2>  -->
    </div>
    <div class="swiper-slide slider-bg-position" style="background:url('img/img2.png')" data-hash="slide2">
    <!-- <h2 style="color:red"> in Nigeria as well as overseas buyers</h2> -->
    </div>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
  <!-- Add Navigation -->
  <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
  <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
</div>

  <!-- Service
    ================================================== -->
<section class="service-sec" id="benefits">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="heading text-md-center text-xs-center">
      <h2><small>SUPPLY MODEL</small>
      Depending on the buyer's request, our trading process includes CIF, TTO, and TTT.
    </div>
        </div>
      <div class="col-md-8">
        <div class="row">
            <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-truck" aria-hidden="true"></i>
          <h3>Trucking:</h3>
          <p>In this case, we use a tanker/truck to deliver diesel/AGO to your home/office.</p>
        </div>
        <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-money" aria-hidden="true"></i>
          <h3>Cost Insurance and Freight (CIF): </h3>
          <p>In this case, We will manage everything from loading the vessel to paying for insurance and delivering the cargo to the buyer's desired location.</p>
        </div>
        <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-subway" aria-hidden="true"></i>
          <h3>Tanker Take Over (TTO): </h3>
          <p>In this situation, our buyer will take over the vessel, discharge the commodity at their
             destination, and return the tanker to us.</p>
        </div>
        <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-credit-card" aria-hidden="true"></i>
          <h3>Tanker To Tanker (TTT): </h3>
          <p>In this situation, the buyer uses their own vessel to trade long sides with our tanker, and then the product is transshipped once the transaction is completed.</p>
        </div>
        </div>
      </div>
      <div class="col-md-4"> <img src="img/pour.jpg" style="height:400px" class="img-fluid" /> </div>
    </div>
    <!-- /.row --> 
  </div>
</section>

<!-- About 
    ================================================== -->
<section class="about-sec parallax-section" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h2>About Diesel</h2>
           <h3><small>(AGO, D2, D3)</small>
          </h3>
      </div>
      <div class="col-md-4">
        <p>What Exactly Is Diesel?</p>
        <p>Diesel is a combination of crude oil components known as hydrocarbons.
          The components for this fuel are extracted from crude oil using fractionated distillation.
        </p>
        <p>
        Though it is frequently used for comparable reasons as gasoline, 
        it burns differently and hence requires a different sort of engine to function. 
        Furthermore, while diesel is heavier 
        and less volatile than gasoline, it is frequently more efficient, particularly with heavy loads.
      <p>
      </div>
      <div class="col-md-4">
        <p>
          1) AGO (Automotive Gas Oil): 
          AGO is the name given to fuel intended for use in road vehicles powered by diesel engines 
          (trucks, buses, vans, and cars). The term AGO refers to the NNPC grade of diesel/gas oil.
        </p>
        <p>
         2) D2: D2 diesel, commonly known as Gasoil,
          is a fuel oil generated from the second distillation of crude oil. D2 diesel products have varying levels of sulphur and 
        are manufactured without the use of reformers or additives. It could also be Autogas Oil (AGO).
        </p>
        <p><a href="#" class="btn btn-transparent-white btn-capsul">Explore More</a></p>
      </div>
    </div>
  </div>
</section>  


<section class="contact-sec" id="contact">
  <div class="container">
    <h2>Get in Touch </h2>
    <form method="POST" action="{{route('/contact')}}">
      @csrf
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleName">Name</label>
          <input type="text" name="name" class="form-control" id="exampleName" aria-describedby="emailHelp">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="examplePhone">Phone Number</label>
          <input type="text" name="phone" class="form-control" id="examplePhone" aria-describedby="emailHelp">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> </div>
      </div>
      <div class="col-md-12">
        <label for="exampleTextarea">Enter your Message</label>
        <textarea class="form-control" name="message" id="exampleTextarea" rows="3"></textarea>
      </div>
      <div class="col-md-12 text-xs-center action-block"> 
        <button type="submit" class="btn btn-capsul btn-aqua">Submit</button> 
      </div>

    </div>

    </form>
    
  </div>
</section>


 <!-- Footer -->
 <footer style="background:black">
        	<div class="footer-top">
		        <div class="container">
		        	<div class="row">
		        		<div class="col-md-4 col-lg-4 footer-about wow fadeInUp">
		        			<!-- <img class="img-fluid mt-3" src="img/logo.jpg" alt="logo-footer" style="height:60px" > -->
                    <br/>
                    <p>
                    We supply diesel in Abuja, Nigeria. We offer diesel (AGO, D2, and D6) to Nigerian homes,
                    offices, tank farms, gas stations, and organizations, as well as overseas buyers
                    </p>
		        		
	                </div>
		        		<div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown">
		        			<h3>Contact</h3>
		                	<p><i class="fa fa-map-marker-alt"></i> A10 Garima Plaza by Arab Junction Kubwa Express, Abuja Nigeria</p>
		                	<p><i class="fa fa-phone"></i> Phone:  +2348038683745</p>
		                	<p><i class="fa fa-envelope"></i> Email: <a href="mailto:ocheassco.inhead@yahoo.com">ocheassco.inhead@yahoo.com</a></p>
	                    </div>
	                    <div class="col-md-4 col-lg-3 footer-social wow fadeInUp">
	                    	<h3>Follow us</h3>
	                    	<p>
	                    		<a href="https://web.facebook.com/groups/669191241286350/?mibextid=HsNCOg"><i class="fa fa-facebook" style="color:white"></i></a> 
                          <a href="https://twitter.com/ocheassco"><i class="fa fa-twitter" style="color:white"></i></a> 
                           
                          <a href="https://www.instagram.com/ocheassco/"><i class="fa fa-instagram" style="color:white"></i></a> 
	                    	</p>
	                    </div>
		            </div>
		        </div>
	        </div>
	        <div class="footer-bottom">
	        	<div class="container">
	        		<div class="row">
	           			<div class="col-md-5 footer-copyright">
	                    	<p>Copyright &copy; 2022 <small>OCHEASSCO</small>. All Rights Reserved <br/>
                        Designed by Elbethel<a href="https://ocheassco.com/"> ocheassco</a></p>
	                    </div>
	           			
	        	</div>
	        </div>
        </footer>

@endsection
