<?php include('includes/header.php');?>

        <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg" data-overlay="title" data-opacity="4">
            <div class="container z-index-common">
                <h1 class="breadcumb-title">Book A Ride Plan</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>AppoiBook A Ride Planntment</li>
                </ul>
            </div>
        </div>
        <div class="position-relative space" style='margin-bottom:50px'>
            <div class="container">
                <form action="" method="POST" class="booking-form4 ajax-contact">
                    <div class="row">
                        <div class="form-group col-sm-6"><input type="text" class="form-control" name="name" id="name" placeholder="Your Name" /> <i class="fal fa-user"></i></div>
                        <div class="form-group col-sm-6"><input type="number" class="form-control" name="phone" id="phone" placeholder="Phone Number" /> <i class="fal fa-phone"></i></div>
                        <div class="form-group col-sm-6"><input type="text" class="form-control" name="s-destination" id="s-destination" placeholder="Start Destination" /> <i class="fal fa-location-dot"></i></div>
                        <div class="form-group col-sm-6"><input type="text" class="form-control" name="e-destination" id="e-destination" placeholder="End Destination" /> <i class="fal fa-location-dot"></i></div>
                        <div class="form-group col-sm-6"><input type="text" class="form-control" name="passenger" id="passenger" placeholder="Passengers#" /> <i class="fal fa-user-group"></i></div>
                        <div class="form-group col-sm-6"><input type="text" class="date-pick form-control" name="date" id="date-pick" placeholder="Select Date" /> <i class="fal fa-calendar-days"></i></div>
                        <div class="form-group col-sm-6"><input type="text" class="time-pick form-control" name="time" id="time-pick" placeholder="Select Time" /> <i class="fal fa-clock"></i></div>
                        <div class="form-group col-sm-6">
                            <select class="form-select" name="vehicle" id="vehicle">
                                <option value="Normal" selected="selected" disabled="disabled">Select Vehicle Class</option>
                                <option value="Normal">Normal Car</option>
                                <option value="Business">Business Class</option>
                                <option value="vip">VIP Service</option>
                            </select>
                        </div>
                        <div class="form-group col-12"><textarea placeholder="Write a Massage...." name="message" id="message" class="form-control"></textarea> <i class="fal fa-message"></i></div>
                        
                    </div>
                    <div class='row'>
                        <div class='col-md-3'>
                        
                        </div>
                        <div class='col-md-6'>
                                                    <div class="form-btn col-12"><button class="as-btn">Book Your Car Now</button></div>

                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
      <?php include('includes/footer.php');?>
