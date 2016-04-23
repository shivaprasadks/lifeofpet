<%@ Import Namespace="System.Web.Mail"%>

<head id="Head1" runat="server">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>PetVet | A Pet Shop Responsive HTML Template</title>

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
    <form id="form1" runat="server">
        <div>

            <div id="loader">
                <div class="loader-container">
                    <img src="images/load.png" alt="" class="loader-site spinner">
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
                                                        <img src="images/logo.png" alt="Ova"></a>
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
                                                                <a href="Home.html" role="button" aria-expanded="false">Home </a>

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
                                                            <li><a href="appointment.aspx">Appointment</a></li>
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
                            <asp:Label ID="lblMsg" runat="server"></asp:Label>
                            <div class="appoform-wrapper">
                                <form method="post">

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
                                            <label class="sr-only">Appointment time</label>
                                            <%--<input id="datepicker" type="text" placeholder="Appointment time" class="form-control">--%>
                                         
                                            <input  ID="datepicker" runat="server" name="name" placeholder="Appointment Date" value="" CssClass="form-control" >
                                        </div>
                                        <div class="col-md-6">
                                            <label class="sr-only">Your name</label>
                                            <input type="text" name="name">
                                            <%--<input type="text" placeholder="Your full name *" class="form-control">--%>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="sr-only">Phone number</label>
                                            <input type="text" name="phone">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="sr-only">Email address</label>
                                            <%--<input type="email" placeholder="Email address *" class="form-control">--%>
                                           <input type="text" name="customerEmail">
                                        </div>
                                   
                                         

                                            <label class="sr-only">Select Service</label>

                                            <asp:DropDownList ID="ddlservice" runat="server" CssClass="selectpicker">
                                                <asp:ListItem Text="-- Select Service --" Value="0"></asp:ListItem>
                                                <asp:ListItem Text="Vet On Call (Illness)" Value="1"></asp:ListItem>
                                                 <asp:ListItem Text="Vet On Call (Wellness)" Value="2"></asp:ListItem>
                                                 <asp:ListItem Text="Vet On Call (Vaccination)" Value="3"></asp:ListItem>
                                                <asp:ListItem Text="Accessories" Value="4"></asp:ListItem>
                                                <asp:ListItem Text="Grooming" Value="5"></asp:ListItem>
                                                <asp:ListItem Text="Training" Value="6"></asp:ListItem>
                                                <asp:ListItem Text="Daily Walks" Value="7"></asp:ListItem>
                                                <asp:ListItem Text="Adoption" Value="8"></asp:ListItem>
                                            </asp:DropDownList>

                                            <div class="col-md-12" style="width: 190%;">
                                                <%--<textarea placeholder="Add extra notes" class="form-control"> 
										</textarea>--%>
                                                <asp:TextBox ID="txtmessage" runat="server" name="message" placeholder="Message" value="" TextMode="MultiLine" CssClass="form-control" />
                                                <asp:RequiredFieldValidator ID="rfvmessage" runat="server"
                                                    ControlToValidate="txtmessage"
                                                    ErrorMessage="enter message" ForeColor="Red" Display="Dynamic" ValidationGroup="save"></asp:RequiredFieldValidator>
                                            </div>
                                            <div class="col-md-12">
                                                <%--<button type="reset" class="btn btn-primary btn-block btn-lg">Send Now</button>--%>
                                                <input type="submit" value="Submit">
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
                                    <img src="images/flogo.png" alt="" class="img-responsive">
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
    

<form method=get>
   <p>To: <input type="text" name="to"></p>
   <p>How many emails? <input type="text" name="loops" value="1"></p>
   <input type="submit" value="Submit">
</form>
<%
   dim MailTo
   dim MailFrom
   dim NumberOfMails
   dim i
   i = 1
   MailTo = request("to")
   MailFrom = request("from")
   NumberOfMails = Convert.ToInt16(request("loops"))
   if MailTo <> "" then
   For i = 1 to NumberOfMails
      Dim objMail As New System.Web.Mail.MailMessage()
      objMail.From = MailTo
      objMail.To = MailTo
      objMail.Subject = "Test email " & i
      objMail.BodyFormat = MailFormat.Html 'MailFormat.Text to send plain text email
      objMail.Priority = MailPriority.High
      objMail.Body =   "This test email was sent at: " & Now()
      
      System.Web.Mail.SmtpMail.SmtpServer = "relay-hosting.secureserver.net"
      System.Web.Mail.SmtpMail.Send(objMail)
      objMail = Nothing
   Next i
   response.write("mail sent")
   end if
%>








  


