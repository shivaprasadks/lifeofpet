<html>

             
<?php
        if($_POST){
           session_start();
        $DB_NAME ="userinfo";
        $SERVER_NAME = "localhost";
        $PASSWORD ="";
        $USERNAME = "root";
        $conn = new mysqli($SERVER_NAME, $USERNAME, $PASSWORD);

            if(isset($_POST["customerEmail"])){
            
            $uEmail = $_POST["customerEmail"];
            $uContact = $_POST["phone"];
            $uname = $_POST["name"];
            $uDate = $_POST["date"];
            $uService = $_POST["services"];
            $umsg = $_POST["msg"];

            $_SESSION["uContact"] = $uContact;
            $_SESSION["DB_NAME"] = "userinfo";
            $_SESSION["SERVER_NAME"] = "localhost";
            $_SESSION["USERNAME"] = "root";
            $_SESSION["PASSWORD"] = "";




       

        $id = rand(111111, 999999);

        // Create connection
        

         $_SESSION["conn"] = $conn;

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

     $sql = "INSERT INTO `userinfo`.`user_appointment` (`AID`, `name`, `date`, `email`, `contact`, `service`, `status`, `code`) VALUES (NULL, '$uname', '$uDate', '$uEmail', '$uContact', '$uService', '0', '$id')";
     mysqli_select_db($conn,$DB_NAME);
    mysqli_query($conn ,$sql);



    //Your authentication key
        $authKey = "110991AzDvVyk5571bf45f";

        //Multiple mobiles numbers separated by comma
        $mobileNumber = $uContact;

        //Sender ID,While using route4 sender id should be 6 characters long.
        $senderId = "LFOFPT";

        //Your message to send, Add URL encoding here.
       // $message = urlencode("Test message");
        $message = "Dear ".$uname." please enter the OTP : ".$id." to confirm the appointment at Life of Pet";

        //Define route 
        $route = "3";
        //Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,
            'message' => $message,
            'sender' => $senderId,
            'route' => $route
        );

        //API URL
      //  $url="http://sms.tcpctechlinks.com/api/sendhttp.php";

        // init the resource
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
        ));


    //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


        //get response
        $output = curl_exec($ch);

        //Print error if any
        if(curl_errno($ch))
            {
               // echo 'error:' . curl_error($ch);
             }

             curl_close($ch);

     } elseif (isset($_POST["otp"])){

 $DB_NAME ="userinfo";
        $SERVER_NAME = "localhost";
        $PASSWORD ="";
        $USERNAME = "root";
        $conn1 = new mysqli($SERVER_NAME, $USERNAME, $PASSWORD, $DB_NAME);

            $otp = $_POST["otp"];
           
          

          //  $sql1 = "UPDATE `user_appointment` SET `status` = '1' WHERE `code` = '$otp' AND `contact` = '9535038242'";
          // $sql = "UPDATE `user_appointment` SET `status` = '1' WHERE `code` = '$otp' AND `status` = '0'";
           $sql = "UPDATE `user_appointment` SET `status` = 1 WHERE `code` = '$otp' AND `status` = 0";
        if (mysqli_query($conn1, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn1);
        }

        mysqli_close($conn1);
    
        /*
    * This example shows settings to use when sending via Google's Gmail servers.
    */
    //SMTP needs accurate times, and the PHP time zone MUST be set
    //This should be done in your php.ini, but this is how to do it if you don't have access to that
        /*
    date_default_timezone_set('Etc/UTC');
    require 'PHPMailerAutoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 2;
    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
    //Set the hostname of the mail server
    $mail->Host = 'localhost';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 25;
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
   $mail->Username = "info@lifeofpet.com";
    //Password to use for SMTP authentication
    $mail->Password = "Seyon@168";
    //Set who the message is to be sent from
    $mail->setFrom('info@lifeofpet.com', 'lifeofpet');
    //Set an alternative reply-to address
    $mail->addReplyTo('info@lifeofpet.com', 'lifeofpet');
    //Set who the message is to be sent to
    $mail->addAddress($_POST["customerEmail"], $_POST["name"]);
    //Set the subject line
    $mail->Subject = 'Comfirmation of appointment';
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

    $mail->msgHTML("<h1 align='center'>Thanks for using our service</h1>
  <div align='center'>
    <a href='https://www.lifeofpet.com/'><img src='images/lifeofpet1.png' height='140' width='340' alt='lifeofpet'></a>
  </div>
    <div align='center' >
        <h2 style='color:#424242;'>Appointment Details</h2>
        <div >
            <table>
            <tr>
                <th>Name:</th>
                    <td>$uname</td>
                </tr>
                <tr>
                    <th>Contact:</th>
                    <td>$uContact</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>$uEmail</td>
                </tr>
                <tr>
                    <th>Date:</th>
                    <td>$uDate</td>
                </tr>
                <tr>
                    <th>Service type:</th>
                    <td>$uService</td>
                </tr>
            </table>    
        </div>
    </div>
    <p>Thanks for visiting us</p>
    <a href='http://www.lifeofpet.com/'>contact us</a>");
    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';
    //Attach an image file

    // $mail->addAttachment('images/phpmailer_mini.png');
    //send the message, check for errors
    



    //Create a new PHPMailer instance
    $mail1 = new PHPMailer;
    //Tell PHPMailer to use SMTP
    $mail1->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail1->SMTPDebug = 2;
    //Ask for HTML-friendly debug output
    $mail1->Debugoutput = 'html';
    //Set the hostname of the mail server
    $mail1->Host = 'localhost';
   
    // if your network does not support SMTP over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail1->Port = 25;
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail1->SMTPSecure = 'tls';
    //Whether to use SMTP authentication
    $mail1->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail1->Username = "info@lifeofpet.com";
    //Password to use for SMTP authentication
    $mail1->Password = "Seyon@168";
    //Set who the message is to be sent from
    $mail1->setFrom('info@lifeofpet.com', 'lifeofpet');
    //Set an alternative reply-to address
    $mail1->addReplyTo('info@lifeofpet.com', 'lifeofpet');
    //Set who the message is to be sent to
    $mail1->addAddress('info@lifeOfpet.com', 'Admin');
    //Set the subject line
    $mail1->Subject = 'New Appointment Registered';
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

    $mail1->msgHTML("<h1 align='center'>New Appointment Registered</h1>
  <div align='center'>
    <a href='https://www.lifeofpet.com/'><img src='images/lifeofpet1.png' height='150' width='340' alt='lifeofpet'></a>
  </div>
    <div align='center' >
        <h2 style='color:#424242;'>Appointment Details</h2>
        <div >
            <table>
            <tr>
                <th>Name:</th>
                    <td>$uname</td>
                </tr>
                <tr>
                    <th>Contact:</th>
                    <td>$uContact</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>$uEmail</td>
                </tr>
                <tr>
                    <th>Date:</th>
                    <td>$uDate</td>
                </tr>
                <tr>
                    <th>Service type:</th>
                    <td>$uService</td>
                </tr>
                <tr>
                    <th>Message:</th>
                    <td>$umsg</td>
                </tr>
            </table>    
        </div>
    </div>
    <p>Thanks for visiting us</p>
    <a href='http://www.lifeofpet.com/'>contact us</a>");
    //Replace the plain text body with one created manually
    $mail1->AltBody = 'This is a plain-text message body';
    //Attach an image file

    // $mail->addAttachment('images/phpmailer_mini.png');
    //send the message, check for errors
    
      }*/ }
}
?>

 

<head id="Head1" runat="server">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>Life of Pet</title>

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">

    <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/carousel.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- COLORS -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <script src="js/modernizer.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

   
   

          
 
</head>
<body>
     <form method="POST" action="active_mail.php">
        <div>

            <div id="loader">
                <div class="loader-container">
                    <img src="images/lifeofpet1.png"  style="width:300px; height:150px;" alt="" class="loader-site spinner">
                </div>
            </div>

            <div id="wrapper">
                <div class="topbar clearfix">
                    <div class="container">
                        
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end topbar -->

                <header class="header">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <div class="navbar-table">
                                            <div class="navbar-cell tight">
                                                <div class="navbar-header">
                                                    <a class="navbar-brand" href="index.html">
                                                         <img src="images/lifeofpet1.png" alt="Ova" style="width:270px; height:100px;"></a>
                                                    <div>
                                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                                                            <span class="sr-only">Toggle navigation</span>
                                                            <span class="fa fa-bars"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- end navbar-header -->
                                            </div>
                                            <!-- end navbar-cell -->

                                            <div class="navbar-cell stretch">
                                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                                    <div class="navbar-cell">
                                                        <ul class="nav navbar-nav navbar-right">
                                                            <li class="dropdown has-submenu">
                                                                <a href="index.html" role="button" aria-expanded="false">Home </a>

                                                            </li>

                                                            <li class="dropdown has-submenu">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="fa fa-angle-down"></span></a>
                                                                <ul class="dropdown-menu start-left" role="menu">
                                                                    <li><a href="OpeningShortly.html">Vet On Call</a></li>

                                                                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Grooming <span class="fa fa-angle-right"></span></a>
                                                                    </li>
                                                                    <li><a href="OpeningShortly.html">Training</a></li>
                                                                    <li><a href="OpeningShortly.html">Adoption</a></li>
                                                                    <li><a href="OpeningShortly.html">Daily Walks</a></li>
                                                                </ul>
                                                            </li>
                                                            <!--   <li><a href="gallery-1.html">Gallery</a></li>-->
                                                            <!--<li><a href="shop.html">Shop</a></li>-->
                                                            <li><a href="Shop.html">Shop</a></li>
                                                            <li><a href="OpeningShortly.html">Blog</a></li>
                                                            <li><a href="appointment.php">Appointment</a></li>
                                                            <li><a href="OpeningShortly.html">Contact</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- end navbar-cell -->
                                            </div>
                                            <!-- /.navbar-collapse -->
                                        </div>
                                        <!-- end navbar cell -->
                                    </div>
                                    <!-- end navbar-table -->
                            </div>
                            <!-- end container fluid -->
                            </nav><!-- end navbar -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
            </div>
            <!-- end container -->
            </header>

      
        </section>
            <!-- end section -->

            <div class="page-title grey">
                <div class="container">
                    <div class="title-area pull-left">
                        <h2>Appointment Form <small>Get a premium appointment now!</small></h2>
                        <div class="bread">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Appointment Form</li>
                            </ol>
                        </div>
                        <!-- end bread -->
                    </div>
                   
                </div>
            </div>
            <!-- end page-title -->

            <section class="section white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-xs-12">
                           
                            <div class="appoform-wrapper">
                                <form method="post" action="active_mail.php"> <!-- form -->

                                    <header class="form-header">
                                        <h3>Registration Completed</h3>
                                    </header>
                                    <div class="post-body-form text-center">
                                        <h2>
                                          Thank you for fiiling up the form <br>
                                           Please enter the OTP sent to your mobile number in order to confirm the appointment
                                        </h2>
                                         <div class="col-md-6" style="margin-left:25%;" >
                                            <label class="sr-only">Your name</label>
                                            
                                            <input id="otp" type="text" name="otp" placeholder="Enter the OTP" class="form-control">
                                        </div>
                                        <div class="col-md-12" style="margin-top:20px;">
                                            <input type="submit" style="width:20%;" id="add" class="btn btn-primary" value="Confirm" onclick="return check();">
                                                
                                        </div>
                                    </div>

                                   
                                </form>
                            </div>
                            <!-- end form-container -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end section -->


         
            

            <footer class="footer dark">
                <div class="container">
                    <div class="row module-wrapper">
                        <div class="col-md-4 col-sm-6">
                            <div class="widget">
                                <div class="text-center">
                                    <img src="images/lifeofpet1.png" alt="" class="img-responsive">
                                    <p>Care with a Human Touch.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-4 col-sm-6">
                            <div class="widget">
                                <div class="widget-title">
                                    <h4>Contact Details</h4>
                                </div>
                                <ul>
                                    <li><i class="fa fa-link"></i>www.LifeOfPet.com</li>
                                    <li><i class="fa fa-envelope"></i>info@LifeOfpet.com</li>
                                    <li><i class="fa fa-phone"></i>+91 78993 83838 </li>
                                    <li><i class="fa fa-fax"></i>+91 78998 38383</li>
                              
                                </ul>
                            </div>
                            <!-- end widget -->
                        </div>
                        <!-- end col -->

                
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </footer>
            <!-- end footer -->

            <section class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <p>© 2015   <a href="http://www.seyonsolutions.com">Seyon Solutions</a></p>
                        </div>
                        <!-- end col -->
                        <div class="col-md-6 text-right">
                            <ul class="list-inline">
                                <li><a href="#">Terms of Usage</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end section -->
        </div>
        <!-- end wrapper -->

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/retina.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/jquery.simple-text-rotator.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/touch.js"></script>
        <script src="js/carousel.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery-ui-timepicker-addon.js"></script>
        <script src="js/bootstrap-select.js"></script>
        

       
    </form>
    





</html>