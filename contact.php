<?php include('includes/header.php');

if(isset($_POST['contact']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $subject1 = $_POST['subject'];
    $message = $_POST['message'];
    
    //mail
    $fromad=$comment_email;
	$to = "infocabs4@gmail.com";
	$subject = 'Contact Enquiry';
    $message = '
    <html>
    <head>
        <title>Contact Enquiry</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,600i,700&display=swap" rel="stylesheet">
        <style>
            body{
             margin: 0;
             padding: 0;
             width: 100%;
             font-family: "Source Sans Pro", sans-serif;
             color: #5d5d5d;
            }
            
            .order{
                width: 50%;
                height: auto;
            	padding: 20px;
                text-align: center;
                margin: 50px auto;
            	color: #333;
            }
            .order img{
            	display: block;
            	margin: 20px auto;
            	width: 25%;
            }
            .order h4{
                position: relative;
            	margin: 30px 0px;
            	font-size: 1.2em;
            	color: #5A2985;
            }
            
            .order a.shopmore{
            	color: #5A2985;
            	border: 1px solid #5A2985;
            	border-radius: 5px;
            	padding: 6px 15px;
            	text-decoration: none;
            }
            
            .order p{
            	margin: 30px 0px;
            	color: #4d4d4d;
            	font-size: .75em;
            }
            h2{
            	margin: 0px auto;
            	position: relative;
            	top: 10px;
            	font-size: .8em;
            	text-align: center;
            	display: block;
            	clear: both;
            }
            @media screen and (device-width: 360px) and (device-height: 640px)
            {
                .order{
                	width: 80%;
                }
                .order img{
                	width: 50%;
                }
            }
        </style>
    </head>
    <body>
		<div class="order">
            <center><img src="http://cabs4hire.com/assets/img/logo.png" /></center>
			<h1 style="color:inherit;font-family:Helvetica,Arial,Verdana,sans-serif;font-size:42px;font-weight:bold;line-height:1.2;padding:0;text-align:left;word-wrap:normal; text-align: center">You have got new Contact Enquiry</h1>
			<hr style="border: 1px solid lightgrey;">
			<p style="font-weight: bold;  font-size: 16px;">Hello Admin, </p>
			<p style="font-size: 14px; text-align: justify; margin-left: 10%; margin-right: 10%">
			You have got new contact enquiry from  Email : '.$email.' </p>
			<p style="font-size: 14px; text-align: justify; margin-left: 10%; margin-right: 10%">Subject : '.$subject1.'</p>
			<p style="font-size: 14px; text-align: justify; margin-left: 10%; margin-right: 10%">Name : '.$name.'</p>
			<p style="font-size: 14px; text-align: justify; margin-left: 10%; margin-right: 10%">Mobile : '.$mobile.'</p>
			<p style="font-size: 14px; text-align: justify; margin-left: 10%; margin-right: 10%">Message : '.$message.'</p>
		</div>
    </body>
    </html>
    ';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    // Additional headers
    //$headers = 'To: '.$agent.' <'.$email.'>';   AVKvSGbaf4B9fn8// user nm
    $headers .= 'From: Cabs4hire <no-reply@cabs4hire.com>'; // from
    if(mail($to, $subject, $message, $headers))
    {
        echo 'yes';
        echo "<script>alert('Thank you for your query. We will respond to you soon.');
				window.location.href='http://cabs4hire.com/contact.php';
		    </script>";
    }
    else{
        echo 'no';
//      header("Location:processorder?st=fail");
    }
}
?>

        <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg" data-overlay="title" data-opacity="4">
            <div class="container z-index-common">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li>For support or any questions please reach us</li>
                </ul>
            </div>
        </div>
        
        <section class="space bg-smoke position-relative">
            <div class="container">
                <div class="title-area text-center">
                    <h2 class="sec-title">Get in touch</h2>
                    <span class="sub-title">Please fill out the quick form and we will in touch with in 2 hours</span>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form action="" method="POST" class="">
                            <div class="row">
                                <div class="form-group col-md-6"><input type="text" required class="form-control" name="name" id="name" placeholder="Enter Your Name" /> <i class="fal fa-user"></i></div>
                                <div class="form-group col-md-6"><input type="email" required class="form-control" name="email" id="email" placeholder="Email Address" /> <i class="fal fa-envelope"></i></div>
                                <div class="form-group col-md-6"><input type="text" required class="form-control" name="mobile" id="name" placeholder="Contact Number" /> <i class="fal fa-phone"></i></div>
                                <div class="form-group col-md-6"><input type="text" required class="form-control" name="subject" id="name" placeholder="Subject" /> <i class="fal fa-reply-all"></i></div>
                                <div class="form-group col-12"><textarea name="message" required id="message" cols="30" rows="3" class="form-control" placeholder="Message"></textarea> <i class="fal fa-comment"></i></div>
                                <div class="form-btn col-12 mt-10 "><button class="as-btn" type="submit" name="contact">Send Message Now</button></div>
                            </div>
                            <!--<p class="form-messages mb-0 mt-3"></p>-->
                        </form>
                    </div>
                    <div class="col-md-4">
                    	<div class="address-box">
								<div class="add-info">
									<i class="fa fa-thumb-tack fa-2x" style="color: #e31e24;" aria-hidden="true"></i>

									<p>No 05,22nd Main,7th Cross,1st Sector,         HSR Layout  Bangalore.560102</p>
								</div>
								<div class="add-info">
									<i class="fa fa-phone-square fa-2x" style="color: #e31e24;" aria-hidden="true"></i>

									<p>
										<a href="tel:+91-8050005444">+91-8050005444</a>
										
									</p>
								</div>
								<div class="add-info">
									<i class="fa fa-envelope fa-2x" style="color: #e31e24;" aria-hidden="true"></i>

									<p>
										
										<a href="mailto:info@cabs4hire.com">info@cabs4hire.com</a>
									</p>
								</div>
							</div>

                    </div>
                </div>
            </div>
        </section>
        <div class="map-sec">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d124401.34951906472!2d77.5317235441444!3d13.001108365833847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sNo%20133F%20Madi%20Mariyappa%20Main%20Road%20garichinniap%20Layout%20mariyanna%20palya%20Bangalore%20H.A.Farm%20post%20.560024!5e0!3m2!1sen!2sin!4v1662969783974!5m2!1sen!2si" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <?php include('includes/footer.php');?>
