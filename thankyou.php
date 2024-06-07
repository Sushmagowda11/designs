<?php include('includes/header.php');?>
<?php  error_reporting(0);
$dt = date("Y-m-d");
if(isset($_POST['oneway']))
{
    $fl = $_POST['fromlocation'];
    $tl = $_POST['tolocation'];
    $nm = $_POST['name'];
    $em = $_POST['email'];
    $num = $_POST['number'];
    $amt = $_POST['amount'];
    $rd = $_POST['reservation_date'];
    $rt = $_POST['reservation_time'];
    $cab = $_POST['cab'];
    $km = $_POST['km'];
    $tm = $_POST['time'];
    $ext = $_POST['extra'];
    $pickup_address = $_POST['pickup_address'];
    
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
                    Pickup Address &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;     padding-bottom: 10px;font-weight:600">
                    <b>'.$pickup_address.'</b>
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                    Entry Date &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                    '.$dt.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                    Entry Time &nbsp;: &nbsp; 
                </div>
                <div class="col-md-5" style="display: inline-block;    padding-bottom: 10px;">
                    '.$tm.'
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
                    '.$tl.'
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
    
    
    //mail
    $fromad="no-reply@cabs4hire.com";
	$to = $em;
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
        
        .prow {
            
            font-family: "Roboto", sans-serif;
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
          table tr td,table tr th{
             font-size: 16px; 
          }
        
          /*table tr th{*/
          /*  padding-left: 1.5rem !important; */
          /*}*/
        }
    </style>
    
    </head>
    
    <body>
        <div>   
    <div class="mail_box">
        
        <div class="logo_area ">
             <img width="200px" src="http://cabs4hire.com/assets/img/logo.png" alt="">
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
                <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px; font-weight:600">
                    <b>'.$num.'</b>
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                    Pickup Address &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;     padding-bottom: 10px;font-weight:600">
                    <b>'.$pickup_address.'</b>
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                    Entry Date &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                    '.$dt.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                    Entry Time &nbsp;: &nbsp; 
                </div>
                <div class="col-md-5" style="display: inline-block;    padding-bottom: 10px;">
                    '.$tm.'
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
                    '.$tl.'
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
            <p>Contact: <a href="#">9483220300</a> Please visit Our Website : <span class="https://cabs4hire.com/">https://cabs4hire.com</span></p>
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
    
}

if(isset($_POST['roundtrip']))
{
    $fl = $_POST['fromlocation'];
    $tl = $_POST['tolocation'];
    $nm = $_POST['name'];
    $em = $_POST['email'];
    $num = $_POST['number'];
    $amt = $_POST['amount'];
    $rd = $_POST['reservation_date'];
    $rt = $_POST['reservation_time'];
    $cab = $_POST['cab'];
    $km = $_POST['km'];
    $tm = $_POST['time'];
    $days = $_POST['days'];
    $pickup_address = $_POST['pickup_address'];
    $ext = $_POST['extra'];
    
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
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Name &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$nm.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Contact No &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px; font-weight:600">
                    <b>'.$num.'</b>
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                    Pickup Address &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;     padding-bottom: 10px;font-weight:600">
                    <b>'.$pickup_address.'</b>
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Entry Date &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$dt.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Entry Time &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$tm.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    PickUp Date &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$rd.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Time &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$rt.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Cab &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$cab.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    PickUp Place &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$fl.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Drop Place &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$tl.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Trip Type &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    Round Trip
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    KM &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$km.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Fare &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$amt.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Extra KM &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$ext.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Number Of Days &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$days.'
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
    
    
    //mail
    $fromad="no-reply@cabs4hire.com";
	$to = $em;
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
        
        .prow {
            
            font-family: "Roboto", sans-serif;
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
          table tr td,table tr th{
             font-size: 16px; 
          }
        
          /*table tr th{*/
          /*  padding-left: 1.5rem !important; */
          /*}*/
        }
    </style>
    
    </head>
    
    <body>
        <div>   
    <div class="mail_box">
        
        <div class="logo_area ">
             <img width="200px" src="http://cabs4hire.com/assets/img/logo.png" alt="">
        </div>
        <div class="pad-50 pb-0">
            <p class="head mb-0" style="font-size:16px">Welcome To <b>Cabs4hire Service</b></p>
            <p class="head mb-0" style="font-size:16px">Please Note Your Booking Details</p>
            <hr>
        </div>
        <div class="pad-50" style="padding-top:0px">
            <div class="prow">
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Name &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$nm.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Contact No &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px; font-weight:600">
                    <b>'.$num.'</b>
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                    Pickup Address &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;     padding-bottom: 10px;font-weight:600">
                    <b>'.$pickup_address.'</b>
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Entry Date &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$dt.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Entry Time &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$tm.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    PickUp Date &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$rd.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Time &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$rt.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Cab &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$cab.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    PickUp Place &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$fl.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Drop Place &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$tl.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Trip Type &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    Round Trip
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    KM &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$km.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Fare &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$amt.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Extra KM &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$ext.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;padding-bottom: 10px;">
                    Number Of Days &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;padding-bottom: 10px;">
                    '.$days.'
                </div>
            </div>
            
            <br>
            
            <p>Exclude Toll Permit Charge</p>
            <p class="" style="color:#000"><b>Happy Journey</b></p>
            <p>Contact: <a href="#">9483220300</a> Please visit Our Website : <span class="https://cabs4hire.com/">https://cabs4hire.com</span></p>
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
    
}

if(isset($_POST['airport']))
{
    $tl = $_POST['tolocation'];
    $nm = $_POST['name'];
    $em = $_POST['email'];
    $num = $_POST['number'];
    $amt = $_POST['amount'];
    $rd = $_POST['reservation_date'];
    $rt = $_POST['reservation_time'];
    $cab = $_POST['cab'];
    $km = $_POST['km'];
    $tm = $_POST['time'];
    $ext = $_POST['extra'];
    
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
                    Entry Date &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                    '.$dt.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                    Entry Time &nbsp;: &nbsp; 
                </div>
                <div class="col-md-5" style="display: inline-block;    padding-bottom: 10px;">
                    '.$tm.'
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
                    '.$tl.'
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
    
    
    //mail
    $fromad="no-reply@cabs4hire.com";
	$to = $em;
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
        
        .prow {
            
            font-family: "Roboto", sans-serif;
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
          table tr td,table tr th{
             font-size: 16px; 
          }
        
          /*table tr th{*/
          /*  padding-left: 1.5rem !important; */
          /*}*/
        }
    </style>
    
    </head>
    
    <body>
        <div>   
    <div class="mail_box">
        
        <div class="logo_area ">
             <img width="200px" src="http://cabs4hire.com/assets/img/logo.png" alt="">
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
                <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px; font-weight:600">
                    <b>'.$num.'</b>
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                    Entry Date &nbsp;: &nbsp; 
                </div>
                <div class="col-md-9" style="display: inline-block;    padding-bottom: 10px;">
                    '.$dt.'
                </div>
                <br>
                <div class="col-md-3" style="display: inline-block;    padding-bottom: 10px;">
                    Entry Time &nbsp;: &nbsp; 
                </div>
                <div class="col-md-5" style="display: inline-block;    padding-bottom: 10px;">
                    '.$tm.'
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
                    '.$tl.'
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
            </div>
            
            <br>
            
            <p>Exclude Toll Permit Charge</p>
            <p class="" style="color:#000"><b>Happy Journey</b></p>
            <p>Contact: <a href="#">9483220300</a> Please visit Our Website : <span class="https://cabs4hire.com/">https://cabs4hire.com</span> </p>
            
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
    
}

?>
<style type="text/css">
	.hero_single.inner_pages h1 {
	    padding-top: 7rem;
	}
	.hero_single.inner_pages {
	    height: 299px;
	}
    .jumbotron {
        padding: 30px 15px;
       
        color: inherit;
        background-color: #3c5476;
    }
    .avtar {
        max-width: 100%;
    }
    /* No Need To Add */

    .jumbotron {
    	color: white;
		background: #fff;
		-webkit-text-fill-color: white;
        opacity: 0.8;
    }
    .jumbotron h2 {
        color: #000;
        font-size: 3em;
        font-weight: bold;
        margin: 0.25em 0;
    }
    .jumbotron p {
        color: #000;
    }
    .jumbotron .container-login100-form-btn {
        margin-left: auto;
        margin-right: auto;
        max-width: 290px;
    }

    .checkMark {
        -webkit-animation: show 1s linear forwards 0.5s;
        -ms-animation: show 1s linear forwards 0.5s;
        animation: show 1s linear forwards 0.5s;
        border: 2px solid #529c29;
        border-radius: 50%;
        height: 100px;
        margin: 0 auto;
        padding: 1.5em;
        width: 100px;
    }
    .checkMark path {
        -webkit-animation: draw 0.5s linear forwards 1s;
        -ms-animation: draw 0.5s linear forwards 1s;
        animation: draw 0.5s linear forwards 1s;
        fill: none;
        stroke: #529c29;
        stroke-miterlimit: 10;
        stroke-width: 40px;
        stroke-dasharray: 500;
        stroke-dashoffset: 500;
    }
    .checkMark svg {
        overflow: visible;
    }

    @-webkit-@keyframes draw {
        from {
            stroke-linecap: round;
        }
        to {
            stroke-linecap: round;
            stroke-dashoffset: 0;
        }
    }
    @-ms-@keyframes draw {
        from {
            stroke-linecap: round;
        }
        to {
            stroke-linecap: round;
            stroke-dashoffset: 0;
        }
    }
    @keyframes draw {
        from {
            stroke-linecap: round;
        }
        to {
            stroke-linecap: round;
            stroke-dashoffset: 0;
        }
    }

    @-webkit-@keyframes show {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    @-ms-@keyframes show {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    @keyframes show {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
	.bann_butt{
		height: 42px;
		display: inline-block;
		width: 142px;
		padding: 14px 25px;
	}
    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }
    .hero_single {
        width: 100%;
        position: relative;
        text-align: center;
        margin: 0;
        color: #fff;
    }
    .hero_single .opacity-mask {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }

    .opacity-mask {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 2;
    }
    .text-white{
        color: white!important;
    }

	.shine {
		color: white;
		text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
	}
	.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 70%;
}
</style>



        <!--<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg" data-overlay="title" data-opacity="4">-->
        <!--    <div class="container z-index-common">-->
        <!--        <h1 class="breadcumb-title">Thank You</h1>-->
        <!--        <ul class="breadcumb-menu">-->
        <!--            <li>For support or any questions please reach us</li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</div>-->
        
        
        	<div class="page-user" style="margin-bottom: 2rem">
		    <div class="form-gap"></div>

		     <div class="container " style="margin-top:80px;">
		        <div class='row'>
		            
		            <div class='col-md-4'>
		                 <div style='box-shadow:rgb(152 147 147 / 50%) 0px 0px 20px 0px;    padding: 16px;border-radius:10px;margin:5px 0px'>
		           
        		            <img src='assets/img/thank.gif' class='center' style='margin-top:-100px' >
        		            
        		            <h2 style='color:#000 ;text-align:center;margin-top:-30px' >Awesome!</h2>
        		            <p class="lead " style='color:#000;text-align:center;margin-bottom:10px'>Your Booking has been confirmed. </p>
        		            <p class="lead " style='color:#000;text-align:center;font-size:17px'>Check Your email for more details</p>
        		          
        		           <a href="index.php" class="as-btn" style='width:100%;background:#00d34f'>
        		                        OK
		                    </a>
		                 </div>
		            </div>
		            
		            <div class='col-md-4'>
		                 <div style='box-shadow:rgb(152 147 147 / 50%) 0px 0px 20px 0px;padding: 16px;border-radius:10px;height:280px;margin:5px 0px'>
    		                  <div class="box">
    		                      <div class="left"><p>Name:</p></div>
    		                       <div class="right"><p><?php echo $nm; ?></p></div>
    		                       <div class="left"><p>Phone Number:</p></div>
    		                       <div class="right"><p><?php echo $num; ?></p></div>
    		                       <div class="left"><p>Email Id:</p></div>
    		                       <div class="right"><p><?php echo $em; ?></p></div>
		                       <?php
		                        if(!isset($_POST['airport']))
		                        {
		                       ?>
    		                       <div class="left"><p>Pick Up Address:</p></div>
    		                       <div class="right"><p><?php echo $pickup_address; ?></p></div>
    		                       <div class="left"><p>Pick Up Date:</p></div>
    		                       <div class="right"><?php echo $newDate = date("d-m-Y", strtotime($rd));  ?></p></div>
		                       <?php
		                        }
	                           ?>
		                       <?php
		                        if(isset($_POST['roundtrip']))
		                        {
		                       ?>   
    		                       <div class="left"><p>Return Date:</p></div>
    		                       <div class="right"><p><?php echo $newDate = date("d-m-Y", strtotime($_POST['reservation_date1']));  ?></p></div>
		                       <?php
		                        }
	                           ?>
    		                  </div>
		                  </div>
		                
		                
		            </div>
		            
		             <div class='col-md-4'>
		                 <div style='box-shadow:rgb(152 147 147 / 50%) 0px 0px 20px 0px;padding: 16px;border-radius:10px;height:280px;margin:5px 0px'>
    		                  <div class="box">
    		                       <div class="left">
    		                           <p>
	                               <?php
	                                    if($cab == 'SEDAN')
	                                    {
	                               ?>
    		                               <img src="assets/img/cars/c1.png">
		                           <?php
	                                    }
                                   ?>
                                   <?php
	                                    if($cab == 'PRIME SEDAN')
	                                    {
	                               ?>
    		                               <img src="assets/img/cars/c2.png">
		                           <?php
	                                    }
                                   ?>
                                   <?php
	                                    if($cab == 'SUV')
	                                    {
	                               ?>
    		                               <img src="assets/img/cars/c3.png">
		                           <?php
	                                    }
                                   ?>
                                   <?php
	                                    if($cab == 'INNOVA')
	                                    {
	                               ?>
    		                               <img src="assets/img/cars/c4.png">
		                           <?php
	                                    }
                                   ?>
                                   <?php
	                                    if($cab == 'INNOVA CRYSTA')
	                                    {
	                               ?>
    		                               <img src="assets/img/cars/c5.png">
		                           <?php
	                                    }
                                   ?>
		                               </p>
		                           </div>
    		                       <div class="right">
    		                           <p><?php echo $cab; ?></p>
        		                       <p>
	                               <?php
	                                    if($cab == 'SEDAN')
	                                    {
	                               ?>
    		                               4+1 Passengers
		                           <?php
	                                    }
                                   ?>
                                   <?php
	                                    if($cab == 'PRIME SEDAN')
	                                    {
	                               ?>
    		                               4+1 Passengers
		                           <?php
	                                    }
                                   ?>
                                   <?php
	                                    if($cab == 'SUV')
	                                    {
	                               ?>
    		                               6+1 Passengers
		                           <?php
	                                    }
                                   ?>
                                   <?php
	                                    if($cab == 'INNOVA')
	                                    {
	                               ?>
    		                               6+1 and 7+1 Passengers
		                           <?php
	                                    }
                                   ?>
                                   <?php
	                                    if($cab == 'INNOVA CRYSTA')
	                                    {
	                               ?>
    		                               6+1 and 7+1 Passengers
		                           <?php
	                                    }
                                   ?>
		                               </p>    
    		                           <!--<p>6+1 Passengers</p>-->
    		                           <p><?php echo $ext; ?></p>
    		                           <p>Air Conditioning</p>
    		                       </div>
    		                     
    		                       <div class="left"><p></p></div>
    		                       <div class="right"></div>
    		                      
    		                  </div>
    		                  <div class="box">
    		                       
    		                       
    		                  <?php
		                        if(isset($_POST['oneway']))
		                        {
		                       ?>     
		                            <div class="left"><p>Itinerary:</p></div>
    		                        <div class="right"><p style="font-size:12px"><?php echo $fl; ?> > <?php echo $tl; ?></p></div>
    		                        <div class="left"><p style="margin-top: 0.7rem;">Total Fare:</p></div>
		                            <div class="right"><p>Rs <?php echo $amt; ?></p></div>
    		                 <?php
		                        }
		                        if(isset($_POST['roundtrip']))
		                        {
		                       ?>      
		                            <div class="left"><p>Itinerary:</p></div>
    		                        <div class="right"><p style="font-size:12px"><?php echo $fl; ?> > <?php echo $tl; ?> >  <?php echo $fl; ?></p></div>
    		                        <div class="left"><p style="margin-top: 1.6rem;">Total Fare:</p></div>
		                            <div class="right"><p>Rs <?php echo $amt; ?></p></div>
    		                  <?php
		                        }
		                        if(isset($_POST['airport']))
		                        {
	                          ?>
	                                <div class="left"><p>Total Fare:</p></div>
		                            <div class="right"><p>Rs <?php echo $amt; ?></p></div>
                             <?php
		                        }
	                         ?>
	                           
    		                       
    		                      
    		                     
    		                      
    		                  </div>
    		                
		                  </div>
		                
		                
		            </div>
		            
		            </div>
		        </div>
		       
		    </div>

		    <div class="spacing"></div>
		</div>
<style>
    .box{width:100%;}
    .left{width:40%;float:left;}
    .right{width:60%;float:right;}
</style>
     <?php include('includes/footer.php');?>
   