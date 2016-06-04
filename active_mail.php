<html>
<?php
include_once './mail.php';

if ($_POST)
  {
    
    $DB_NAME     = "mosambit_lop";
    $SERVER_NAME = "localhost";
    $PASSWORD    = "Seyon@168";
    $USERNAME    = "mosambit_lop";
    $conn        = new mysqli($SERVER_NAME, $USERNAME, $PASSWORD);
    
    if (isset($_POST["customerEmail"]))
      {
        
        $uEmail   = $_POST["customerEmail"];
        $uContact = $_POST["phone"];
        $uname    = $_POST["name"];
        $uDate    = $_POST["date"];
        $uService = $_POST["services"];
        $umsg     = $_POST["msg"];
        
      $id = rand(111111, 999999);
        
      // Check connection
        if ($conn->connect_error)
          {
            die("Connection failed: " . $conn->connect_error);
          }
        
        $sql = "INSERT INTO `members` (`AID`, `name`, `date`, `email`, `contact`, `service`, `status`, `code`) VALUES (NULL, '$uname', '$uDate', '$uEmail', '$uContact', '$uService', '0', '$id')";
        mysqli_select_db($conn, $DB_NAME);
        mysqli_query($conn, $sql);
        
        //Your authentication key
        $authKey = "110991AzDvVyk5571bf45f";
        
        //Multiple mobiles numbers separated by comma
        $mobileNumber = $uContact;
        
        //Sender ID,While using route4 sender id should be 6 characters long.
        $senderId = "LFOFPT";
        
        //Your message to send, Add URL encoding here.
        // $message = urlencode("Test message");
        $message = "Dear " . $uname . " please enter the OTP : " . $id . " to confirm the appointment at Life of Pet";
        
        //Define route 
        $route    = "3";
        //Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,
            'message' => $message,
            'sender' => $senderId,
            'route' => $route
        );
        
        //API URL
        $url = "http://sms.tcpctechlinks.com/api/sendhttp.php";
        
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
        if (curl_errno($ch))
          {
            // echo 'error:' . curl_error($ch);
          }
        
        curl_close($ch);
        
      }
    elseif (isset($_POST["otp"]))
      {
        
        
        $otp = $_POST["otp"];
        
        
        $sql = "UPDATE `members` SET `status` = '1' WHERE `code` = '$otp'";
        //$res = mysql_query($sql,$con);
        mysqli_select_db($conn, $DB_NAME);
        $res = mysqli_query($conn, $sql);
        
         if ($res == true)
          {
            $sql2 = "SELECT * FROM members  WHERE code = $otp";
            
            $result = $conn->query($sql2);
            
            if ($result->num_rows > 0)
              {
                // output data of each row
                while ($row = $result->fetch_assoc())
                  {
                    //echo "id: " . $row["name"] . " - Name: " . $row["contact"] . " " . $row["email"] . "<br>";
                    $uname    = $row["name"];
                    $uContact = $row["contact"];
                    $uEmail   = $row["email"];
                    $uDate    = $row["date"];
                    $uService = $row["service"];
                    
                   $mymail = new Mail_Send();
            //Mymail($uName,$uContact,$uEmail,$uService,$uDate)
            $mymail->MymailUser($uname,$uContact,$uEmail,$uService,$uDate);
    
            $mymail->MymailAdmin($uname,$uContact,$uEmail,$uService,$uDate);
                  }
              }
            else
              {
                echo "0 results";
              }
            $message = "Your Appointment has been confirmed  Thank you";
             echo "<script type='text/javascript'>alert('$message'); location.href = 'index.html';</script>";
            
            
          }
        else
          {
            $message = "Invalid OTP or the OTP has been expired";
            echo "<script type='text/javascript'>alert('$message');</script>";
          }
      }
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
    <!-- ClickDesk Live Chat Service for websites -->
    <script type='text/javascript'>
        var _glc =_glc || []; _glc.push('all_ag9zfmNsaWNrZGVza2NoYXRyDwsSBXVzZXJzGKfBmOkTDA');
        var glcpath = (('https:' == document.location.protocol) ? 'https://my.clickdesk.com/clickdesk-ui/browser/' : 
        'http://my.clickdesk.com/clickdesk-ui/browser/');
        var glcp = (('https:' == document.location.protocol) ? 'https://' : 'http://');
        var glcspt = document.createElement('script'); glcspt.type = 'text/javascript'; 
        glcspt.async = true; glcspt.src = glcpath + 'livechat-new.js';
        var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(glcspt, s);
    </script>
    <!-- End of ClickDesk -->
</body>




</html>