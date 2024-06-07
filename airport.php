<?php  error_reporting(0);
    if(isset($_POST['airport']))
    {
    //     // echo "1234";
    //     $origin = $_POST['floc'];
    //     $destination = $_POST['tloc'];
    //      // In metric unit. This is default
    //     //  echo 'https://maps.googleapis.com/maps/api/distancematrix/json?&origins='.urlencode($origin).'&destinations='.urlencode($destination).'&key=AIzaSyCE0wwGg6QisQxK59y7Wjvgw2XxAEcXXQs';
    //   $distance_data = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?&origins='.urlencode($origin).'&destinations='.urlencode($destination).'&key=AIzaSyCE0wwGg6QisQxK59y7Wjvgw2XxAEcXXQs');
    //   $distance_arr = json_decode($distance_data);
    // if ($distance_arr->status=='OK') {
    //     $destination_addresses = $distance_arr->destination_addresses[0];
    //     $origin_addresses = $distance_arr->origin_addresses[0];
    // } else {
    //   echo "<p>The request was Invalid</p>";
    //   exit();
    // }
    //   if ($origin_addresses=="" or $destination_addresses=="") {
    //       echo "<p>Destination or origin address not found</p>";
    //       exit();
    //   }
    //   // Get the elements as array
    //   $elements = $distance_arr->rows[0]->elements;
    //   $distance = $elements[0]->distance->text;
    //   $duration = $elements[0]->duration->text;
    //   echo "From: ".$origin_addresses."<br/> To: ".$destination_addresses."<br/> Distance: <strong>".$distance ."</strong><br/>";
    //   echo "Duration: <strong>".$duration."";
        // $resultx = str_replace(',', '', $distance); 
        
        $tl = $_POST['tloc'];
        $nm = $_POST['name'];
        $em = $_POST['email'];
        $num = $_POST['mobile'];
        $amt = "-----";
        $rd = $_POST['rdate'];
        $rt = $_POST['rtime'];
        $cab = "-----";
        $km = '-----';
        $tm = "-----";
        $ext = "-----";
    //mail
	    $fromad=$em;
		$to = "infocabs4@gmail.com";
		$subject = 'Booking Confirmation';
		
        $message = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Booking Confirmation</title>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            html,body{
                width: 100%;
                height: 100%;
                background: #fef2c5;
                padding: 7px;
            }
            
            p{
                margin-bottom: 3px !important;
            }
            
            .mail_box{
                 background: #fef2c5;
                color: #000;
                    /*padding: 20px;*/
            }
            
            .head{
                font-size: 1.2rem;
                font-family: "Roboto", sans-serif;
            }
            
            .fa.fa-check{
                color: green;
                background-color: rgb(37, 35, 35);
                padding: 4px;
                border-radius: 500px;
                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            }
            
            .fa.fa-times{
                color: red;
                background-color: rgb(37, 35, 35);
                padding: 4px 6px;
                border-radius: 500px;
                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            }
            
            .pad-50{
              padding: 20px;
                background: #fef2c5;
            }
            
            .pad-l{
                padding-left: 200px;
            }
            
            
            .logo_area{
                width: 100%;
                background: #ffc400;
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: wrap;
                padding:20px 0 0 20px;
            }
            
            .btn{
                border-radius: 0 !important;
                margin-left: 10px !important;
            }
            
            table tr td,table tr th{
                 font-size: larger;
                 text-align:left;
                 color: #fff;
            }
            
            table tr th{
                text-align:left;
                padding-left: 0px !important;
                
            }
            
            @media only screen and (max-width: 650px) {
           
            }
            .prow {
                font-family: "Roboto", sans-serif;
            }
        </style>
        
        </head>
        
        <body>
        <div>    
        <div class="mail_box">
            
            <div class="logo_area ">
                 <img width="200px"  src="http://cabs4hire.com/assets/img/logo.png" alt="">
            </div>
            <div class="pad-50 pb-0">
                <p class="head mb-0" style="font-size:16px">Welcome To <b>Cabs4hire Service</b></p>
                <p class="head mb-0" style="font-size:16px">Please Note Your Booking Details</p>
                <hr>
            </div>
            <div class="pad-50" style="padding-top:0px">
                <div class="prow">
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Name &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$nm.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Contact No &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;     padding-bottom: 10px;font-weight:600">
                        <b>'.$num.'</b>
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        PickUp Date &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$rd.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Time &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$rt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Cab &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$cab.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        PickUp Place &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$fl.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Drop Place &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        Airport
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Trip Type &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        One Way
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-8" style="display: inline-block;    padding-bottom: 10px;">
                        '.$km.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Fare &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                        '.$amt.'
                    </div>
                    <br>
                    <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                        Extra KM &nbsp;: &nbsp; 
                    </div>
                    <div class="col-md-8" style="display: inline-block;    padding-bottom: 10px;">
                        '.$ext.'
                    </div>
                </div>
                
                <br>
                
                <p>Exclude Toll Permit Charge</p>
                <p class="" style="color:#000"><b>Happy Journey</b></p>
                <p>Contact: <a href="#">8050005444</a> Please visit Our Website : <span class="https://cabs4hire.com/">https://cabs4hire.com</span></p>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>
        ';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        
        // Additional headers
        
        //$headers = 'To: '.$agent.' <'.$email.'>';   // user nm
        $headers .= 'From: Cabs4hire <no-reply@cabs4hire.com>'; // from
        
        
        
        if(mail($to, $subject, $message, $headers))
        {
        //   echo 'yes';
        //  
        }
        else{
        // echo 'no';
        //   header("Location:processorder.php?st=fail");
        }
    
        
?>
<?php include('includes/header.php');?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<style>
    @media screen and (max-width: 768px) {
        .tab-btn {
            flex: 1;
            font-size: 12px !important;
            color: #7c7c7c !important;
            text-align: center;
            /* padding: 1em 0em; */
            background-color: #24252700 !important;
            /* border: 1px solid #000; */
            /* border-radius: 10px 10px 0 0; */
            border-right: 1px solid white !important;
            cursor: pointer;
            list-style-type: none;
        }
    }
    .center {
        display: block;
        margin-right: auto;
        width: 50%;
    }
    .tab-btn.tab-open {
        font-weight: bold;
        background-color: #fff !important;
        border-bottom: 0;
        list-style-type: none !important;
        color: coral;
        transition: 0.3s;
        color: black !important;
        text-decoration: none !important;
    }
    .sec-title {
        margin-bottom: 35px;
        text-align: center;
    }
</style>

<div class="space1 car1">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12">
                <p style="line-height: 34px;font-size: 14px;margin-bottom: 0px;"><i class="fal fa-location-dot"></i> Pickup: <span style="font-size: 12px;font-weight:300"><?php echo $_POST['tloc']; ?></span></p>
            </div>
            <div class="col-md-3 col-12">
                <p style="line-height: 34px;font-size: 14px;margin-bottom: 0px;"><i class="fal fa-location-dot"></i> Drop: <span style="font-size: 12px;font-weight:300">Airport</span></p>
            </div>
            <div class="col-md-2 col-7">
                <p style="line-height: 34px;font-size: 14px;margin-bottom: 0px;"><i class="fal fa-calendar-days"></i> Date:<span style="font-size: 12px;font-weight:300"><?php echo date("M d, Y", strtotime($_POST['rdate'])); ?></span></p>
            </div>
            <div class="col-md-2 col-5">
                <p style="line-height: 34px;font-size: 14px;margin-bottom: 0px;"><i class="fal fa-clock"></i> Time: <span style="font-size: 12px;font-weight:300"><?php echo $_POST['rtime']; ?></span></p>
            </div>
            <div class="col-md-2">
                <a href="index.php" class="as-btn" style="padding: 4.5px 31px;font-size: 14px;margin-bottom: 0px;margin-top: 5px;background:black"><span class="btn-text">Modify</span></a>
            </div>
        </div>
    </div>
</div>

<div class="space1 car2">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-6">
                <p style="font-size: 16px;"><i class="fal fa-calendar-days"></i> Date:<span style="font-size: 12px;"><?php echo date("M d, Y", strtotime($_POST['rdate'])); ?></span></p>
            </div>
            <div class="col-md-2 col-6">
                <p style="font-size: 16px;"><i class="fal fa-clock"></i> Time: <span style="font-size: 12px;"><?php echo $_POST['rtime']; ?></span></p>
            </div>
            <div class="col-md-3 col-12">
                <p style="font-size: 16px;"><i class="fal fa-location-dot"></i> Pickup: <span style="font-size: 12px;"><?php echo $_POST['floc']; ?></span></p>
            </div>
            <div class="col-md-3 col-12">
                <p style="font-size: 16px;"><i class="fal fa-location-dot"></i> Drop: <span style="font-size: 12px;"><?php echo $_POST['tloc']; ?></span></p>
            </div>
            <div class="col-md-2 col-12">
                <a href="index.php" class="as-btn" style="padding: 4.5px 31px; float: right;background:black"><span class="btn-text">Modify</span></a>
            </div>
        </div>
    </div>
</div>
<?php $result = str_replace(',', '', $distance); ?>
<div class="space">
    <div class="container">
        <div class="car car1">
            <div class="row">
                <div class="col-12">
                    <h2 class="sec-title">Airport</h2>
                </div>
                
                <div class="col-md-12">
                    <div class="container" style="padding: 10px;border-radius: 10px;box-shadow: rgb(152 147 147 / 50%) 0px 0px 20px 0px;margin:10px 0px">
                        <div class="row">
                              <div class="col-3">
                                   <p style="font-size: 16px; font-weight: 700;margin-bottom:8px;margin-left:36px">
                                    Sedan <br />
                                    <span style="font-size: 12px;"> or equivalent</span>
                                </p>
                                <!--<p style='float:right'><a onclick="document.getElementById('id01').style.display='block'" ><i class="fa fa-cogs" aria-hidden="true"></i></a></p>-->
                                <img src="assets/img/c1.png" class="center"/>
                            </div>
                            <div class="col-3"></div>
                            <div class="col-3">
                                <h6 style="color: #22a9d7;margin-bottom:8px">
                                    ₹ 1000<?php  //if(floatval($result) >='130'){ echo round(($result*13)+400); } else{ echo round((130*13)+400); } ?> + Toll<br />
                                    <?php //if(floatval($result) >='130'){ $mn = round(($result*13)+400); } else{ $mn = round((130*13)+400); } ?>
                                    <?php
                                        $tm = ((1000*10)/100)+1000;
                                    ?>
                                    <span style="color: #b12704;margin-bottom:8px"><s>₹ <?php echo $tm; ?></s></span>
                                </h6>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <form action="thankyou.php" method="post">
                                        <div class="col-md-12">
                                          <p style='text-align:center;text-align: center;margin-bottom: 9px;color: #1b6bb0;font-size: 12px;cursor: pointer;'> <a onclick="document.getElementById('id01').style.display='block'" >More Info <i class="fa fa-info-circle" aria-hidden="true"></i></a></p>
                                            <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
            					            <input type="hidden" placeholder="Name" value="SEDAN" required name="cab" />
            						        <input type="hidden" placeholder="Name" value="" required name="km" />
            						        <input type="hidden" placeholder="Name" value="" required name="extra" />
            							    <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
            							    <input type="hidden" placeholder="Name" value="1000+Toll" required name="amount" />
                                            <input type="hidden" value="<?php echo $_POST['tloc']; ?>" size="50" name="tolocation" required placeholder="Enter a location" />  
                                            <input type="hidden" placeholder="Email Id" required value="<?php echo $_POST['email']; ?>" name="email" />
                                            <input type="hidden" placeholder="Contact Number" value="<?php echo $_POST['mobile']; ?>" name="number" required />
                                            <input  name="reservation_date" placeholder="Journey Date" value="<?php echo $_POST['rdate']; ?>" type="hidden">
                                            <input type="hidden" class="form-control" value="<?php echo $_POST['rtime']; ?>" placeholder="Journey Time" name="reservation_time" />
                                            
                                            <div class="form-btn">
                                                <button type="submit" name="airport" class="as-btn w-100" style="color: #000">Book Car</button>
                                                <!--<a href='thankyou.php' class="as-btn" style="width: 100%; border-radius: 10px; padding: 9.5px 31px;">Book Car</a>-->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                     </div>
                </div>
                <div class="col-md-12">
                    <div class="container" style="padding: 10px; border-radius: 10px; box-shadow: rgb(152 147 147 / 50%) 0px 0px 20px 0px;margin:10px 0px">
                        <div class="row">
                            <div class="col-3">
                                <p style="font-size: 16px; font-weight: 700; margin-bottom: 8px; margin-left: 36px;">
                                    Prime Sedan <br />
                                    <span style="font-size: 12px;"> or equivalent</span>
                                </p>
                                <!--<p style='float:right'><a onclick="document.getElementById('id01').style.display='block'" ><i class="fa fa-cogs" aria-hidden="true"></i></a></p>-->
                                <img src="assets/img/c2.png" class="center" />
                            </div>
                            <div class="col-3"></div>
                            <div class="col-3">
                                <h6 style="color: #22a9d7;margin-bottom:8px">
                                    ₹ 1100 + Toll <br />
                                    <?php if(floatval($result) >='130'){ $mn = round(($result*14)+400); } else{ $mn = round((130*14)+400); } ?>
                                    <?php
                                        $tm = ((1100*10)/100)+1100;
                                    ?>
                                    <span style="color: #b12704;margin-bottom:8px"><s>₹<?php echo $tm; ?></s></span>
                                </h6>
                            </div>
                            <div class="col-3">
                                <form action="thankyou.php" method="post">
                                    <div class="col-md-12">
                                      <p style='text-align:center;text-align: center;margin-bottom: 9px;color: #1b6bb0;font-size: 12px;cursor: pointer;'> <a onclick="document.getElementById('id02').style.display='block'" >More Info <i class="fa fa-info-circle" aria-hidden="true"></i></a></p>
                                        <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
        					            <input type="hidden" placeholder="Name" value="PRIME SEDAN" required name="cab" />
        						        <input type="hidden" placeholder="Name" value="" required name="km" />
        						        <input type="hidden" placeholder="Name" value="" required name="extra" />
        							    <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
        							    <input type="hidden" placeholder="Name" value="1100+Toll" required name="amount" />
                                        <input type="hidden" value="<?php echo $_POST['tloc']; ?>" size="50" name="tolocation" required placeholder="Enter a location" />  
                                        <input type="hidden" placeholder="Email Id" required value="<?php echo $_POST['email']; ?>" name="email" />
                                        <input type="hidden" placeholder="Contact Number" value="<?php echo $_POST['mobile']; ?>" name="number" required />
                                        <input  name="reservation_date" placeholder="Journey Date" value="<?php echo $_POST['rdate']; ?>" type="hidden">
                                        <input type="hidden" class="form-control" value="<?php echo $_POST['rtime']; ?>" placeholder="Journey Time" name="reservation_time" />
                                        
                                        <div class="form-btn">
                                            <button type="submit" name="airport" class="as-btn w-100" style="color: #000">Book Car</button>
                                            <!--<a href='thankyou.php' class="as-btn" style="width: 100%; border-radius: 10px; padding: 9.5px 31px;">Book Car</a>-->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="container" style="padding: 10px; border-radius: 10px; box-shadow: rgb(152 147 147 / 50%) 0px 0px 20px 0px;margin:10px 0px">
                        <div class="row">
                            <div class="col-3">
                                <p style="font-size: 16px; font-weight: 700; margin-bottom: 8px; margin-left: 36px;">
                                    SUV <br />
                                     <span style="font-size: 12px;"> or equivalent</span>
                                </p>
                                <!--<p style='float:right'><a onclick="document.getElementById('id01').style.display='block'" ><i class="fa fa-cogs" aria-hidden="true"></i></a></p>-->
                                <img src="assets/img/c3.png" class="center" />
                            </div>
                            <div class="col-3"></div>
                            <div class="col-3">
                                <h6 style="color: #22a9d7;margin-bottom:8px">
                                    ₹ 1800 + Toll <br />
                                    <?php if(floatval($result) >='130'){ $mn = round(($result*17)+400); } else{ $mn = round((130*17)+400); } ?>
                                    <?php
                                        $tm = ((1800*10)/100)+1800;
                                    ?>
                                    <span style="color: #b12704;margin-bottom:8px"><s>₹<?php echo $tm; ?></s></span>
                                </h6>
                            </div>
                            <div class="col-3">
                                <form action="thankyou.php" method="post">
                                    <div class="col-md-12">
                                      <p style='text-align:center;text-align: center;margin-bottom: 9px;color: #1b6bb0;font-size: 12px;cursor: pointer;'> <a onclick="document.getElementById('id03').style.display='block'" >More Info <i class="fa fa-info-circle" aria-hidden="true"></i></a></p>
                                        <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
        					            <input type="hidden" placeholder="Name" value="SUV" required name="cab" />
        						        <input type="hidden" placeholder="Name" value="" required name="km" />
        						        <input type="hidden" placeholder="Name" value="" required name="extra" />
        							    <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
        							    <input type="hidden" placeholder="Name" value="1800+Toll" required name="amount" />
                                        <input type="hidden" value="<?php echo $_POST['tloc']; ?>" size="50" name="tolocation" required placeholder="Enter a location" />  
                                        <input type="hidden" placeholder="Email Id" required value="<?php echo $_POST['email']; ?>" name="email" />
                                        <input type="hidden" placeholder="Contact Number" value="<?php echo $_POST['mobile']; ?>" name="number" required />
                                        <input  name="reservation_date" placeholder="Journey Date" value="<?php echo $_POST['rdate']; ?>" type="hidden">
                                        <input type="hidden" class="form-control" value="<?php echo $_POST['rtime']; ?>" placeholder="Journey Time" name="reservation_time" />
                                        
                                        <div class="form-btn">
                                            <button type="submit" name="airport" class="as-btn w-100" style="color: #000">Book Car</button>
                                            <!--<a href='thankyou.php' class="as-btn" style="width: 100%; border-radius: 10px; padding: 9.5px 31px;">Book Car</a>-->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="container" style="padding: 10px; border-radius: 10px; box-shadow: rgb(152 147 147 / 50%) 0px 0px 20px 0px;margin:10px 0px">
                        <div class="row">
                            <div class="col-3">
                                <p style="font-size: 16px; font-weight: 700; margin-bottom: 8px; margin-left: 36px;">
                                    Innova <br />
                                    <span style="font-size: 12px;"> or equivalent</span>
                                </p>
                                <!--<p style='float:right'><a onclick="document.getElementById('id01').style.display='block'" ><i class="fa fa-cogs" aria-hidden="true"></i></a></p>-->
                                <img src="assets/img/c4.png" class="center" />
                            </div>
                            <div class="col-3"></div>
                            <div class="col-3">
                                <h6 style="color: #22a9d7;margin-bottom:8px">
                                    ₹ 2200 + Toll<br />
                                    <?php if(floatval($result) >='130'){ $mn = round(($result*18)+400); } else{ $mn = round((130*18)+400); } ?>
                                    <?php
                                        $tm = ((2200*10)/100)+2200;
                                    ?>
                                    <span style="color: #b12704;margin-bottom:8px"><s>₹<?php echo $tm; ?></s></span>
                                </h6>
                            </div>
                            <div class="col-3">
                                <form action="thankyou.php" method="post">
                                    <div class="col-md-12">
                                      <p style='text-align:center;text-align: center;margin-bottom: 9px;color: #1b6bb0;font-size: 12px;cursor: pointer;'> <a onclick="document.getElementById('id04').style.display='block'" >More Info <i class="fa fa-info-circle" aria-hidden="true"></i></a></p>
                                        <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
        					            <input type="hidden" placeholder="Name" value="INNOVA" required name="cab" />
        						        <input type="hidden" placeholder="Name" value="" required name="km" />
        						        <input type="hidden" placeholder="Name" value="" required name="extra" />
        							    <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
        							    <input type="hidden" placeholder="Name" value="2200+Toll" required name="amount" />
                                        <input type="hidden" value="<?php echo $_POST['tloc']; ?>" size="50" name="tolocation" required placeholder="Enter a location" />  
                                        <input type="hidden" placeholder="Email Id" required value="<?php echo $_POST['email']; ?>" name="email" />
                                        <input type="hidden" placeholder="Contact Number" value="<?php echo $_POST['mobile']; ?>" name="number" required />
                                        <input  name="reservation_date" placeholder="Journey Date" value="<?php echo $_POST['rdate']; ?>" type="hidden">
                                        <input type="hidden" class="form-control" value="<?php echo $_POST['rtime']; ?>" placeholder="Journey Time" name="reservation_time" />
                                        
                                        <div class="form-btn">
                                            <button type="submit" name="airport" class="as-btn w-100" style="color: #000">Book Car</button>
                                            <!--<a href='thankyou.php' class="as-btn" style="width: 100%; border-radius: 10px; padding: 9.5px 31px;">Book Car</a>-->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="container" style="padding: 10px; border-radius: 10px; box-shadow: rgb(152 147 147 / 50%) 0px 0px 20px 0px;margin:10px 0px">
                        <div class="row">
                            <div class="col-3">
                                <p style="font-size: 16px; font-weight: 700; margin-bottom: 8px; margin-left: 36px;">
                                    Innova Crysta<br />
                                    <span style="font-size: 12px;"> or equivalent</span>
                                </p>
                                <!--<p style='float:right'><a onclick="document.getElementById('id01').style.display='block'" ><i class="fa fa-cogs" aria-hidden="true"></i></a></p>-->
                                <img src="assets/img/c5.png" class="center" />
                            </div>
                            <div class="col-3"></div>
                            <div class="col-3">
                                <h6 style="color: #22a9d7;margin-bottom:8px">
                                    ₹ 2500 + Toll <br />
                                    <?php if(floatval($result) >='130'){ $mn = round(($result*20)+400); } else{ $mn = round((130*20)+400); } ?>
                                    <?php
                                        $tm = ((2500*10)/100)+2500;
                                    ?>
                                    <span style="color: #b12704;margin-bottom:8px"><s>₹<?php echo $tm; ?></s></span>
                                </h6>
                            </div>
                            <div class="col-3">
                                <form action="thankyou.php" method="post">
                                    <div class="col-md-12">
                                      <p style='text-align:center;text-align: center;margin-bottom: 9px;color: #1b6bb0;font-size: 12px;cursor: pointer;'> <a onclick="document.getElementById('id05').style.display='block'" >More Info <i class="fa fa-info-circle" aria-hidden="true"></i></a></p>
                                        <input type="hidden" placeholder="Name" value="<?php echo date('H:i'); ?>" required name="time" />
        					            <input type="hidden" placeholder="Name" value="INNOVA CRYSTA" required name="cab" />
        						        <input type="hidden" placeholder="Name" value="" required name="km" />
        						        <input type="hidden" placeholder="Name" value="" required name="extra" />
        							    <input type="hidden" placeholder="Name" value="<?php echo $_POST['name']; ?>" required name="name" />
        							    <input type="hidden" placeholder="Name" value="2500+Toll" required name="amount" />
                                        <input type="hidden" value="<?php echo $_POST['tloc']; ?>" size="50" name="tolocation" required placeholder="Enter a location" />  
                                        <input type="hidden" placeholder="Email Id" required value="<?php echo $_POST['email']; ?>" name="email" />
                                        <input type="hidden" placeholder="Contact Number" value="<?php echo $_POST['mobile']; ?>" name="number" required />
                                        <input  name="reservation_date" placeholder="Journey Date" value="<?php echo $_POST['rdate']; ?>" type="hidden">
                                        <input type="hidden" class="form-control" value="<?php echo $_POST['rtime']; ?>" placeholder="Journey Time" name="reservation_time" />
                                        
                                        <div class="form-btn">
                                            <button type="submit" name="airport" class="as-btn w-100" style="color: #000">Book Car</button>
                                            <!--<a href='thankyou.php' class="as-btn" style="width: 100%; border-radius: 10px; padding: 9.5px 31px;">Book Car</a>-->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
                
                
                
            </div>
            
        </div>

        <!--<div class="car car1">-->
        <!--    <div class="row">-->
        <!--        <div class="col-md-4"><img src="assets/img/car1.jpg" style="width: 24%;" /> Ertiga <span style="font-size: 12px;"> or equivalent</span>-->
        <!--              <span style="color: #b12704; font-size: 12px;"><a id="see-review1">Details <i class="fa fa-info-circle" aria-hidden="true"></i></a></span>-->

        <!--        </div>-->
        <!--        <div class="col-md-6">-->
        <!--            <div class="row">-->
        <!--                <div class="col-md-3">-->
        <!--                    <h6 style="text-align: center; margin-bottom: 0px;"><i class="fa fa-file-text-o" style="font-size: 32px; color: #22a9d7;" aria-hidden="true"></i></h6>-->

        <!--                    <p style="font-size: 12px; text-align: center;">Includes Toll, State Tax & GST</p>-->
        <!--                </div>-->
        <!--                <div class="col-md-3">-->
        <!--                    <h6 style="text-align: center; margin-bottom: 0px;"><i class="fa fa-certificate" style="font-size: 32px; color: #22a9d7;" aria-hidden="true"></i></h6>-->

        <!--                    <p style="font-size: 12px; text-align: center;">Top Rated Cabs & Chauffeurs</p>-->
        <!--                </div>-->
        <!--                <div class="col-md-3">-->
        <!--                    <p style="font-size: 16px; text-align: center; color: green; font-weight: 700;">-->
        <!--                        <s>₹65528</s> <br />-->
        <!--                        <span style="color: #b12704; font-size: 12px;">Save ₹10845</span>-->
        <!--                    </p>-->
        <!--                </div>-->
        <!--                <div class="col-md-3">-->
        <!--                    <p style="font-size: 16px; text-align: center; color: green; font-weight: 700;">-->
        <!--                        ₹54683<br />-->
        <!--                        <span style="font-size: 12px; color: black;"> up to 2142 km</span><br />-->
        <!--                    </p>-->

                            <!--<p style='font-size: 12px;text-align: center;'>₹34991 up to 2142 km Details</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="col-md-2">-->
        <!--            <a href="" class="as-btn" style="padding: 4.5px 31px;"><span class="btn-text">Book Car</span></a>-->
        <!--        </div>-->

                <!--                      <div class='col-md-12'>-->

                <!--<div id="review1" class=' mx-auto1  d-none1'>-->
                <!--   <div class="tab" >-->
                <!--								      <div class='row'>-->

                <!--								          <div class='col-md-6'>-->
                <!--								               <ul class="tabs-btn">-->
                <!--								      <li class="tab-btn" >Inclusions</li>-->
                <!--								      <li class="tab-btn">Exclusions</li>-->
                <!--								      <li class="tab-btn">Facilities</li>-->
                <!--								      <li class="tab-btn">T&C</li>-->

                <!--								    </ul>-->
                <!--								          </div>-->
                <!--								      </div>-->

                <!--								    <div class="tabs-content">-->
                <!--								      <div class="tab-content">-->
                <!--								       <div class="position-relative space" style="padding-top: 0px;padding-bottom: 0px;">-->
                <!--								            <div class="container" style="padding-right: 0px;padding-left: 0px;">-->
                <!--								                    <div class="row">-->

                <!--                                                        <div class='col-md-12'>-->
                <!--                                                            <p style='font-size:12px'><img src='assets/img/cars/inclusions_icon1.png' style='width:3%'> Base Fare and Fuel Charges</p>-->
                <!--                                                            <p style='font-size:12px'><img src='assets/img/cars/inclusions_icon2.png' style='width:3%'> Driver Allowance</p>-->
                <!--                                                            <p style='font-size:12px'><img src='assets/img/cars/exclusions_icon1.png' style='width:3%'> State Tax & Toll </p>-->
                <!--                                                             <p style='font-size:12px'><img src='assets/img/cars/inclusions_icon3.png' style='width:3%'> GST (5%)</p>-->

                <!--                                                        </div>-->

                <!--								                    </div>-->

                <!--								            </div>-->
                <!--								        </div>-->
                <!--								      </div>-->
                <!--								      <div class="tab-content">-->
                <!--								         <div class="container" style="padding-right: 0px;padding-left: 0px;">-->
                <!--								                    <div class="row">-->

                <!--                                                        <div class='col-md-12'>-->
                <!--                                                            <p style='font-size:12px'><img src='assets/img/cars/inclusions_icon2.png' style='width:3%'> Pay ₹19/km after 2142 km</p>-->
                <!--                                                            <p style='font-size:12px'><img src='assets/img/cars/exclusions_icon3.png' style='width:3%'> Multiple pickups/drops </p>-->
                <!--                                                             <p style='font-size:12px'><img src='assets/img/cars/exclusions_icon3.png' style='width:3%'> Parking </p>-->

                <!--                                                        </div>-->

                <!--								                    </div>-->

                <!--								            </div>-->
                <!--								      </div>-->
                <!--								      <div class="tab-content">-->
                <!--								         <div class="position-relative space" style="padding-top: 0px;padding-bottom: 0px;">-->
                <!--                                            <div class="container" style="padding-right: 0px;padding-left: 0px;">-->
                <!--								                    <div class="row">-->

                <!--                                                        <div class='col-md-12'>-->
                <!--                                                            <p style='font-size:12px'><img src='assets/img/cars/facilities_icon1.png' style='width:3%'> 6 Seater</p>-->
                <!--                                                            <p style='font-size:12px'><img src='assets/img/cars/facilities_icon2.png' style='width:3%'> 2 bags</p>-->
                <!--                                                            <p style='font-size:12px'><img src='assets/img/cars/facilities_icon3.png' style='width:3%'> AV </p>-->

                <!--                                                        </div>-->

                <!--								                    </div>-->

                <!--								            </div>-->
                <!--                                        </div>-->
                <!--								      </div>-->
                <!--								      <div class="tab-content">-->
                <!--								         <div class="position-relative space" style="padding-top: 0px;padding-bottom: 0px;">-->
                <!--                                            <div class="container" style="padding-right: 0px;padding-left: 0px;">-->
                <!--								                    <div class="row">-->

                <!--                                                        <div class='col-md-12'>-->

                <!--                                                    <ul _ngcontent-pbb-c70="" class="pl-3 mt-2 w-100 text-justify" style="font-size: 12px;">-->
                <!--                                                        <li _ngcontent-pbb-c70="" class="ng-star-inserted">Your Trip has a KM limit. If your usage exceeds this limit, you will be charged for the excess KM used.</li>-->
                <!--                                                        <li _ngcontent-pbb-c70="" class="ng-star-inserted">We promote cleaner fuel and thus your cab can be a CNG vehicle. The driver may need to fill CNG once or more during your trip. Please cooperate with the driver.</li>-->
                <!--                                                        <li _ngcontent-pbb-c70="" class="ng-star-inserted">For driving between 10:00 pm to 6:00 am on any of the nights, an additional allowance will be applicable and is to be paid to the driver.</li>-->
                <!--                                                        <li _ngcontent-pbb-c70="" class="ng-star-inserted">Your trip includes one pick up in Pick-up city and one drop to destination city. It does not include within city travel.</li>-->
                <!--                                                        <li _ngcontent-pbb-c70="" class="ng-star-inserted">If your Trip has Hill climbs, cab AC may be switched off during such climbs.</li>-->
                <!---->
                <!--                                                    </ul>-->
                <!--								                   </div>-->
                <!--								                    </div>-->

                <!--								            </div>-->
                <!--                                        </div>-->
                <!--								      </div>-->

                <!--								    </div>-->
                <!--								  </div>-->

                <!--</div>-->
                <!--                  </div>-->
        <!--    </div>-->
        <!--</div>-->

        <div class="tab car2" style="margin-top: -50px; margin-bottom: 68px;">
            <div class="container" style="padding-right: 0px; padding-left: 0px;">
                <div class="row">
                    <div class="col-6">
                        
                        <p style="font-size: 16px; font-weight: 700;margin-bottom:8px">
                            
                            Toyota Etios <br />
                            <span style="font-size: 12px;"> or equivalent</span>
                        </p>
                        <h6 style="color: #22a9d7;margin-bottom:8px">
                            ₹34991 <br />
                            <span style="color: #b12704;margin-bottom:8px"><s>₹49606</s></span>
                        </h6>
                        <p>2142 kms package <span style="font-weight: 500; font-size: 12px;">Includes Toll & GST</span></p>
                    </div>
                    <div class="col-6">
                        <!--<p style='float:right'><a onclick="document.getElementById('id01').style.display='block'" ><i class="fa fa-cogs" aria-hidden="true"></i></a></p>-->
                        <img src="assets/img/car.jpg" style="width: 100%;" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <p style='text-align:center;text-align: center;margin-bottom: 9px;color: #1b6bb0;font-size: 12px;'> <a onclick="document.getElementById('id01').style.display='block'" >More Info <i class="fa fa-info-circle" aria-hidden="true"></i></a></p>

                        <div class="form-btn"><a href='thankyou.php' class="as-btn" style="width: 100%; border-radius: 10px; padding: 9.5px 31px;">Book Car</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab car2" style="margin-top: -50px; margin-bottom: 68px;">
            <div class="container" style="padding-right: 0px; padding-left: 0px;">
                <div class="row">
                    <div class="col-6">
                        <p style="font-size: 16px; font-weight: 700;margin-bottom:8px">
                            Ertiga <br />
                            <span style="font-size: 12px;"> or equivalent</span>
                        </p>
                        <h6 style="color: #22a9d7;margin-bottom:8px">
                            ₹54683 <br />
                            <span style="color: #b12704;"><s>₹65528</s></span>
                        </h6>
                        <p>2142 kms package <span style="font-weight: 500; font-size: 12px;margin-bottom:8px">Includes Toll & GST</span></p>
                    </div>
                    <div class="col-6">
                     <!--<p style='float:right'><a onclick="document.getElementById('id01').style.display='block'" ><i class="fa fa-cogs" aria-hidden="true"></i></a></p>-->

                        <img src="assets/img/car1.jpg" style="width: 100%;" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                         <p style='text-align:center;text-align: center;margin-bottom: 9px;font-size: 12px;'> <a onclick="document.getElementById('id01').style.display='block'" style='color: #1b6bb0;'>More Info <i class="fa fa-info-circle" aria-hidden="true"></i></a></p>

                        <div class="form-btn"><a href='thankyou.php' class="as-btn" style="width: 100%; border-radius: 10px; padding: 9.5px 31px;">Book Car</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="tab car2">-->
<!--    <div class="row">-->
<!--        <div class="col-md-3"></div>-->
<!--        <div class="col-md-6">-->
<!--            <ul class="tabs-btn">-->
<!--                <li class="tab-btn">Inclusions</li>-->
<!--                <li class="tab-btn">Exclusions</li>-->
<!--                <li class="tab-btn">Facilities</li>-->
<!--                <li class="tab-btn">T&C</li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="tabs-content">-->
<!--        <div class="tab-content">-->
<!--            <div class="position-relative space" style="padding-top: 0px; padding-bottom: 0px;">-->
<!--                <div class="container" style="padding-right: 0px; padding-left: 0px;">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon1.png" style="width: 8%;" /> Base Fare and Fuel Charges</p>-->
<!--                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon2.png" style="width: 8%;" /> Driver Allowance</p>-->
<!--                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon1.png" style="width: 8%;" /> State Tax & Toll</p>-->
<!--                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon3.png" style="width: 8%;" /> GST (5%)</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="tab-content">-->
<!--            <div class="container" style="padding-right: 0px; padding-left: 0px;">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon2.png" style="width: 8%;" /> Pay ₹19/km after 2142 km</p>-->
<!--                        <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon3.png" style="width: 8%;" /> Multiple pickups/drops</p>-->
<!--                        <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon3.png" style="width: 8%;" /> Parking</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="tab-content">-->
<!--            <div class="position-relative space" style="padding-top: 0px; padding-bottom: 0px;">-->
<!--                <div class="container" style="padding-right: 0px; padding-left: 0px;">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon1.png" style="width: 8%;" /> 6 Seater</p>-->
<!--                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon2.png" style="width: 8%;" /> 2 bags</p>-->
<!--                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon3.png" style="width: 8%;" /> AV</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="tab-content">-->
<!--            <div class="position-relative space" style="padding-top: 0px; padding-bottom: 0px;">-->
<!--                <div class="container" style="padding-right: 0px; padding-left: 0px;">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                            <ul _ngcontent-pbb-c70="" class="pl-3 mt-2 w-100 text-justify" style="font-size: 12px;">-->
<!--                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">Your Trip has a KM limit. If your usage exceeds this limit, you will be charged for the excess KM used.</li>-->
<!--                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">-->
<!--                                    We promote cleaner fuel and thus your cab can be a CNG vehicle. The driver may need to fill CNG once or more during your trip. Please cooperate with the driver.-->
<!--                                </li>-->
<!--                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">For driving between 10:00 pm to 6:00 am on any of the nights, an additional allowance will be applicable and is to be paid to the driver.</li>-->
<!--                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">Your trip includes one pick up in Pick-up city and one drop to destination city. It does not include within city travel.</li>-->
<!--                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">If your Trip has Hill climbs, cab AC may be switched off during such climbs.</li>-->
                                <!---->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<div id="id01" class="modal">
    <form class="modal-content animate" action="#" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <!--<p style="margin-bottom: 0px;">We are calculating the price</p>-->
            <!--<img src="assets/img/new.gif" style="width: 7%;" />-->
            <!--<p style="margin-bottom: 0px;">Please enter the details to View</p>-->
        </div>
        <div class='row'>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px' >Inclusions</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon1.png" style="width: 8%;" /> Base Fare and Fuel Charges</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon2.png" style="width: 8%;" /> Driver Allowance</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Exclusions</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <!--<p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon2.png" style="width: 8%;" /> Pay ₹13/km after 2142 km</p>-->
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon3.png" style="width: 8%;" /> Multiple pickups/drops</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon3.png" style="width: 8%;" /> Parking</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon1.png" style="width: 8%;" /> State Tax & Toll</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon3.png" style="width: 8%;" /> GST (5%)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Facilities</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon1.png" style="width: 8%;" /> 4+1 Seater</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon2.png" style="width: 8%;" /> 2 bags</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon3.png" style="width: 8%;" /> AC</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-12'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Terms and Conditions</h5>
                    <div class="row">
                        <div class="col-md-12" style='padding: 0px 16px 1px 30px;'>
                            <ul _ngcontent-pbb-c70="" class="pl-3 mt-2 w-100 text-justify" style="font-size: 12px;">
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">Your Trip has a KM limit. If your usage exceeds this limit, you will be charged for the excess KM used.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">
                                    We promote cleaner fuel and thus your cab can be a CNG vehicle. The driver may need to fill CNG once or more during your trip. Please cooperate with the driver.
                                </li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">For driving between 10:00 pm to 6:00 am on any of the nights, an additional allowance will be applicable and is to be paid to the driver.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">Your trip includes one pick up in Pick-up city and one drop to destination city. It does not include within city travel.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">If your Trip has Hill climbs, cab AC may be switched off during such climbs.</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div id="id02" class="modal">
    <form class="modal-content animate" action="#" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <!--<p style="margin-bottom: 0px;">We are calculating the price</p>-->
            <!--<img src="assets/img/new.gif" style="width: 7%;" />-->
            <!--<p style="margin-bottom: 0px;">Please enter the details to View</p>-->
        </div>
        <div class='row'>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px' >Inclusions</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon1.png" style="width: 8%;" /> Base Fare and Fuel Charges</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon2.png" style="width: 8%;" /> Driver Allowance</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Exclusions</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <!--<p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon2.png" style="width: 8%;" /> Pay ₹14/km after 2142 km</p>-->
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon3.png" style="width: 8%;" /> Multiple pickups/drops</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon3.png" style="width: 8%;" /> Parking</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon1.png" style="width: 8%;" /> State Tax & Toll</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon3.png" style="width: 8%;" /> GST (5%)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Facilities</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon1.png" style="width: 8%;" /> 4+1 Seater</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon2.png" style="width: 8%;" /> 2 bags</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon3.png" style="width: 8%;" /> AC</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-12'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Terms and Conditions</h5>
                    <div class="row">
                        <div class="col-md-12" style='padding: 0px 16px 1px 30px;'>
                            <ul _ngcontent-pbb-c70="" class="pl-3 mt-2 w-100 text-justify" style="font-size: 12px;">
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">Your Trip has a KM limit. If your usage exceeds this limit, you will be charged for the excess KM used.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">
                                    We promote cleaner fuel and thus your cab can be a CNG vehicle. The driver may need to fill CNG once or more during your trip. Please cooperate with the driver.
                                </li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">For driving between 10:00 pm to 6:00 am on any of the nights, an additional allowance will be applicable and is to be paid to the driver.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">Your trip includes one pick up in Pick-up city and one drop to destination city. It does not include within city travel.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">If your Trip has Hill climbs, cab AC may be switched off during such climbs.</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div id="id03" class="modal">
    <form class="modal-content animate" action="#" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
            <!--<p style="margin-bottom: 0px;">We are calculating the price</p>-->
            <!--<img src="assets/img/new.gif" style="width: 7%;" />-->
            <!--<p style="margin-bottom: 0px;">Please enter the details to View</p>-->
        </div>
        <div class='row'>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px' >Inclusions</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon1.png" style="width: 8%;" /> Base Fare and Fuel Charges</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon2.png" style="width: 8%;" /> Driver Allowance</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Exclusions</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <!--<p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon2.png" style="width: 8%;" /> Pay ₹17/km after 2142 km</p>-->
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon3.png" style="width: 8%;" /> Multiple pickups/drops</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon3.png" style="width: 8%;" /> Parking</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon1.png" style="width: 8%;" /> State Tax & Toll</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon3.png" style="width: 8%;" /> GST (5%)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Facilities</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon1.png" style="width: 8%;" /> 6+1 Seater</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon2.png" style="width: 8%;" /> 2 bags</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon3.png" style="width: 8%;" /> AC</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-12'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Terms and Conditions</h5>
                    <div class="row">
                        <div class="col-md-12" style='padding: 0px 16px 1px 30px;'>
                            <ul _ngcontent-pbb-c70="" class="pl-3 mt-2 w-100 text-justify" style="font-size: 12px;">
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">Your Trip has a KM limit. If your usage exceeds this limit, you will be charged for the excess KM used.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">
                                    We promote cleaner fuel and thus your cab can be a CNG vehicle. The driver may need to fill CNG once or more during your trip. Please cooperate with the driver.
                                </li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">For driving between 10:00 pm to 6:00 am on any of the nights, an additional allowance will be applicable and is to be paid to the driver.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">Your trip includes one pick up in Pick-up city and one drop to destination city. It does not include within city travel.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">If your Trip has Hill climbs, cab AC may be switched off during such climbs.</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div id="id04" class="modal">
    <form class="modal-content animate" action="#" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
            <!--<p style="margin-bottom: 0px;">We are calculating the price</p>-->
            <!--<img src="assets/img/new.gif" style="width: 7%;" />-->
            <!--<p style="margin-bottom: 0px;">Please enter the details to View</p>-->
        </div>
        <div class='row'>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px' >Inclusions</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon1.png" style="width: 8%;" /> Base Fare and Fuel Charges</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon2.png" style="width: 8%;" /> Driver Allowance</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Exclusions</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <!--<p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon2.png" style="width: 8%;" /> Pay ₹18/km after 2142 km</p>-->
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon3.png" style="width: 8%;" /> Multiple pickups/drops</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon3.png" style="width: 8%;" /> Parking</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon1.png" style="width: 8%;" /> State Tax & Toll</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon3.png" style="width: 8%;" /> GST (5%)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Facilities</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon1.png" style="width: 8%;" /> 6+1 and 7+1 Seater</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon2.png" style="width: 8%;" /> 2 bags</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon3.png" style="width: 8%;" /> AC</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-12'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Terms and Conditions</h5>
                    <div class="row">
                        <div class="col-md-12" style='padding: 0px 16px 1px 30px;'>
                            <ul _ngcontent-pbb-c70="" class="pl-3 mt-2 w-100 text-justify" style="font-size: 12px;">
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">Your Trip has a KM limit. If your usage exceeds this limit, you will be charged for the excess KM used.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">
                                    We promote cleaner fuel and thus your cab can be a CNG vehicle. The driver may need to fill CNG once or more during your trip. Please cooperate with the driver.
                                </li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">For driving between 10:00 pm to 6:00 am on any of the nights, an additional allowance will be applicable and is to be paid to the driver.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">Your trip includes one pick up in Pick-up city and one drop to destination city. It does not include within city travel.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">If your Trip has Hill climbs, cab AC may be switched off during such climbs.</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div id="id05" class="modal">
    <form class="modal-content animate" action="#" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
            <!--<p style="margin-bottom: 0px;">We are calculating the price</p>-->
            <!--<img src="assets/img/new.gif" style="width: 7%;" />-->
            <!--<p style="margin-bottom: 0px;">Please enter the details to View</p>-->
        </div>
        <div class='row'>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px' >Inclusions</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon1.png" style="width: 8%;" /> Base Fare and Fuel Charges</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon2.png" style="width: 8%;" /> Driver Allowance</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Exclusions</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <!--<p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon2.png" style="width: 8%;" /> Pay ₹20/km after 2142 km</p>-->
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon3.png" style="width: 8%;" /> Multiple pickups/drops</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon3.png" style="width: 8%;" /> Parking</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/exclusions_icon1.png" style="width: 8%;" /> State Tax & Toll</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/inclusions_icon3.png" style="width: 8%;" /> GST (5%)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Facilities</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon1.png" style="width: 8%;" /> 6+1 and 7+1 Seater</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon2.png" style="width: 8%;" /> 2 bags</p>
                            <p style="font-size: 12px;"><img src="assets/img/cars/facilities_icon3.png" style="width: 8%;" /> AC</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-12'>
                <div class="container" style="padding: 16px; margin-top: -20px;">
                    <h5 style='font-size:16px'>Terms and Conditions</h5>
                    <div class="row">
                        <div class="col-md-12" style='padding: 0px 16px 1px 30px;'>
                            <ul _ngcontent-pbb-c70="" class="pl-3 mt-2 w-100 text-justify" style="font-size: 12px;">
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">Your Trip has a KM limit. If your usage exceeds this limit, you will be charged for the excess KM used.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">
                                    We promote cleaner fuel and thus your cab can be a CNG vehicle. The driver may need to fill CNG once or more during your trip. Please cooperate with the driver.
                                </li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">For driving between 10:00 pm to 6:00 am on any of the nights, an additional allowance will be applicable and is to be paid to the driver.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">Your trip includes one pick up in Pick-up city and one drop to destination city. It does not include within city travel.</li>
                                <li _ngcontent-pbb-c70="" class="ng-star-inserted">If your Trip has Hill climbs, cab AC may be switched off during such climbs.</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    // Get the modal
    var modal = document.getElementById('id01');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) 
    {
        if (event.target == modal) 
        {
            modal.style.display = "none";
        }
    }
    
    // Get the modal
    var modal = document.getElementById('id02');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) 
    {
        if (event.target == modal) 
        {
            modal.style.display = "none";
        }
    }
    
    // Get the modal
    var modal = document.getElementById('id03');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) 
    {
        if (event.target == modal) 
        {
            modal.style.display = "none";
        }
    }
    
    // Get the modal
    var modal = document.getElementById('id04');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) 
    {
        if (event.target == modal) 
        {
            modal.style.display = "none";
        }
    }
    
    // Get the modal
    var modal = document.getElementById('id05');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) 
    {
        if (event.target == modal) 
        {
            modal.style.display = "none";
        }
    }
</script>
       
       
       
<style>
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
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */

@media only screen and (max-width: 768px) {

.modal-content {
    background-color: #fefefe;
    margin: -11% auto 14% auto;
    border: 1px solid #888;
    border-radius:15px;
    width: 95%;
}
}



@media only screen and (min-width: 768px) {

.modal-content {
    background-color: #fefefe;
    margin: -3% auto 14% auto !important;
    border: 1px solid #888;
    width: 45% !important;
}
}
/* The Close Button (x) */
.close {
    position: absolute;
    right: 0px;
    top: -6px;
    color: #000;
    font-size: 23px;
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

    wow = new WOW({
        boxClass: "wow", // default
        animateClass: "animated", // default
        offset: 0, // default
        mobile: true, // default
        live: true, // default
    });
    wow.init();
</script>
<script>
    const button = document.getElementById("see-review");

    button.addEventListener("click", function () {
        const review = document.getElementById("review");

        if (review.classList.contains("d-none")) {
            review.classList.remove("d-none");
            button.textContent = "More details";
        } else {
            review.classList.add("d-none");
            button.textContent = "More details";
        }
    });
</script>
<script>
    const button = document.getElementById("see-review1");

    button.addEventListener("click", function () {
        const review = document.getElementById("review1");

        if (review.classList.contains("d-none1")) {
            review.classList.remove("d-none1");
            button.textContent = "Show LESS";
        } else {
            review.classList.add("d-none1");
            button.textContent = "Show MORE";
        }
    });
</script>

<?php include('includes/footer.php');
}
else
{
    header('Location: index.php');
}
?>