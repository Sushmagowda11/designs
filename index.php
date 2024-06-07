<?php include('includes/header.php');?>
<head>
    <meta name="google-site-verification" content="dyLltWXZvzVA97-Ioa5uI62hd1ztHFxgDI4lhINlcK8" />
    <title>Taxi Services in Bangalore - Online Taxi Services Near Me</title>
    
    <meta name="description" content="Cabs4hire is an Online Taxi Services in Bangalore that provide cheap taxi services near me. You can hire cabs at affordable rates with experienced drivers." />
    
    <meta name="author" content="Cabs4hire" />
    <meta name="publisher" content="Cabs4hire" />
    
    <meta name="keywords" content="Taxi Services Near Me,cabs in Bangalore,cabs from bangalore,oneway drop taxi,outstaion cabs,tempo traveler hire,airport taxi, Taxi Services in Bangalore" />
    
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta property="og:locale" content="en_US" />
    
    <link rel="canonical" href="https://www.cabs4hire.com/">
    
    <meta property="og:url" content="https://www.cabs4hire.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Taxi Services in Bangalore - Online Taxi Services Near Me">
    <meta property="og:description" content="Cabs4hire is an Online Taxi Services in Bangalore that provide cheap taxi services near me. You can hire cabs at affordable rates with experienced drivers.">
    <meta property="og:image" content="https://www.cabs4hire.com/assets/img/normal/a1.png">
    
    <!--SCHEMA MARKUP-->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TravelAgency",
      "name": "Cabs4hire",
      "image": "https://www.cabs4hire.com/assets/img/normal/a1.png",
      "@id": "https://www.cabs4hire.com/assets/img/normal/a1.png",
      "url": "https://www.cabs4hire.com/",
      "telephone": "8050005444",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "No 133F Madi Mariyappa Main Roadarichinniap Layout mariyanna palya",
        "addressLocality": "Bangalore",
        "postalCode": "560024",
        "addressCountry": "IN"
      }  
    }
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-18H7T2RJYB">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-18H7T2RJYB');
    </script>
    
</head>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCE0wwGg6QisQxK59y7Wjvgw2XxAEcXXQs&libraries=places"></script>
<script>
 function initialize() {
     var options = {
      types: ['(cities)'],
      componentRestrictions: {country: "in"}
     };
   var input = document.getElementById('searchTextField');
   var autocomplete = new google.maps.places.Autocomplete(input, options);
     google.maps.event.addListener(autocomplete, 'place_changed', function () {
         var place = autocomplete.getPlace();
         document.getElementById('city2').value = place.name;
         document.getElementById('cityLat').value = place.geometry.location.lat();
         document.getElementById('cityLng').value = place.geometry.location.lng();
     });
 }
 
 function initialize1() {
     var options1 = {
      types: ['(cities)'],
      componentRestrictions: {country: "in"}
     };
     var input1 = document.getElementById('searchTextField1');
     var autocomplete = new google.maps.places.Autocomplete(input1, options1);
     google.maps.event.addListener(autocomplete, 'place_changed', function () {
         var place1 = autocomplete.getPlace();
         document.getElementById('city21').value = place1.name;
         document.getElementById('cityLat1').value = place1.geometry.location.lat();
         document.getElementById('cityLng1').value = place1.geometry.location.lng();
     });
 }
 
 function initialize2() {
     var options2 = {
      types: ['(cities)'],
      componentRestrictions: {country: "in"}
     };
     var input1 = document.getElementById('searchTextField2');
     var autocomplete = new google.maps.places.Autocomplete(input1, options2);
     google.maps.event.addListener(autocomplete, 'place_changed', function () {
         var place1 = autocomplete.getPlace();
         document.getElementById('city22').value = place1.name;
         document.getElementById('cityLat2').value = place1.geometry.location.lat();
         document.getElementById('cityLng2').value = place1.geometry.location.lng();
     });
 }
 
 function initialize3() {
     var options3 = {
      types: ['(cities)'],
      componentRestrictions: {country: "in"}
     };
     var input1 = document.getElementById('searchTextField3', options3);
     var autocomplete = new google.maps.places.Autocomplete(input1);
     google.maps.event.addListener(autocomplete, 'place_changed', function () {
         var place1 = autocomplete.getPlace();
         document.getElementById('city23').value = place1.name;
         document.getElementById('cityLat3').value = place1.geometry.location.lat();
         document.getElementById('cityLng3').value = place1.geometry.location.lng();
     });
 }
 
 function initialize4() {
     var options3 = {
      types: ['(cities)'],
      componentRestrictions: {country: "in"}
     };
     var input1 = document.getElementById('searchTextField4', options3);
     var autocomplete = new google.maps.places.Autocomplete(input1);
     google.maps.event.addListener(autocomplete, 'place_changed', function () {
         var place1 = autocomplete.getPlace();
         document.getElementById('city4').value = place1.name;
         document.getElementById('cityLat4').value = place1.geometry.location.lat();
         document.getElementById('cityLng4').value = place1.geometry.location.lng();
     });
 }
 google.maps.event.addDomListener(window, 'load', initialize);
 google.maps.event.addDomListener(window, 'load', initialize1);
 google.maps.event.addDomListener(window, 'load', initialize2);
 google.maps.event.addDomListener(window, 'load', initialize3);
 google.maps.event.addDomListener(window, 'load', initialize4);
</script> 

<style>
    /*.input-container input {*/
    /*    border: none;*/
    /*    box-sizing: border-box;*/
    /*    outline: 0;*/
    /*    padding: .75rem;*/
    /*    position: relative;*/
    /*    width: 100%;*/
    /*}*/
    
    .fa-ico{
        right: 20px;
        position: absolute;
        bottom: 27px;
    }
      input#session-date {
          display: inline-block;
          position: relative;
      }
    
      input[type="date"]::-webkit-calendar-picker-indicator {
          background: transparent;
          bottom: 0;
          color: transparent;
          cursor: pointer;
          height: auto;
          left: 0;
          position: absolute;
          right: 0;
          top: 0;
          width: auto;
      }
</style>

        <div class="as-hero-wrapper hero-2">
            <div class="hero-slider-2 as-carousel" id="heroSlide2" data-slide-show="1" data-md-slide-show="1" data-fade="true">
                <div class="as-hero-slide">
                    <div class="as-hero-bg" data-bg-src="assets/img/bg/hero_bg_2_1.jpg"><img src="assets/img/bg/hero_overlay_2.png" alt="Hero Image" /></div>
                    <div class="container">
                    	<div class="row">
                    		<!--<div class="col-md-12">-->
                    		<!--	<div class="hero-style2" style="margin-bottom: 20px;">-->
                    		<!--	    <div class="booking-sec">-->
                      <!--              <div class="container">-->
                      <!--                  <form action="https://angfuzsoft.com/html/taxseco/demo/mail.php" method="POST" class="booking-form ajax-contact">-->
                      <!--                      <div class="booking-select-class">-->
                      <!--                          <div class="class-name"><input type="radio" id="standard" name="booking_class" value="STANDARD" checked="checked" /> <label for="standard">STANDARD</label></div>-->
                      <!--                          <div class="class-name"><input type="radio" id="business" name="booking_class" value="BUSINESS" /> <label for="business">BUSINESS</label></div>-->
                      <!--                          <div class="class-name"><input type="radio" id="economy" name="booking_class" value="ECONOMY" /> <label for="economy">ECONOMY</label></div>-->
                      <!--                          <div class="class-name"><input type="radio" id="vip" name="booking_class" value="VIP" /> <label for="vip">VIP</label></div>-->
                      <!--                          <div class="class-name"><input type="radio" id="minivan" name="booking_class" value="MINIVAN" /> <label for="minivan">MINIVAN</label></div>-->
                      <!--                          <div class="class-name"><input type="radio" id="comfort" name="booking_class" value="COMFORT" /> <label for="comfort">COMFORT</label></div>-->
                      <!--                      </div>-->
                      <!--                      <div class="input-wrap">-->
                      <!--                          <div class="row">-->
                      <!--                              <div class="form-group col-xl-3 col-lg-4 col-sm-6"><input type="text" class="form-control" name="name" id="name" placeholder="Your Name" /></div>-->
                      <!--                              <div class="form-group col-xl-3 col-lg-4 col-sm-6"><input type="number" class="form-control" name="phone" id="phone" placeholder="Phone Number" /></div>-->
                      <!--                              <div class="form-group col-xl-3 col-lg-4 col-sm-6"><input type="text" class="form-control" name="passenger" id="passenger" placeholder="Passengers#" /></div>-->
                      <!--                              <div class="form-group col-xl-3 col-lg-4 col-sm-6"><input type="text" class="form-control" name="s-destination" id="s-destination" placeholder="Start Destination" /></div>-->
                      <!--                              <div class="form-group col-xl-3 col-lg-4 col-sm-6"><input type="text" class="form-control" name="e-destination" id="e-destination" placeholder="End Destination" /></div>-->
                      <!--                              <div class="form-group col-xl-3 col-lg-4 col-sm-6"><input type="text" class="date-pick form-control" name="date" id="date-pick" placeholder="Select Date" /></div>-->
                      <!--                              <div class="form-group col-xl-3 col-lg-4 col-sm-6"><input type="text" class="time-pick form-control" name="time" id="time-pick" placeholder="Select Time" /></div>-->
                      <!--                              <div class="form-btn col-xl-3 col-lg-4 col-sm-6"><button class="as-btn">Book Taxi Now</button></div>-->
                      <!--                          </div>-->
                      <!--                          <p class="form-messages mb-0 mt-3"></p>-->
                      <!--                      </div>-->
                      <!--                  </form>-->
                      <!--              </div>-->
                      <!--          </div>-->
                      <!--      <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.7s">24/7 Online Taxi Booking Service</span>-->
                      <!--      <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.4s">Enjoying Comfortable</h1>-->
                      <!--      <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.1s">Trip With Cabs4hire</h1>-->
                      <!--      <p class="hero-text" data-ani="slideinup" data-ani-delay="0.1s">Dramatically scale backward compatible portals after market positioning deliverables sertively predominate rather.</p>-->
                      <!--      <div class="btn-group" data-ani="slideinup" data-ani-delay="0.5s">-->
                      <!--          <a href="about.php" class="as-btn style3 style-skew"><span class="btn-text">About Us</span></a> <a href="triff.php" class="as-btn style2 style-skew"><span class="btn-text">Search Vehicle</span></a>-->
                      <!--      </div>-->
                      <!--  </div>-->
                    		<!--</div>-->
                    	<div class="col-md-12">
                            <div class="container" style="padding-right: 0px;padding-left: 0px;">
								  <div class="tab" >
								      
								      <div class='row'>
								          <div class='col-md-12'>
								              <h3 style='text-align:center'>Cabs Only with chauffeur(Driver)</h3>
								          </div>
								          <div class='col-md-3'>
								              
								          </div>
								          <div class='col-md-6'>
								               <ul class="tabs-btn">
								      <li class="tab-btn" >One Way</li>
								      <li class="tab-btn">Round Trip</li>
								      <!--<li class="tab-btn">Local</li>-->
								      <li class="tab-btn">Airport</li>
								    
								    </ul>
								          </div>
								      </div>
								   
								    <div class="tabs-content">
								      <div class="tab-content">
								       <div class="position-relative space" style="padding-top: 0px;padding-bottom: 0px;">
								            <div class="container" style="padding-right: 0px;padding-left: 0px;">
								                <form action="" method="POST" class="booking-form4 ajax-contact">
								                    <div class="row">
							                            <div class="form-group col-sm-3"><input required type="text" class="form-control" name="fromlocation" id="searchTextField" placeholder="From" /> <i class="fal fa-location-dot"></i></div>
                                                        <div class="form-group col-sm-3"><input required type="text" class="form-control" name="tolocation" id="searchTextField1" placeholder="To" /> <i class="fal fa-location-dot"></i></div>
								                        <input type="hidden" id="city2" name="city2" />
                                                        <input type="hidden" id="cityLat" name="cityLat" />
                                                        <input type="hidden" id="cityLng" name="cityLng" />
                                                         
                                                        <input type="hidden" id="city21" name="city21" />
                                                        <input type="hidden" id="cityLat1" name="cityLat1" />
                                                        <input type="hidden" id="cityLng1" name="cityLng1" />
								                        <div class="form-group col-sm-3">
								                            <input required type="date" class="date-pick form-control" name="reservation_date" id="date-pick" placeholder="Pickup Date" /> 
							                                <i class="fal fa-calendar fa-ico" aria-label="fa fa-calendar"></i>
							                            </div>
								                        <div class="form-group col-sm-3">
								                            <select name="reservation_time" id="time-pick" style="padding: 0.175rem 0.75rem; border: 1px solid #ced4da;">
								                                <option>Select Pickup Time</option>
								        <option value="12:00AM">12:00AM</option>
								        <option value="12:15AM">12:15AM</option>
								        <option value="12:30AM">12:30AM</option>
								        <option value="12:45AM">12:45AM</option>
								        <option value="01:00AM">01:00AM</option>
								        <option value="01:15AM">01:15AM</option>
								        <option value="01:30AM">01:30AM</option>
								        <option value="01:45AM">01:45AM</option>
								        <option value="02:00AM">02:00AM</option>
								        <option value="02:15AM">02:15AM</option>
								        <option value="02:30AM">02:30AM</option>
								        <option value="02:45AM">02:45AM</option>
								        <option value="03:00AM">03:00AM</option>
								        <option value="03:15AM">03:15AM</option>
								        <option value="03:30AM">03:30AM</option>
								        <option value="03:45AM">03:45AM</option>
								        <option value="04:00AM">04:00AM</option>
								        <option value="04:15AM">04:15AM</option>
								        <option value="04:30AM">04:30AM</option>
								        <option value="04:45AM">04:45AM</option>
								        <option value="05:00AM">05:00AM</option>
								        <option value="05:15AM">05:15AM</option>
								        <option value="05:30AM">05:30AM</option>
								        <option value="05:45AM">05:45AM</option>
								        <option value="06:00AM">06:00AM</option>
								        <option value="06:15AM">06:15AM</option>
								        <option value="06:30AM">06:30AM</option>
								        <option value="06:45AM">06:45AM</option>
								        <option value="07:00AM">07:00AM</option>
								        <option value="07:15AM">07:15AM</option>
								        <option value="07:30AM">07:30AM</option>
								        <option value="07:45AM">07:45AM</option>
								        <option value="08:00AM">08:00AM</option>
								        <option value="08:15AM">08:15AM</option>
								        <option value="08:30AM">08:30AM</option>
								        <option value="08:45AM">08:45AM</option>
								        <option value="09:00AM">09:00AM</option>
								        <option value="09:15AM">09:15AM</option>
								        <option value="09:30AM">09:30AM</option>
								        <option value="09:45AM">09:45AM</option>
								        <option value="10:00AM">10:00AM</option>
								        <option value="10:15AM">10:15AM</option>
								        <option value="10:30AM">10:30AM</option>
								        <option value="10:45AM">10:45AM</option>
								        <option value="11:00AM">11:00AM</option>
								        <option value="11:15AM">11:15AM</option>
								        <option value="11:30AM">11:30AM</option>
								        <option value="11:45AM">11:45AM</option>
								        <option value="12:00PM">12:00PM</option>
								        <option value="12:15PM">12:15PM</option>
								        <option value="12:30PM">12:30PM</option>
								        <option value="12:45PM">12:45PM</option>
								        <option value="01:00AM">01:00PM</option>
								        <option value="01:15PM">01:15PM</option>
								        <option value="01:30PM">01:30PM</option>
								        <option value="01:45PM">01:45PM</option>
								        <option value="02:00PM">02:00PM</option>
								        <option value="02:15PM">02:15PM</option>
								        <option value="02:30PM">02:30PM</option>
								        <option value="02:45PM">02:45PM</option>
								        <option value="03:00PM">03:00PM</option>
								        <option value="03:15PM">03:15PM</option>
								        <option value="03:30PM">03:30PM</option>
								        <option value="03:45PM">03:45PM</option>
								        <option value="04:00PM">04:00PM</option>
								        <option value="04:45PM">04:15PM</option>
								        <option value="05:00PM">04:30PM</option>
								        <option value="05:15PM">04:45PM</option>
								        <option value="05:30PM">05:00PM</option>
								        <option value="05:45PM">05:15PM</option>
								        <option value="06:00PM">05:30PM</option>
								        <option value="06:15PM">05:45PM</option>
								        <option value="06:30PM">06:00PM</option>
								        <option value="06:45PM">06:15PM</option>
								        <option value="07:00PM">06:30PM</option>
								        <option value="07:15PM">06:45PM</option>
								        <option value="07:30PM">07:00PM</option>
								        <option value="07:45PM">07:15PM</option>
								        <option value="08:00PM">07:30PM</option>
								        <option value="08:15PM">07:45PM</option>
								        <option value="08:30PM">08:00PM</option>
								        <option value="08:45PM">08:15PM</option>
								        <option value="09:00PM">08:30PM</option>
								        <option value="09:15PM">08:45PM</option>
								        <option value="09:30PM">09:00PM</option>
								        <option value="09:45PM">09:15PM</option>
								        <option value="10:00PM">09:30PM</option>
								        <option value="10:15PM">09:45PM</option>
								        <option value="10:30PM">10:00PM</option>
								        <option value="10:45PM">10:15PM</option>
								        <option value="11:00PM">10:30PM</option>
								        <option value="11:15PM">10:45PM</option>
								        <option value="11:30PM">11:00PM</option>
								        <option value="11:45PM">11:15PM</option>
								        <
								        
								                                
								                            </select>
								                            <!--<input required type="time" class="time-pick form-control" name="reservation_time" id="time-pick" placeholder="Pickup Time" /> -->
							                            </div>
								                        <!-- <div class="form-group col-sm-6">
								                            <select class="form-select" name="vehicle" id="vehicle">
								                                <option value="Normal" selected="selected" disabled="disabled">Select Vehicle Class</option>
								                                <option value="Normal">Normal Car</option>
								                                <option value="Business">Business Class</option>
								                                <option value="vip">VIP Service</option>
								                            </select>
								                        </div> -->
								                      
								                        
								                    </div>
								                    <div class='row'>
								                        <div class='col-md-4'></div>
								                        <div class='col-md-4'>
								                            <div class="form-btn">
								                                <button type="submit" class="as-btn" style="color: #000" name="onewaytrip">Explore Cabs</button>
								                                <!--<a onclick="document.getElementById('id01').style.display='block'" class="as-btn">Explore Cabs</a>-->
							                                </div>
								                        </div>
								                    </div>
								                    <p class="form-messages mb-0 mt-3"></p>
								                </form>
								            </div>
								        </div>
								      </div>
								      <div class="tab-content">
								         <div class="position-relative space" style="padding-top: 0px;padding-bottom: 0px;">
                                            <div class="container" style="padding-right: 0px;padding-left: 0px;">
                                                <form action="" method="POST" class="booking-form4 ajax-contact">
                                                    <div class="row">
                                                        
                                                        <div class="form-group col-sm-3"><input required type="text" class="form-control" name="fromlocation" id="searchTextField2" placeholder="From" /> <i class="fal fa-location-dot"></i></div>
                                                        <div class="form-group col-sm-3"><input required type="text" class="form-control" name="tolocation" id="searchTextField3" placeholder="To" /> <i class="fal fa-location-dot"></i></div>
                                                        <input type="hidden" id="city22" name="city2" />
                                                         <input type="hidden" id="cityLat2" name="cityLat" />
                                                         <input type="hidden" id="cityLng2" name="cityLng" />
                                                         <input type="hidden" id="city23" name="city21" />
                                                         <input type="hidden" id="cityLat3" name="cityLat1" />
                                                         <input type="hidden" id="cityLng3" name="cityLng1" />
                                                        <div class="form-group col-sm-2"><input required type="date" class="date-pick form-control" name="reservation_date" id="date-pick" placeholder="Pickup Date" /> <i class="fal fa-calendar fa-ico" aria-label="fa fa-calendar"></i></div>
                                                         <div class="form-group col-sm-2"><input required type="date" class="date-pick form-control" name="reservation_date1" id="date-pick" placeholder="Return Date" /> <i class="fal fa-calendar fa-ico" aria-label="fa fa-calendar"></i></div>

                                                        <div class="form-group col-sm-2">
                                                            <select name="reservation_time" id="time-pick" style="padding: 0.375rem 0.75rem; border: 1px solid #ced4da;">
								                                <option>Pickup Time</option>
								                                <option value="1 AM - 2 AM">1 AM - 2 AM</option>
								                                <option value="2 AM - 3 AM">2 AM - 3 AM</option>
								                                <option value="3 AM - 4 AM">3 AM - 4 AM</option>
								                                <option value="4 AM - 5 AM">4 AM - 5 AM</option>
								                                <option value="5 AM - 6 AM">5 AM - 6 AM</option>
								                                <option value="6 AM - 7 AM">6 AM - 7 AM</option>
								                                <option value="7 AM - 8 AM">7 AM - 8 AM</option>
								                                <option value="8 AM - 9 AM">8 AM - 9 AM</option>
								                                <option value="9 AM - 10 AM">9 AM - 10 AM</option>
								                                <option value="10 AM - 11 AM">10 AM - 11 AM</option>
								                                <option value="11 AM - 12 PM">11 AM - 12 PM</option>
								                                <option value="12 PM - 1 PM">12 PM - 1 PM</option>
								                                <option value="1 PM - 2 PM">1 PM - 2 PM</option>
								                                <option value="2 PM - 3 PM">2 PM - 3 PM</option>
								                                <option value="3 PM - 4 PM">3 PM - 4 PM</option>
								                                <option value="4 PM - 5 PM">4 PM - 5 PM</option>
								                                <option value="5 PM - 6 PM">5 PM - 6 PM</option>
								                                <option value="6 PM - 7 PM">6 PM - 7 PM</option>
								                                <option value="7 PM - 8 PM">7 PM - 8 PM</option>
								                                <option value="8 PM - 9 PM">8 PM - 9 PM</option>
								                                <option value="9 PM - 10 PM">9 PM - 10 PM</option>
								                                <option value="10 PM - 11 PM">10 PM - 11 PM</option>
								                                <option value="11 PM - 12 AM">11 PM - 12 AM</option>
								                            </select>
                                                            <!--<input required type="time" class="time-pick form-control" name="reservation_time" id="time-pick" placeholder="Pickup Time" />-->
                                                        </div>
                                                        
                                                        <!--<div class="form-btn col-12"><button class="as-btn">Book Your Car Now</button></div>-->
                                                    </div>
                                                     <div class='row'>
								                        <div class='col-md-4'></div>
								                        <div class='col-md-4'>
								                            <div class="form-btn">
								                                <button type="submit" class="as-btn" name="roundtrip" style="color: #000">Explore Cabs</button>
								                                <!--<a href='cars.php'  class="as-btn">Explore Cabs</a>-->
							                                </div>
								                        </div>
								                    </div>
                                                    <p class="form-messages mb-0 mt-3"></p>
                                                </form>
                                            </div>
                                        </div>
								      </div>
								      
								      <!--<div class="tab-content">-->
								      <!--   <div class="position-relative space" style="padding-top: 0px;padding-bottom: 0px;">-->
              <!--                              <div class="container" style="padding-right: 0px;padding-left: 0px;">-->
              <!--                                  <form action="" method="POST" class="booking-form4 ajax-contact">-->
              <!--                                      <div class="row">-->
                                                        
              <!--                                              <div class="form-group col-md-4"><input required type="text" class="form-control" name="s-destination" id="s-destination" placeholder="Pickup Location" /> <i class="fal fa-location-dot"></i></div>-->

                                                        <!--<div class="form-group col-sm-3">-->
                                                        <!--    <select class="form-select" name="vehicle" id="vehicle">-->
                                                        <!--        <option value="Normal" selected="selected" disabled="disabled">Rent For</option>-->
                                                        <!--        <option value="Normal">8 hours 80km</option>-->
                                                        <!--        <option value="Business">12 hours 120km</option>-->
                                                        <!--    </select>-->
                                                        <!--</div>-->
                                                        
                                                        
              <!--                                          <div class="form-group col-md-4"><input type="date" required class="date-pick form-control" name="date" id="date-pick" placeholder="Pickup Date" /> </div>-->
              <!--                                          <div class="form-group col-md-4"><input type="time" required class="time-pick form-control" name="time" id="time-pick" placeholder="Pickup Time" /> </div>-->
                                                        
                                                      
                                                        <!--<div class="form-btn col-12"><button class="as-btn">Book Your Car Now</button></div>-->
              <!--                                      </div>-->
              <!--                                       <div class='row'>-->
								      <!--                  <div class='col-md-4'></div>-->
								      <!--                  <div class='col-md-4'>-->
								      <!--                      <div class="form-btn"><a href='cars.php' class="as-btn">Explore Cabs</a></div>-->
								      <!--                  </div>-->
								      <!--              </div>-->
              <!--                                      <p class="form-messages mb-0 mt-3"></p>-->
              <!--                                  </form>-->
              <!--                              </div>-->
              <!--                          </div>-->
								      <!--</div>-->
								      <div class="tab-content">
								         <div class="position-relative space" style="padding-top: 0px;padding-bottom: 0px;">
                                            <div class="container" style="padding-right: 0px;padding-left: 0px;">
                                                <form action="" method="POST" class="booking-form4 ajax-contact">
                                                    <div class="row">
                                                       <!--<div class="form-group col-md-4"><input type="text" class="form-control" name="s-destination" id="s-destination" placeholder="City" /> <i class="fal fa-location-dot"></i></div>-->

                                                       <!-- <div class="form-group col-sm-2">-->
                                                       <!--     <select class="form-select" name="vehicle" id="vehicle">-->
                                                       <!--         <option value="Normal" selected="selected" disabled="disabled">TRIP</option>-->
                                                       <!--         <option value="Normal">Drop to Airport</option>-->
                                                                
                                                       <!--     </select>-->
                                                       <!-- </div>-->
                                                         <div class="form-group col-md-4"><input required type="text" class="form-control" name="tolocation" id="" placeholder="Pickup Address" /> <i class="fal fa-location-dot"></i></div>
                                                        <!--<div class="form-group col-sm-3"><input type="text" class="form-control" name="tolocation" id="searchTextField1" placeholder="To" /> <i class="fal fa-location-dot"></i></div>-->
								                       
                                                        <div class="form-group col-md-4"><input required type="date" class="date-pick form-control" name="reservation_date" id="date-pick" placeholder="Pickup Date" /> <i class="fal fa-calendar fa-ico" aria-label="fa fa-calendar"></i></div>
                                                        
                                                      

                                                      
                                                        <!-- <div class="form-group col-sm-6"><input type="text" class="form-control" name="passenger" id="passenger" placeholder="Passengers#" /> <i class="fal fa-user-group"></i></div> -->
                                                        
                                                        <div class="form-group col-md-4">
                                                            <select name="reservation_time" id="time-pick" style="padding: 0.375rem 0.75rem; border: 1px solid #ced4da;">
								                                <option>Select Pickup Time</option>
								                                <option value="1 AM - 2 AM">1 AM - 2 AM</option>
								                                <option value="2 AM - 3 AM">2 AM - 3 AM</option>
								                                <option value="3 AM - 4 AM">3 AM - 4 AM</option>
								                                <option value="4 AM - 5 AM">4 AM - 5 AM</option>
								                                <option value="5 AM - 6 AM">5 AM - 6 AM</option>
								                                <option value="6 AM - 7 AM">6 AM - 7 AM</option>
								                                <option value="7 AM - 8 AM">7 AM - 8 AM</option>
								                                <option value="8 AM - 9 AM">8 AM - 9 AM</option>
								                                <option value="9 AM - 10 AM">9 AM - 10 AM</option>
								                                <option value="10 AM - 11 AM">10 AM - 11 AM</option>
								                                <option value="11 AM - 12 PM">11 AM - 12 PM</option>
								                                <option value="12 PM - 1 PM">12 PM - 1 PM</option>
								                                <option value="1 PM - 2 PM">1 PM - 2 PM</option>
								                                <option value="2 PM - 3 PM">2 PM - 3 PM</option>
								                                <option value="3 PM - 4 PM">3 PM - 4 PM</option>
								                                <option value="4 PM - 5 PM">4 PM - 5 PM</option>
								                                <option value="5 PM - 6 PM">5 PM - 6 PM</option>
								                                <option value="6 PM - 7 PM">6 PM - 7 PM</option>
								                                <option value="7 PM - 8 PM">7 PM - 8 PM</option>
								                                <option value="8 PM - 9 PM">8 PM - 9 PM</option>
								                                <option value="9 PM - 10 PM">9 PM - 10 PM</option>
								                                <option value="10 PM - 11 PM">10 PM - 11 PM</option>
								                                <option value="11 PM - 12 AM">11 PM - 12 AM</option>
								                            </select>
                                                            <!--<input required type="time" class="time-pick form-control" name="reservation_time" id="time-pick" placeholder="Pickup Time" /> -->
                                                        </div>
                                                        <!-- <div class="form-group col-sm-6">
                                                            <select class="form-select" name="vehicle" id="vehicle">
                                                                <option value="Normal" selected="selected" disabled="disabled">Select Vehicle Class</option>
                                                                <option value="Normal">Normal Car</option>
                                                                <option value="Business">Business Class</option>
                                                                <option value="vip">VIP Service</option>
                                                            </select>
                                                        </div> -->
                                                      
                                                        <!--<div class="form-btn col-12"><button class="as-btn">Book Your Car Now</button></div>-->
                                                    </div>
                                                     <div class='row'>
								                        <div class='col-md-4'></div>
								                        <div class='col-md-4'>
								                            
								                            <div class="form-btn"><button type="submit" class="as-btn" name="airport" style="color: #000">Explore Cabs</button></div>
								                        </div>
								                    </div>
                                                    <p class="form-messages mb-0 mt-3"></p>
                                                </form>
                                            </div>
                                        </div>
								      </div>
								        
								        

								    </div>
								  </div>
                    		</div>                    	</div>
                        
                    </div>
                </div>
              
            </div>
            <!-- <div class="icon-box">
                <button data-slick-prev="#heroSlide2" class="slick-arrow default"><i class="far fa-chevron-left"></i></button> <button data-slick-next="#heroSlide2" class="slick-arrow default"><i class="far fa-chevron-right"></i></button>
            </div> -->
        </div>
        
         <div class="space" id="about-sec">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mb-5 mb-xl-0">
                        <div class="img-box1">
                            <div class="img1"><img src="assets/img/normal/a1.png" alt="About" /></div>
                            <div class="img2"><img src="assets/img/normal/a2.png" alt="About" /></div>
                            <div class="info-card">
                                <div class="info-card_icon text-title"><i class="fas fa-phone"></i></div>
                                <div class="info-card_content">
                                    <p class="info-card_text text-white">Call Us 24/7 Anytime:</p>
                                    <a href="tel:+91-8050005444" class="info-card_link text-white">+91-8050005444</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 ps-3 ps-xxl-5">
                        <div class="ps-xl-3">
                            <div class="title-area mb-30 text-md-start text-center">
                                <span class="sub-title">ABOUT OUR COMPANY</span>
                                    <h3 class="sec-title">One Stop Solution for Taxi Services in Bangalore</h3>
                            </div>
                            <p class="text-md-start text-center mb-40">
                                Welcome to the state of reliable and safe taxis. We, at Cabs4hire, provide <a href="https://www.cabs4hire.com/"><b>Taxi Services in Bangalore</b></a> and guarantee to make your ride comfortable and easy – offering you a hassle-free travel experience within your city or <a href="https://www.cabs4hire.com/outstation-car-rental-bangalore.php"><b>outstation</b></a> all across India. As one of the leading car booking service providers having presence across PAN India, we bring to you the best chauffeur driven cabs in your desired location.
                            </p>
                             <p class="text-md-start text-center mb-40">
                                We are reckoned as India’s finest outstation cab service provider, operating our fleet of modern, air-conditioned, GPS enabled vehicles across multiple cities of India. Our cabs combine the latest mobile technology to ensure safety and to provide passengers with the highest quality of service.
                            </p>
                           
                        </div>
                    </div>
                    <div class="col-xs-12">
                         <p class="text-md-start text-center mb-40" style='margin-top: 15px;'>
                                As there has always been a need to connect the country end-to-end, we have increased our geographical presence and fleet size to provide passengers with the amazing quality and easy <b>Taxi Services Near Me</b> on thousands of <a href="https://indiasomeday.com/en/travel-routes-through-india/"><b>routes across India</b></a>. With more than 25000+ driver partners spread across more than 4,000+ Indian cities, we have you covered all across India.
                            </p>
                             <p class="text-md-start text-center mb-40">
                                Insist on Cabs4hire to get an affordable, reliable, and on-time taxi service that you need and deserve!
                            </p>
                            
                    </div>
                </div>
            </div>
        </div>
        
            <section class="bg-smoke space" id="tariff">
          <div class="container">
               <div class="title-area text-center">
                    <span class="sub-title">OUR SERVICE TAXI</span>
                    <h1 class="sec-title">OUR TARIFF</h1>
                </div>
                <div class="row gy-30 filter-active">
                    <div class="col-xl-4 col-md-6 filter-item cat4 cat3">
                        <div class="taxi-box">
                            <div class="taxi-box_img"><img src="assets/img/cars/c1.png" alt="taxi"></div>
                            <h3 class="taxi-box_title"><a href="">SEDAN</a></h3>
                            <p class="taxi-box_rate">ONE WAY : ₹13/kms</p>
                            <p class="taxi-box_rate">ROUND TRIP : ₹12/kms</p>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 filter-item cat3 cat1">
                        <div class="taxi-box">
                            <div class="taxi-box_img"><img src="assets/img/cars/c2.png" alt="taxi"></div>
                            <h3 class="taxi-box_title"><a href="">PRIME SEDAN</a></h3>
                            <p class="taxi-box_rate">ONE WAY : ₹14/kms</p>
                            <p class="taxi-box_rate">ROUND TRIP : ₹13/kms</p>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 filter-item cat1 cat2">
                        <div class="taxi-box">
                            <div class="taxi-box_img"><img src="assets/img/cars/c3.png" alt="taxi"></div>
                            <h3 class="taxi-box_title"><a href="">SUV</a></h3>
                            <p class="taxi-box_rate">ONE WAY : ₹19/kms</p>
                            <p class="taxi-box_rate">ROUND TRIP : ₹16/kms</p>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 filter-item cat2 cat4">
                        <div class="taxi-box">
                            <div class="taxi-box_img"><img src="assets/img/cars/c4.png" alt="taxi"></div>
                            <h3 class="taxi-box_title"><a href="">INNOVA</a></h3>
                            <p class="taxi-box_rate">ONE WAY : ₹24/kms</p>
                            <p class="taxi-box_rate">ROUND TRIP : ₹17/kms</p>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 filter-item cat1 cat2">
                        <div class="taxi-box">
                            <div class="taxi-box_img"><img src="assets/img/cars/c5.png" alt="taxi"></div>
                            <h3 class="taxi-box_title"><a href="">INNOVA CRYSTA</a></h3>
                            <p class="taxi-box_rate">ONE WAY : ₹32/kms</p>
                            <p class="taxi-box_rate">ROUND TRIP : ₹20/kms</p>
                           
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>
       
        <section class=" space" style="background: #1b1b1b;">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title">Our Benefit Lists</span>
                    <h2 class="sec-title" style="color:#fff;">Why Choose Us</h2>
                </div>
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-card_icon shape-icon">
                                <div class="shape" data-mask-src="assets/img/shape/shape_bg_1.svg"></div>
                                <i class="fal fa-map-location-dot"></i>
                            </div>
                            <h3 class="feature-card_title">RAPID CITY TRANSFER</h3>
                            <p class="feature-card_text">Evolve sustainable e services for life grow biquitous through reliable is outside the box services.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card active">
                            <div class="feature-card_icon shape-icon">
                                <div class="shape" data-mask-src="assets/img/shape/shape_bg_1.svg"></div>
                                <i class="fal fa-lock-keyhole"></i>
                            </div>
                            <h3 class="feature-card_title">Safety Guarantee</h3>
                            <p class="feature-card_text" style="color:#fff;">Enable sustainable e services for life grow biquitous through reliable is outside the box through.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-card_icon shape-icon">
                                <div class="shape" data-mask-src="assets/img/shape/shape_bg_1.svg"></div>
                                <i class="fal fa-car-side"></i>
                            </div>
                            <h3 class="feature-card_title">Pro Cleared Drivers</h3>
                            <p class="feature-card_text">Cartsi sustainable e services for life grow biquitous through reliable is outside the box outside.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
      
       
         <section class="bg-smoke space">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title">Our Services</span>
                    <h2 class="sec-title">What we’re offering</h2>
                </div>
                <div class="row as-carousel" data-slide-show="3" data-md-slide-show="2" data-arrows="true">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-box">
                            <div class="service-box_img"><img src="assets/img/service/1.png" alt="service image" /></div>
                            <div class="service-box_content">
                                <!--<div class="service-box_icon"><i class="fa-light fa-city"></i></div>-->
                                <h3 class="service-box_title"><a href="">City Transport</a></h3>
                                <!--<p class="service-box_text" style="color:#fff;">Competently expedite seamless results and business</p>-->
                            </div>
                            <!--<a href="" class="as-btn">Learn More <i class="fas fa-arrow-right"></i></a>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-box">
                            <div class="service-box_img"><img src="assets/img/service/2.png" alt="service image" /></div>
                            <div class="service-box_content">
                                <!--<div class="service-box_icon"><i class="fa-light fa-business-time"></i></div>-->
                                <h3 class="service-box_title"><a href="">Business Trip</a></h3>
                                <!--<p class="service-box_text" style="color:#fff;">Competently expedite seamless results and business</p>-->
                            </div>
                            <!--<a href="" class="as-btn">Learn More <i class="fas fa-arrow-right"></i></a>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-box">
                            <div class="service-box_img"><img src="assets/img/service/3.png" alt="service image" /></div>
                            <div class="service-box_content">
                                <!--<div class="service-box_icon"><i class="fa-light fa-house-laptop"></i></div>-->
                                <h3 class="service-box_title"><a href="">Online Booking</a></h3>
                                <!--<p class="service-box_text" style="color:#fff;">Competently expedite seamless results and business</p>-->
                            </div>
                            <!--<a href="" class="as-btn">Learn More <i class="fas fa-arrow-right"></i></a>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-box">
                            <div class="service-box_img"><img src="assets/img/service/4.png" alt="service image" /></div>
                            <div class="service-box_content">
                                <!--<div class="service-box_icon"><i class="fa-light fa-calendar-check"></i></div>-->
                                <h3 class="service-box_title"><a href="">Regular Journey</a></h3>
                                <!--<p class="service-box_text" style="color:#fff;">Competently expedite seamless results and business</p>-->
                            </div>
                            <!--<a href="" class="as-btn">Learn More <i class="fas fa-arrow-right"></i></a>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-box">
                            <div class="service-box_img"><img src="assets/img/service/5.png" alt="service image" /></div>
                            <div class="service-box_content">
                                <!--<div class="service-box_icon"><i class="fa-light fa-bench-tree"></i></div>-->
                                <h3 class="service-box_title"><a href="">Picnic Trip</a></h3>
                                <!--<p class="service-box_text" style="color:#fff;">Competently expedite seamless results and business</p>-->
                            </div>
                            <!--<a href="" class="as-btn">Learn More <i class="fas fa-arrow-right"></i></a>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-box">
                            <div class="service-box_img"><img src="assets/img/service/6.png" alt="service image" /></div>
                            <div class="service-box_content">
                                <!--<div class="service-box_icon"><i class="fa-light fa-car-building"></i></div>-->
                                <h3 class="service-box_title"><a href="">Regular Office</a></h3>
                                <!--<p class="service-box_text" style="color:#fff;">Competently expedite seamless results and business</p>-->
                            </div>
                            <!--<a href="" class="as-btn">Learn More <i class="fas fa-arrow-right"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="space" data-bg-src="assets/img/bg/process_bg_1.jpg">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title">Our Working Process</span>
                    <h2 class="sec-title text-white">How It Works</h2>
                </div>
                <div class="process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_icon shape-icon">
                            <div class="shape" data-mask-src="assets/img/shape/shape_bg_1.svg"></div>
                            <i class="fat fa-shield-heart"></i> <span class="process-card_num">01</span>
                        </div>
                        <h3 class="process-card_title">SAFE GUARANTEE</h3>
                        <p class="process-card_text">Impact materials equity invested read simplify resource maximizing working experiences superior.</p>
                    </div>
                    <div class="process-card">
                        <div class="process-card_icon shape-icon">
                            <div class="shape" data-mask-src="assets/img/shape/shape_bg_1.svg"></div>
                            <i class="fat fa-car-building"></i> <span class="process-card_num">02</span>
                        </div>
                        <h3 class="process-card_title">Fastest Pickups</h3>
                        <p class="process-card_text">Masona materials equity invested read simplify resource maximizing working experiences invested.</p>
                    </div>
                    <div class="process-card">
                        <div class="process-card_icon shape-icon">
                            <div class="shape" data-mask-src="assets/img/shape/shape_bg_1.svg"></div>
                            <i class="fat fa-bridge-suspension"></i> <span class="process-card_num">03</span>
                        </div>
                        <h3 class="process-card_title">Quick Rides</h3>
                        <p class="process-card_text">Tamina materials equity invested read simplify resource maximizing working experiences workings.</p>
                    </div>
                    <span class="process-line"><img src="assets/img/shape/process_line_1.png" alt="line" /></span>
                </div>
            </div>
        </section>
        
        <div class="space">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mb-40 mb-xl-0">
                        <div class="img-box4">
                            <div class="img1"><img src="assets/img/normal/about_4_1.jpg" alt="About" style="width: 100%; height: auto;"/></div>
                        </div>
                    </div>
                    <div class="col-xl-6 ps-3 ps-xl-4">
                        <div class="title-area mb-35 text-md-start text-center">
                            <span class="sub-title">No Matter Where You Travel</span>
                            <h2 class="sec-title text-capitalize">
                                We’ve Got Taxi Services Bangalore for You

                            </h2>
                        </div>
                        <p class="mt-n2 mb-30 text-md-start text-center">Our Taxi Services Bangalore will assist you in exploring the best destinations, visiting all the must-see attractions, and tasting the best local cuisine. Moreover, you can use our airport cab or the transit pick-up service.<br><br> 

                        We'll transport you to your goal while also showing you the best views along the way. Our local Taxi package will help you to explore the best restaurants and bars as well as some of the city's most impressive monuments, greenest parks, and oldest temples.<br><br>
                        
                        Are you an adventurous traveler? Do you just go on the road and see where it takes you? If you only want to be dropped to a place and don't want to look back, we offer one-way drops on various routes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <section class=" space" style="background: #1b1b1b;">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title">Our Benefit Lists</span>
                    <h2 class="sec-title" style="color:#fff;">Why Choose Us</h2>
                    <p style="color:#fff;">One prefers Taxi Booking in Bangalore by Cabs4hire because of the number of facilities.</p>
                </div>
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="feature-card">
                            <div class="feature-card_icon shape-icon">
                                <div class="shape" data-mask-src="assets/img/shape/shape_bg_1.svg"></div>
                                <i class="fal fa-map-location-dot"></i>
                            </div>
                            <h3 class="feature-card_title">Experienced Chauffeurs</h3>
                            <p class="feature-card_text">Each chauffeur employed by Cabs4hire is well-mannered and skilled. The drivers for the Bangalore cab service are chosen following a thorough test, and they must be fluent in both the local language and English. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="feature-card active">
                            <div class="feature-card_icon shape-icon">
                                <div class="shape" data-mask-src="assets/img/shape/shape_bg_1.svg"></div>
                                <i class="fal fa-lock-keyhole"></i>
                            </div>
                            <h3 class="feature-card_title">Simple Taxi Hiring</h3>
                            <p class="feature-card_text" style="color:#fff;">The Cabs4hire website is extremely user-friendly. The online web platform of Cabs4hire allows you to order a Taxi in Bangalore or <a href="/outstation-car-rental-bangalore.php"><b>Outstation Cabs Bangalore</b></a> in three simple clicks.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="feature-card">
                            <div class="feature-card_icon shape-icon">
                                <div class="shape" data-mask-src="assets/img/shape/shape_bg_1.svg"></div>
                                <i class="fal fa-car-side"></i>
                            </div>
                            <h3 class="feature-card_title">Reliable, Safe, and Secure</h3>
                            <p class="feature-card_text">We provide far more secure and dependable taxi hire in Bangalore. Cabs4hire prioritizes our customers' safety and security, thus we provide the best cabs and the most dependable chauffeurs.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="feature-card active">
                            <div class="feature-card_icon shape-icon">
                                <div class="shape" data-mask-src="assets/img/shape/shape_bg_1.svg"></div>
                                <i class="fal fa-lock-keyhole"></i>
                            </div>
                            <h3 class="feature-card_title">A Fleet of New Model Taxis</h3>
                            <p class="feature-card_text" style="color:#fff;">To book <a href="/online-cab-booking-in-bangalore.php"><b>Online Cab Booking in Bangalore</b></a> With a fleet of new model taxis such as sedans, hatchbacks, Innovas, Tempo Travellers, and premium vehicles, you can choose any car for your journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        
        <section class="gallery bb" >
    <div class="flexbox-container">
        <div class="flexbox-container">
            <div class="half left top img-container">
                <a href="#">
                    <div class="photo-container wow fadeInLeft" data-wow-delay=".35s">
                        <div class="pic-thumbnail" style="background-image: url('assets/img/bangalore.jpg');">

                        </div>
                        <span>BANGALORE</span>
                    </div>
                </a>
            </div>
            <div class="half right bottom text-container">
                <h2>
                    See Our Travel Destinations
                </h2>
                <p style="color:#000;">
                    Most Popular Outstation Cities

                </p>
                <div class="gallery-icon-container">
                    <div class="container">
                    <div class="row">
                    <div class="col-4 col-md-2">
                        <a href="#">
                            <div class="photo-container wow fadeInRight" data-wow-delay=".65s">
                                <div class="pic-thumbnail" style="background-image: url('assets/img/chennai.jpg');">
                                  <!--   <img src="https://images.unsplash.com/photo-1495653089282-38a5286a8583?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" style="width: 100% "> -->
                                </div>
                                <span>CHENNAI</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-md-2">

                        <a href="#">
                            <div class="photo-container wow fadeInRight" data-wow-delay=".95s">
                                <div class="pic-thumbnail" style="background-image: url('assets/img/coimbatore.jpg');">

                                </div>
                                <span>COIMBATORE</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-md-2">
                        <a href="#">
                            <div class="photo-container wow fadeInRight" data-wow-delay="1.25s">
                                <div class="pic-thumbnail" style="background-image: url('assets/img/mysore.jpg');">

                                </div>
                                <span>MYSORE</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-md-2">
                        <a href="#">
                        <div class="photo-container wow fadeInRight" data-wow-delay="1.55s">
                            <div class="pic-thumbnail" style="background-image: url('assets/img/pondichery.jpg');">

                            </div>
                            <span>PONDICHERRY</span>
                        </div>
                    </a>
                </div>
                <div class="col-4 col-md-2">
                    <a href="#">
                        <div class="photo-container wow fadeInRight" data-wow-delay="1.85s">
                            <div class="pic-thumbnail" style="background-image: url('assets/img/dharwad.jpg');">

                            </div>
                            <span>DHARWAD</span>
                        </div>
                    </a>
                </div>
                <div class="col-4 col-md-2">
                    <a href="#">
                        <div class="photo-container wow fadeInRight" data-wow-delay="2.15s">
                            <div class="pic-thumbnail" style="background-image: url('assets/img/goa.jpg');">

                            </div>
                            <span>Goa</span>
                        </div>
                    </a>
                    </div>
                </div>
                </div>
</div>
                </div>
            </div>
        </div>
    </div>
</section>



        <section class="bg-white space overlfow-hidden d-none">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-lg-6">
                        <div class="title-area text-center text-lg-start">
                            <span class="sub-title">Our Customers Feedbacks</span>
                            <h2 class="sec-title">1000+ Active Reviews</h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="sec-btn">
                            <div class="icon-box">
                                <button data-slick-prev="#testi-slide-1" class="slick-arrow default"><i class="far fa-arrow-left"></i></button>
                                <button data-slick-next="#testi-slide-1" class="slick-arrow default"><i class="far fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container as-container">
                <div class="row slider-shadow as-carousel" id="testi-slide-1" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
                    <div class="col-md-6 col-xl-4">
                        <div class="testi-card">
                            <p class="testi-card_text">“Groactively synthesize schemas before foster like leveraged expertise user friendly business low before open source iterate.”</p>
                            <div class="testi-card_profile">
                                <div class="testi-card_img"><img src="assets/img/testimonial/testi_1_1.jpg" alt="Avater" /></div>
                                <div class="testi-card_info">
                                    <h3 class="testi-card_name">Ricardo Yosef</h3>
                                    <span class="testi-card_desig">CEO Founder</span>
                                </div>
                            </div>
                            <div class="testi-card_icon"><i class="fas fa-quote-right"></i></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="testi-card">
                            <p class="testi-card_text">“Proactively synthesize schemas before foster like leveraged expertise user friendly business low before open source schemas.”</p>
                            <div class="testi-card_profile">
                                <div class="testi-card_img"><img src="assets/img/testimonial/testi_1_2.jpg" alt="Avater" /></div>
                                <div class="testi-card_info">
                                    <h3 class="testi-card_name">Santino Pedro</h3>
                                    <span class="testi-card_desig">Bank Manager</span>
                                </div>
                            </div>
                            <div class="testi-card_icon"><i class="fas fa-quote-right"></i></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="testi-card">
                            <p class="testi-card_text">“Troactively synthesize schemas before foster like leveraged expertise user friendly business low before open source before.”</p>
                            <div class="testi-card_profile">
                                <div class="testi-card_img"><img src="assets/img/testimonial/testi_1_3.jpg" alt="Avater" /></div>
                                <div class="testi-card_info">
                                    <h3 class="testi-card_name">Marcos Manuel</h3>
                                    <span class="testi-card_desig">CEO Founder</span>
                                </div>
                            </div>
                            <div class="testi-card_icon"><i class="fas fa-quote-right"></i></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <div class="space" data-bg-src="assets/img/bg/cta_bg_1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8 text-center text-md-start">
                        <h5 class="mt-n2 mb-20 text-white">CALL US TO BOOK A TAXI</h5>
                        <a href="" class="call-big">+91-8050005444</a>
                        <p class="text-white fs-lg mb-35">Maintain optimal business ompetitive products grow strategic and technically sound human capital distributed.</p>
                        <a href="triff.php" class="as-btn "><span class="btn-text">Discover More</span></a>
                    </div>
                </div>
            </div>
        </div>

       
       
       
       
       
       
       
       
<div id="id01" class="modal">
    <form class="modal-content animate" action="cars.php" method="post">
        <div class="imgcontainer">
            <!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
            <!--<p style="margin-bottom: 0px;">We are calculating the price ₹</p>-->
            <!--<img src="assets/img/new.gif" style="width: 5%;" />-->
            <p style="margin-bottom: 0px; font-size: 16px; font-weight: 600;">Please enter the details</p>
        </div>
        <input type="hidden" class="form-control" name="floc" id="s-destination" placeholder="Name" value="<?php echo $_POST['fromlocation']; ?>" />
        <input type="hidden" class="form-control" name="tloc" id="s-destination" placeholder="Name" value="<?php echo $_POST['tolocation']; ?>" />
        <input type="hidden" class="form-control" name="rdate" id="s-destination" placeholder="Name" value="<?php echo $_POST['reservation_date']; ?>" />
        <input type="hidden" class="form-control" name="rtime" id="s-destination" placeholder="Name" value="<?php echo $_POST['reservation_time']; ?>" />
        <div class="container">
            <!--<form action="" method="POST" class="booking-form4 ajax-contact">-->
                <div class="row">
                    <div class="form-group col-md-6"><input required type="text" class="form-control" name="name" id="s-destination" placeholder="Name" /> <i class="fal fa-user"></i></div>
                    <div class="form-group col-md-6"><input required type="number" class="form-control" name="mobile" maxlength="10" onKeyPress="if(this.value.length==10) return false;" id="e-destination" placeholder="Phone Number" /> <i class="fal fa-phone"></i></div>
                    <div class="form-group col-md-6"><input required type="email" class="form-control" name="email" id="s-destination" placeholder="email Id" /> <i class="fal fa-envelope"></i></div>
                    <div class="form-group col-md-6"><input required type="text" class="form-control" name="pickup_address" id="pickup_address" placeholder="Pickup Address" /> <i class="fal fa-address-card"></i></div>
                    <div class="form-group col-md-4"></div>
                    <div class="form-group col-md-6">
                        <input type="checkbox" class="custom-control-input" checked required="" id="agree">
                        <label class="custom-control-label" for="agree">I agree to Terms & Conditions</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="text-align: center;">
                        <div class="form-btn" style="padding: 0px 0px 15px 0px;">
                            <button type="submit" class="as-btn" style="color: #000" name="oneway">View</button>
                            <!--<a href="cars.php" style="width: 100%; padding: 11.5px 31px;" class="as-btn">view</a>-->
                        </div>
                    </div>
                </div>
                <!--<p class="form-messages mb-0 mt-3"></p>-->
            <!--</form>-->
        </div>

        <!--<div class="container" style="background-color:#f1f1f1">-->
        <!--  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>-->
        <!--</div>-->
    </form>
</div>

<div id="id02" class="modal">
    <form class="modal-content animate" action="roundcars.php" method="post">
        <div class="imgcontainer">
            <!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
            <!--<p style="margin-bottom: 0px;">We are calculating the price ₹</p>-->
            <!--<img src="assets/img/new.gif" style="width: 5%;" />-->
            <p style="margin-bottom: 0px; font-size: 16px; font-weight: 600; ">Please enter the details</p>
        </div>
        <input type="hidden" class="form-control" name="floc" id="s-destination" placeholder="Name" value="<?php echo $_POST['fromlocation']; ?>" />
        <input type="hidden" class="form-control" name="tloc" id="s-destination" placeholder="Name" value="<?php echo $_POST['tolocation']; ?>" />
        <input type="hidden" class="form-control" name="rdate" id="s-destination" placeholder="Name" value="<?php echo $_POST['reservation_date']; ?>" />
        <input type="hidden" class="form-control" name="rdate1" id="s-destination" placeholder="Name" value="<?php echo $_POST['reservation_date1']; ?>" />
        <input type="hidden" class="form-control" name="rtime" id="s-destination" placeholder="Name" value="<?php echo $_POST['reservation_time']; ?>" />
        <div class="container">
            <!--<form action="" method="POST" class="booking-form4 ajax-contact">-->
                <div class="row">
                    <div class="form-group col-md-6"><input required type="text" class="form-control" name="name" id="s-destination" placeholder="Name" /> <i class="fal fa-user"></i></div>
                    <div class="form-group col-md-6"><input required type="number" class="form-control" name="mobile" maxlength="10" onKeyPress="if(this.value.length==10) return false;" id="e-destination" placeholder="Phone Number" /> <i class="fal fa-phone"></i></div>
                    <div class="form-group col-md-6"><input required type="email" class="form-control" name="email" id="s-destination" placeholder="email Id" /> <i class="fal fa-envelope"></i></div>
                    <div class="form-group col-md-6"><input required type="text" class="form-control" name="pickup_address" id="pickup_address" placeholder="Pickup Address" /> <i class="fal fa-address-card"></i></div>
                    <div class="form-group col-md-4"></div>
                    <div class="form-group col-md-6">
                        <input type="checkbox" class="custom-control-input" checked required="" id="agree">
                        <label class="custom-control-label" for="agree">I agree to Terms & Conditions</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="text-align: center;">
                        <div class="form-btn" style="padding: 0px 0px 15px 0px;">
                            <button type="submit" class="as-btn" style="color: #000" name="roundtrip">View</button>
                            <!--<a href="cars.php" style="width: 100%; padding: 11.5px 31px;" class="as-btn">view</a>-->
                        </div>
                    </div>
                </div>
                <!--<p class="form-messages mb-0 mt-3"></p>-->
            <!--</form>-->
        </div>

        <!--<div class="container" style="background-color:#f1f1f1">-->
        <!--  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>-->
        <!--</div>-->
    </form>
</div>

<div id="id03" class="modal">
    <form class="modal-content animate" action="airport.php" method="post">
        <div class="imgcontainer">
            <!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
            <!--<p style="margin-bottom: 0px;">We are calculating the price ₹</p>-->
            <!--<img src="assets/img/new.gif" style="width: 5%;" />-->
            <p style="margin-bottom: 0px; font-size: 16px; font-weight: 600;">Please enter the details</p>
        </div>
        <input type="hidden" class="form-control" name="tloc" id="s-destination" placeholder="Name" value="<?php echo $_POST['tolocation']; ?>" />
        <input type="hidden" class="form-control" name="rdate" id="s-destination" placeholder="Name" value="<?php echo $_POST['reservation_date']; ?>" />
        <input type="hidden" class="form-control" name="rtime" id="s-destination" placeholder="Name" value="<?php echo $_POST['reservation_time']; ?>" />
        <div class="container">
            <!--<form action="" method="POST" class="booking-form4 ajax-contact">-->
                <div class="row">
                    <!--<div class="form-group col-md-6"><input required type="text" class="form-control" name="pickup_address" id="pickup_address" placeholder="Pickup Address" /> <i class="fal fa-address-card"></i></div>-->
                    <div class="form-group col-md-4"><input required type="text" class="form-control" name="name" id="s-destination" placeholder="Name" /> <i class="fal fa-user"></i></div>
                    <div class="form-group col-md-4"><input required type="number" class="form-control" name="mobile" maxlength="10" onKeyPress="if(this.value.length==10) return false;" id="e-destination" placeholder="Phone Number" /> <i class="fal fa-phone"></i></div>
                    <div class="form-group col-md-4"><input required type="email" class="form-control" name="email" id="s-destination" placeholder="email Id" /> <i class="fal fa-envelope"></i></div>
                    <div class="form-group col-md-4"></div>
                    <div class="form-group col-md-6">
                        <input type="checkbox" class="custom-control-input" checked required="" id="agree">
                        <label class="custom-control-label" for="agree">I agree to Terms & Conditions</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="text-align: center;">
                        <div class="form-btn" style="padding: 0px 0px 15px 0px;">
                            <button type="submit" class="as-btn" style="color: #000" name="airport">View</button>
                            <!--<a href="cars.php" style="width: 100%; padding: 11.5px 31px;" class="as-btn">view</a>-->
                        </div>
                    </div>
                </div>
                <!--<p class="form-messages mb-0 mt-3"></p>-->
            <!--</form>-->
        </div>

        <!--<div class="container" style="background-color:#f1f1f1">-->
        <!--  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>-->
        <!--</div>-->
    </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
       
       
       
       <style>
           /* Full-width input fields */



/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 12px 12px 12px 12px;
  position: relative;
}



span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 99999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(8 8 8 / 97%);
  padding-top: 60px;
}

/* Modal Content/Box */

@media only screen and (max-width: 768px) {

.modal-content {
    background-color: #fefefe;
    margin: 31% auto 14% auto;
    border: 1px solid #888;
    width: 95%;
}
}



@media only screen and (min-width: 768px) {

.modal-content {
    background-color: #fefefe;
    margin: 10% auto 14% auto !important;
    border: 1px solid #888;
    width: 50%;
}
}
/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
       </style>
       
       
       
       
       
       
       
       
       
       
       
       
       
      
       <script type="text/javascript">
       	
       	const tab = document.querySelectorAll(".tab");
const toggleTab = function (element) {
  const tabBtn = element.querySelectorAll(".tab-btn");
  const tabContent = element.querySelectorAll(".tab-content");
  tabBtn[0].classList.add("tab-open");
  tabContent[0].classList.add("tab-open");

  const removeTab = function (element) {
    for (const i of element) {
      i.classList.remove("tab-open");
    }
  };
  const openTab = function (index) {
    removeTab(tabBtn);
    removeTab(tabContent);
    tabBtn[index].classList.add("tab-open");
    tabContent[index].classList.add("tab-open");
  };
  tabBtn.forEach((el, i) => (el.onclick = () => openTab(i)));
};
[...tab].forEach((el) => toggleTab(el));

       </script>

       <script type="text/javascript">
           new WOW().init();

wow = new WOW(
{
boxClass:     'wow',      // default
animateClass: 'animated', // default
offset:       0,          // default
mobile:       true,       // default
live:         true        // default
}
)
wow.init();
       </script>
<?php include('includes/footer.php');?>
       
<?php
if(isset($_POST['onewaytrip']))
{
?>
    <script type="text/javascript">
        window.onload = function () {
            OpenBootstrapPopup();
        };
        function OpenBootstrapPopup() {
            $("#id01").css('display', 'block');
        }
    </script>
<?php
}
?>  

<?php
if(isset($_POST['roundtrip']))
{
?>
    <script type="text/javascript">
        window.onload = function () {
            OpenBootstrapPopup();
        };
        function OpenBootstrapPopup() {
            $("#id02").css('display', 'block');
        }
    </script>
<?php
}
?>  

<?php
if(isset($_POST['airport']))
{
?>
    <script type="text/javascript">
        window.onload = function () {
            OpenBootstrapPopup();
        };
        function OpenBootstrapPopup() {
            $("#id03").css('display', 'block');
        }
    </script>
<?php
}
?> 