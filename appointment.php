<html>

<script type="text/javascript">
     function check()
            {
                if (document.getElementById('name').value==""
                 || document.getElementById('name').value==undefined)
                {

                    alert ("Please Enter a Username");
                    return false;
                    
                } else if (document.getElementById('email').value==""
                 || document.getElementById('email').value==undefined) {
                     alert ("Please Enter a Email ID");

                    return false;

                }else if (document.getElementById('phone').value==""
                 || document.getElementById('phone').value==undefined) {
                     alert ("Please Enter a Contact number");

                    return false;

                }else if (document.getElementById('services').value=="0") {
                     alert ("Please select type of service required");s
                    return false;

                }else if (document.getElementById('datepicker').value==""
                 || document.getElementById('datepicker').value==undefined) {
                     alert ("Please Select Date");

                    return false;

                } else {
                return true; 
              } 
}
</script>
<style type="text/css">
/* -------------------- Page Styles (not required) */
div { margin: 20px; }

/* -------------------- Select Box Styles: bavotasan.com Method (with special adaptations by ericrasch.com) */
/* -------------------- Source: http://bavotasan.com/2011/style-select-box-using-only-css/ */
.styled-select {
   background: url(http://i62.tinypic.com/15xvbd5.png) no-repeat 96% 0;
   height: 29px;
   overflow: hidden;
   width: 240px;
}

.styled-select select {
   background: transparent;
   border: none;
   font-size: 14px;
   height: 29px;
   padding: 5px; /* If you add too much padding here, the options won't show in IE */
   width: 268px;
}

.styled-select.slate {
   background: url(http://i62.tinypic.com/2e3ybe1.jpg) no-repeat right center;
   height: 34px;
   width: 240px;
}

.styled-select.slate select {
   border: 1px solid #ccc;
   font-size: 16px;
   height: 34px;
   width: 268px;
}

/* -------------------- Rounded Corners */
.rounded {
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
}

.semi-square {
   -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   border-radius: 5px;
}

/* -------------------- Colors: Background */
.slate   { background-color: #ddd; }
.green   { background-color: #779126; }
.blue    { background-color: #3b8ec2; }
.yellow  { background-color: #eec111; }
.black   { background-color: #000; }

/* -------------------- Colors: Text */
.slate select   { color: #000; }
.green select   { color: #fff; }
.blue select    { color: #fff; }
.yellow select  { color: #000; }
.black select   { color: #fff; }


/* -------------------- Select Box Styles: danielneumann.com Method */
/* -------------------- Source: http://danielneumann.com/blog/how-to-style-dropdown-with-css-only/ */
#mainselection select {
   border: 0;
   color: #616161;
   background: transparent;
   font-size: 15px;
   font-weight: bold;
   padding: 2px 10px;
   width: 378px;
   *width: 350px;
   *background: #000000;
   -webkit-appearance: none;
}

#mainselection {
   overflow:hidden;
   width:250px;
   -moz-border-radius: 9px 9px 9px 9px;
   -webkit-border-radius: 9px 9px 9px 9px;
   border-radius: 9px 9px 9px 9px;
   box-shadow: 1px 1px 11px #330033;
   background: #FF8F00 url("http://i62.tinypic.com/15xvbd5.png") no-repeat scroll 319px center;
}


/* -------------------- Select Box Styles: stackoverflow.com Method */
/* -------------------- Source: http://stackoverflow.com/a/5809186 */
select#soflow, select#soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
   margin: 20px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 300px;
}

select#soflow-color {
   color: #fff;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#779126, #779126 40%, #779126);
   background-color: #779126;
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   padding-left: 15px;
}</style>



<head id="Head1" runat="server">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>Life of Pet</title>

  <link rel="icon" type="image/gif" href="images/animated_favicon1.gif">
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
                    <img src="images/lifeofpet1.png" style="width:300px; height:150px;" alt="" class="loader-site spinner">
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
                                                         <img src="images/lifeofpet1.png" alt="Ova" style="width:290px; height:140px;"></a>
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

        <section class="section banner" style="background-image: url('images/blog_bg.jpg');" data-img-width="1688" data-img-height="470" data-diff="100">
        </section>
            <!-- end section -->

            <div class="page-title grey">
                <div class="container">
                    <div class="title-area pull-left">
                        <h2>Appointment Form <small>Get a premium appointment now!</small></h2>
                        <div class="bread">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
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
                                <form method="post" action="mail.php"> <!-- form -->

                                    <header class="form-header">
                                        <h3>Appointment Form</h3>
                                    </header>
                                    <div class="post-body-form text-center">
                                        <p>
                                          Thank you for visiting <b>Life Of Pet</b> <br>
                                           Kindly fill in the form completely, we will get back to you shortly .
                                        </p>
                                    </div>
                                    <fieldset class="row-fluid appoform">
                                        <div class="col-md-6">
                                            <label class="sr-only">Appointment Date</label>
                                            <input name="date" type="text" id="datepicker" placeholder="Appointment Date" class="form-control" />                                         
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label class="sr-only">Your name</label>
                                            
                                            <input id="name" type="text" name="name" placeholder="Your full name *" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="sr-only">Phone number</label>
                                            <input type="text" id="phone" name="phone" placeholder="Phone Number" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="sr-only">Email address</label>
                                            <input type="email" id="email" name="customerEmail" placeholder="Email address *" class="form-control">
                                          
                                        </div>
                                        <?php
                                              if(isset($_GET['rate'])){
                                                $rate = $_GET['rate'];
                                                if ($rate == 499) {
                                                  $str = "Vet On Call (Wellness)";
                                                } elseif ($rate == 599) {
                                                  $str = "Vet On Call (Illness)";
                                                } elseif ($rate == 1299) {
                                                  $str = "Vet On Call (Vaccination)";
                                                }
                                              ?>
                                          <div class="col-md-6">
                                            <label class="sr-only">Rate </label>
                                            
                                            <input id="rate" style="font-size:medium; font-style:oblique;" type="text" name="rate" placeholder="Rate" value= "Rate : <?php echo $rate; ?> /-" class="form-control" readonly>
                                        </div>

                                         
                                           
                                            <div class="col-md-6">
                                            <label class="sr-only">Service Type</label> 
                                            <input type="email" id="services" name="services"   value=" <?php echo $str; ?>" class="form-control" readonly>
                                          
</div>
                                            
                                        

                                       
                                       <?php  } else { 
                                        ?> 
                                         
                                   
                                         

                                            
                                          <div id="mainselection">
                                            <label class="sr-only">Select Service</label>
                                            <select CssClass="selectpicker" id="services" name="services">
                                                 <option value="0" selected>-- Select Service --</option>
                                                 <option value="Vet On Call (Illness)">Vet On Call (Illness)</option>
                                                 <option value="Vet On Call (Wellness)">Vet On Call (Wellness)</option>                                                
                                                 <option value="Vet On Call (Vaccination)">Vet On Call (Vaccination)</option>
                                                 <option value="Accessories">Accessories</option>
                                                 <option value="Grooming">Grooming</option>
                                                 <option value="Daily Walks">Daily Walks</option>
                                                 <option value="Adoption" >Adoption</option>
                                            </select>
                                        </div>
                                        <?php } ?>
                                            <div class="col-md-12" style="width: 100%; ">
                                              
                                                <input type="text" name="msg" style="height:30%;" id="msg" placeholder="Message" class="form-control">
                                               
                                               
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" style="width:20%;" id="add" class="btn btn-primary" value="Send Now" onclick="return check();">
                                                
                                            </div>
                                    </fieldset>
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


         
            <section class="callout-section dark-yellow">
                <div class="container">
                    <div class="row callout">
                        <div class="col-md-9">
                            <h3>Interested in our works and services?</h3>
                            <p class="lead">
                                <br>
                                Ask for on appointment / Refer Friends .
                            </p>
                        </div>

                        
                    </div>
                    <!-- end callout -->
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
        <script type="text/javascript">
            $(function () {
                $('.selectpicker').selectpicker();
                $("#datepicker").datepicker();
            });
        </script>

       
    </form>
    





</html>