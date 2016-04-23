<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="shopping.aspx.cs" Inherits="pet.shopping" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    

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
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/carousel.css">
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
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
				<div class="row-fluid">
					<div class="col-md-6 text-left">
						<p>
							<strong>Call us:</strong> +90 543 123 45 67 &nbsp;&nbsp;
							<strong>Email:</strong> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
						</p>
					</div><!-- end left -->
					<div class="col-md-6 text-right">
						<div class="social">
							<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>				
							<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
							<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
							<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
							<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
						</div><!-- end social -->
					</div><!-- end left -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end topbar -->

		<header class="header">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-12">
						<nav class="navbar navbar-default">
							<div class="container-fluid">
								<div class="navbar-table">
									<div class="navbar-cell tight">
										<div class="navbar-header">
											<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Ova"></a>
											<div>
												<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
													<span class="sr-only">Toggle navigation</span>
													<span class="fa fa-bars"></span>
												</button>
											</div>
										</div><!-- end navbar-header -->
									</div><!-- end navbar-cell -->

									<div class="navbar-cell stretch">
										<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
											<div class="navbar-cell">
												<ul class="nav navbar-nav navbar-right">
                                                    <li class="dropdown has-submenu">
                                                        <a href="Home.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home <span class="fa fa-angle-down"></span></a>
                                                        
                                                    </li>
					                                <li><a href="vets.html">Our Vets</a></li>
													<li class="dropdown has-submenu">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features <span class="fa fa-angle-down"></span></a>
														<ul class="dropdown-menu start-left" role="menu">
															<li><a href="services.html">Our Services</a></li>
															<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog Pages <span class="fa fa-angle-right"></span></a>
																<ul class="dropdown-menu show-left" role="menu">
																	<li><a href="blog.html">Blog Default</a></li>
																	<li><a href="blog-1.html">Blog Fullwidth</a></li>
																	<li><a href="blog-single-1.html">Blog Single</a></li>
																	<li><a href="blog-single-2.html">Blog Single Alt</a></li>
																</ul>
															</li>
															<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shop Pages <span class="fa fa-angle-right"></span></a>
																<ul class="dropdown-menu show-left" role="menu">
																	<li><a href="shop.html">Shop Page</a></li>
																	<li><a href="shop-single.html">Shop Single</a></li>
																	<li><a href="shop-checkout.html">Shop Checkout</a></li>
																	<li><a href="shop-cart.html">Shopping Cart</a></li>
																</ul>
															</li>
															<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gallery Pages <span class="fa fa-angle-right"></span></a>
																<ul class="dropdown-menu show-left" role="menu">
																	<li><a href="gallery-1.html">Gallery One</a></li>
																	<li><a href="gallery-2.html">Gallery Two</a></li>
																	<li><a href="gallery-3.html">Gallery Three</a></li>
																	<li><a href="gallery-4.html">Gallery Masonry</a></li>
																	<li><a href="gallery-single.html">Gallery Single</a></li>
																</ul>
															</li>
															<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Other Pages <span class="fa fa-angle-right"></span></a>
																<ul class="dropdown-menu show-left" role="menu">
																	<li><a href="maintenance.html">Maintenance</a></li>
																	<li><a href="404.html">Not Found (404)</a></li>
																	<li><a href="page-sidebar.html">Page Sidebar</a></li>
																	<li><a href="page-fullwidth.html">Page Fullwidth</a></li>
																	<li><a href="page-sitemap.html">Sitemap</a></li>
																</ul>
															</li>
															<li><a href="pricing.html">Pricing & Plans</a></li>
															<li><a href="testimonials.html">Testimonials</a></li>
															<li><a href="shortcodes.html">Shortcodes</a></li>
															<li><a href="typography.html">Typography</a></li>
														</ul>
													</li>
					                                <li><a href="gallery-1.html">Gallery</a></li>
					                                <li><a class="active" href="shop.html">Shop</a></li>
					                                <li><a href="blog.html">Blog</a></li>
					                                <li><a href="appointment.html">Appointment</a></li>
					                                <li><a href="contact.html">Contact</a></li>
												</ul>
											</div><!-- end navbar-cell -->
										</div><!-- /.navbar-collapse -->        
									</div><!-- end navbar cell -->
								</div><!-- end navbar-table -->
							</div><!-- end container fluid -->
						</nav><!-- end navbar -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</header>

        <div class="page-title grey">
            <div class="container">
                <div class="title-area pull-left">
                    <h2>Shop <small>Best pet supplies, materials and eats</small></h2>
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Shop</li>
                        </ol>
                    </div><!-- end bread -->
                </div><!-- /.pull-right -->
                <!--<div class="search pull-right">
                    <form>
                        <div class="input-group">
                            <input class="form-control" name="s" type="search" placeholder=" Search... ">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>--><!-- /.pull-right -->
                <!--<div class="pull-right">
						<select class="selectpicker" data-style="btn-primary">
							<option value="menu_order" >Default sorting</option>
							<option value="popularity" >Sort by popularity</option>
							<option value="rating" >Sort by average rating</option>
							<option value="date" >Sort by newness</option>
							<option value="price" >Sort by price: low to high</option>
							<option value="price-desc" >Sort by price: high to low</option>	
						</select>   
                        
                             
	                </div>-->
                <!--<nav class="pull-right">
					<ul class="pagination">
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</nav>-->
                <div class="pull-right">
												<ul class="nav navbar-nav navbar-right">
                                                    
					                                <li><a href="vets.html">Dry Dog Food</a></li>
													
					                                <li><a href="gallery-1.html">Canned Dog Food</a></li>
					                                <li><a class="active" href="shop.html">Prescription Dog Food</a></li>
					                                <li><a href="blog.html">Weaning Food</a></li>
					                                <li><a href="appointment.html">Food Toppings</a></li>
					                                
												</ul>
											</div>
            </div>
        </div><!-- end page-title -->

         <section class="section white" style="padding: 25px 0;">
        	<div class="container">

        		<div class="shop-top clearfix">
	                <div class="title-area pull-left">
	                    <p>Dry Dog Food</p>
	                </div><!-- /.pull-right -->
	                <div class="pull-right">
						<!--<select class="selectpicker" data-style="btn-primary">
							<option value="menu_order" >Default sorting</option>
							<option value="popularity" >Sort by popularity</option>
							<option value="rating" >Sort by average rating</option>
							<option value="date" >Sort by newness</option>
							<option value="price" >Sort by price: low to high</option>
							<option value="price-desc" >Sort by price: high to low</option>	
						</select>  --> 
                        
                        <a href="#" class="btn btn-primary">View All</a>       
	                </div><!-- /.pull-right -->
        		</div><!-- end shop top -->
                
                <div class="row module-wrapper shop-layout text-center">
                    
					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">
                        	<asp:DataList ID="DataList_category" runat="server" RepeatColumns="3" RepeatDirection="Horizontal"
                                                    OnItemCommand="DataList_category_ItemCommand">
                                                    <ItemTemplate>
						<div class="img-wrap">
							<figure>
								<%--<img alt="" src="images/shop/shop_01.jpg" class="img-responsive">--%>
                                <a href="Items Aspx/Items.aspx?itemname=<%# Eval("ItemCode") %>" title="" class="img-responsive">
                                                                <asp:Image ID="Image1" runat="server" ImageUrl='<%# Eval("ItemImage") %>'  />
                                                            </a>
								<figcaption>
									<p><strong>
                                        <asp:Label ID="lbl_specialproduct_mrpprice" runat="server" Text='<%# Eval("ItemPrice") %>'></asp:Label>
									   </strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><%--<a href="shop-single.html" title="">Royal Canin Veterinary Diet Dog Cardiac - 2 Kg
						    </a>--%>
                            <a href="Items Aspx/Items.aspx?itemname=<%# Eval("ItemCode") %>" title="">
                                                                        <asp:Label ID="lbl_productname" runat="server" Text='<%# Eval("ItemName") %>' CssClass="lbl_itemname"></asp:Label>
                                                                    </a>
						</h4>
                            </ItemTemplate>
                                                </asp:DataList>
                        <%--<asp:DataList ID="DataList_category" runat="server" RepeatColumns="3" RepeatDirection="Horizontal"
                                                    OnItemCommand="DataList_category_ItemCommand">
                                                    <ItemTemplate>
                                                        <div class="img-wrap">
                                                            <a href="Items Aspx/Items.aspx?itemname=<%# Eval("ItemCode") %>" title="" class="img-responsive">
                                                                <asp:Image ID="Image1" runat="server" ImageUrl='<%# Eval("ItemImage") %>' Height="180px"
                                                                    Width="270px" />
                                                            </a>
                                                            <div class="product-shop">
                                                                <h2 class="product-name">
                                                                    <a href="Items Aspx/Items.aspx?itemname=<%# Eval("Itemcode") %>" title="">
                                                                        <asp:Label ID="lbl_productname" runat="server" Text='<%# Eval("Itemname") %>' CssClass="lbl_itemname"></asp:Label>
                                                                    </a>
                                                                </h2>
                                                                 <div class="desc_grid">
                                                                    <asp:Label ID="lbl_productdesc" runat="server" Text='<%# Eval("Itemshortdesc") %>' CssClass="lbl_itemdesc"></asp:Label>
                                                                </div>
                                                                <div class="price-box">
                                                                    <p class="old-price">
                                                                        <span class="price-label"></span><span class="price">
                                                                            <asp:Label ID="lbl_specialproduct_mrpprice" runat="server" Text='<%# Eval("Itemmrpprice") %>'></asp:Label>
                                                                        </span>
                                                                        <asp:Label ID="Label2" runat="server" Text='<%# "Discount "+Eval("ItemDiscount")+"%" %>'
                                                                            CssClass="lbl_itemdesc"></asp:Label>
                                                                    </p>
                                                                    <span class="regular-price" id="product-price-1"><span class="price">
                                                                        <asp:Label ID="lbl_catprice" runat="server" Text='<%# "Rs."+ Eval("ItemPrice") %>'></asp:Label></span>
                                                                    </span>
                                                                </div>
                                                                <div class="actions">
                                                                    <asp:Button ID="but_cat_addcart" runat="server" Text="Add to cart" CssClass="butt"
                                                                        CommandName="ADDCART" CommandArgument='<%# Eval("ItemId")%>' />
                                                                </div>
                                                                  <ul class="add-to-links">
                                                                    <li>
                                                                        <asp:LinkButton ID="lnl_cat_wishlist" runat="server" CssClass="link-wishlist" CommandName="WishList"
                                                                            CommandArgument='<%# Eval("Itemcode") %>'>
                                                                            <asp:Label ID="lbl_cat_addwishlist" runat="server" Text="<%$ Resources:bslcart,bslcart_category_wishlist %>"></asp:Label></asp:LinkButton>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                              <div class="label-product">
                                                                <span class="new">New</span>
                                                            </div>
                                                        </div>
                                                    </ItemTemplate>
                                                </asp:DataList>--%>


						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_02.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.2,386.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Royal Canin Giant Adult - 4 Kg With JerHigh Carrot Stick Dog Treats</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_03.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.2,460.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Royal Canin Maxi Mature - 4 Kg With JerHigh Milk Stick Dog Treats</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_04.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.3,800.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Royal Canin Giant Adult - 4 Kg With Ergocomfort Dog Collar XLarge-Black</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</div>
                    
                    

                </div><!-- end row -->

				<hr class="invis">

				<!--<nav class="pagi clearfix text-center">
					<ul class="pagination">
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</nav>-->
        	</div><!-- end container -->
        </section><!-- end section -->

        <section class="section white" style="padding: 25px 0;">
        	<div class="container">

        		<div class="shop-top clearfix">
	                <div class="title-area pull-left">
	                    <p>Canned Dog Food</p>
	                </div><!-- /.pull-right -->
	                <div class="pull-right">
                        <a href="#" class="btn btn-primary">View All</a> 
						<!--<select class="selectpicker" data-style="btn-primary">
							<!--<option value="menu_order" >Default sorting</option>
							<option value="popularity" >Sort by popularity</option>
							<option value="rating" >Sort by average rating</option>
							<option value="date" >Sort by newness</option>
							<option value="price" >Sort by price: low to high</option>
							<option value="price-desc" >Sort by price: high to low</option>	
						</select>-->           
	                </div><!-- /.pull-right -->
        		</div><!-- end shop top -->
                
                <div class="row module-wrapper shop-layout text-center">
                    
					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_01.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.390.00 </strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Pedigree Dog Can with Chicken in Jelly 400gms.</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_02.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.240.00 </strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Royal Canin mini Adult Beauty can food 195gms.</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_03.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.250.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Royal Canin mini Junior Beauty can food 195gms.</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_04.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.220.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Hills science plan puppy chicken can food 369 Gms.</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</div>
                    
                    

                </div><!-- end row -->

				<hr class="invis">

				<!--<nav class="pagi clearfix text-center">
					<ul class="pagination">
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</nav>-->
        	</div><!-- end container -->
        </section>

        <section class="section white" style="padding: 25px 0;">
        	<div class="container">

        		<div class="shop-top clearfix">
	                <div class="title-area pull-left">
	                    <p>Prescription Dog Food</p>
	                </div><!-- /.pull-right -->
	                <div class="pull-right">
                        <a href="#" class="btn btn-primary">View All</a> 
						<!--<select class="selectpicker" data-style="btn-primary">
							<!--<option value="menu_order" >Default sorting</option>
							<option value="popularity" >Sort by popularity</option>
							<option value="rating" >Sort by average rating</option>
							<option value="date" >Sort by newness</option>
							<option value="price" >Sort by price: low to high</option>
							<option value="price-desc" >Sort by price: high to low</option>	
						</select>-->           
	                </div><!-- /.pull-right -->
        		</div><!-- end shop top -->
                
                <div class="row module-wrapper shop-layout text-center">
                    
					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_01.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.1290.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Royal Canin Veterinary Diet Dog Cardiac - 2 Kg</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_02.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.3770.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Royal Canin Veterinary Diet Hepatic - 6 Kg</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_03.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.1000.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Royal Canin Veterinary Diet Hepatic - 1 Kg</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_04.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.990.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Royal Canin Veterinary Diet Intestinal Low Fat - 1.5 Kg</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</div>
                    
                    

                </div><!-- end row -->

				<hr class="invis">

				<!--<nav class="pagi clearfix text-center">
					<ul class="pagination">
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</nav>-->
        	</div><!-- end container -->
        </section>

        <section class="section white" style="padding: 25px 0;">
        	<div class="container">

        		<div class="shop-top clearfix">
	                <div class="title-area pull-left">
	                    <p>Weaning Food</p>
	                </div><!-- /.pull-right -->
	                <div class="pull-right">
                        <a href="#" class="btn btn-primary">View All</a> 
						     
	                </div><!-- /.pull-right -->
        		</div><!-- end shop top -->
                
                <div class="row module-wrapper shop-layout text-center">
                    
					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_01.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.675.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Lactol Puppy Milk Beaphar 250 Gm</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_02.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.2650.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">PetAg Esbilac Milk Replacer Powder For Puppies - 340 gm</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_03.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.230.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Vetoquinol Samolac Weaning Food - 400 gm</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_04.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.1380.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Royal Canin Baby Dog Milk For Puppies - 400 Gms</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</div>
                    
                    

                </div><!-- end row -->

				<hr class="invis">

				<!--<nav class="pagi clearfix text-center">
					<ul class="pagination">
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</nav>-->
        	</div><!-- end container -->
        </section>

        <section class="section white" style="padding: 25px 0;">
        	<div class="container">

        		<div class="shop-top clearfix">
	                <div class="title-area pull-left">
	                    <p>Food Toppings</p>
	                </div><!-- /.pull-right -->
	                <div class="pull-right">
                        <a href="#" class="btn btn-primary">View All</a> 
						<!--<select class="selectpicker" data-style="btn-primary">
							<!--<option value="menu_order" >Default sorting</option>
							<option value="popularity" >Sort by popularity</option>
							<option value="rating" >Sort by average rating</option>
							<option value="date" >Sort by newness</option>
							<option value="price" >Sort by price: low to high</option>
							<option value="price-desc" >Sort by price: high to low</option>	
						</select>-->           
	                </div><!-- /.pull-right -->
        		</div><!-- end shop top -->
                
                <div class="row module-wrapper shop-layout text-center">
                    
					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_01.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.450.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Pedigree Dog Treat Puppy Chicken & Rice - 80 gm (15 pieces)</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_02.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.450.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Pedigree Dog Treat Adult Pouch Chicken & Liver Chunks - 80 gm (15 pieces)</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_03.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.342.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Kennel Kitchen Puppy Small Breed Chicken Cassrole - 300 gm (Pack Of 6)</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 wdtShop grid cs-style-3">	
						<div class="img-wrap">
							<figure>
								<img alt="" src="images/shop/shop_04.jpg" class="img-responsive">
								<figcaption>
									<p><strong>Rs.400.00</strong></p>
									<a class="blogging" title="Add to Cart" href="shop-single.html"><i class="fa fa-shopping-cart"></i></a>
								</figcaption>
							</figure>
						</div>
						<h4><a href="shop-single.html" title="">Doggy Day Chicken & Veg Mix - 300 gm (Pack Of 5)</a></h4>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</div>
                    
                    

                </div><!-- end row -->

				<hr class="invis">

				<!--<nav class="pagi clearfix text-center">
					<ul class="pagination">
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</nav>-->
        	</div><!-- end container -->
        </section>

        <footer class="footer dark">
        	<div class="container">
        		<div class="row module-wrapper">
	        		<div class="col-md-4 col-sm-6">
	        			<div class="widget">
	        				<div class="text-center">
							<img src="images/flogo.png" alt="" class="img-responsive">
							<p>Lorem iam nonummy nibh euismod tincidunt ut laoreet dolore Lorem ipsum dolor sit amet.</p>
							<div class="social">
								<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>				
								<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
								<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
								<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Github"><i class="fa fa-github"></i></a>
								<a href="#" data-tooltip="tooltip" data-placement="bottom" title="MaxCDN"><i class="fa fa-maxcdn"></i></a>
								<a href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
							</div>
							</div>
						</div>
	        		</div><!-- end col -->
	        		<div class="col-md-4 col-sm-6">
	        			<div class="widget">
	        				<div class="widget-title">
	        					<h4>Contact Details</h4>
	        				</div>
	        				<ul>
	        					<li><i class="fa fa-link"></i> www.yoursite.com</li>
	        					<li><i class="fa fa-envelope"></i> info@yoursite.com</li>
	        					<li><i class="fa fa-phone"></i> +90 123 45 67</li>
	        					<li><i class="fa fa-fax"></i> +90 123 45 68</li>
	        					<li><i class="fa fa-home"></i> Envato INC 22 Elizabeth Str 8777.</li>
	        				</ul>
	        			</div><!-- end widget -->
	        		</div><!-- end col -->

	        		<div class="col-md-4 col-sm-6">
	        			<div class="widget">
	        				<div class="widget-title">
	        					<h4>Useful Links</h4>
	        				</div>
	        				<ul>
								<li><a href="index.html">Default Version</a></li>
								<li><a href="index-alt.html">Home Alternative</a></li>
								<li><a href="index-boxed.html">Boxed Version</a></li>
								<li><a href="vets.html">Our Vets</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="services.html">Our Services</a></li>
								<li><a href="contact.html">Get In Touch</a></li>
	        				</ul>
	        			</div><!-- end widget -->
	        		</div><!-- end col -->
        		</div><!-- end row -->
        	</div><!-- end container -->
        </footer><!-- end footer -->
        
        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <p>© 2015 PetVet Pty Ltd. by <a href="#">Template Visual</a></p>
                    </div><!-- end col -->
                    <div class="col-md-6 text-right">
                        <ul class="list-inline">
                            <li><a href="#">Terms of Usage</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
    </div><!-- end wrapper -->

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/retina.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/jquery.simple-text-rotator.js"></script>
	<script src="js/parallax.js"></script>
    <script src="js/touch.js"></script>
    <script src="js/carousel.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/bootstrap-select.js"></script>
	<script type="text/javascript">
	    $('.selectpicker').selectpicker();
	</script>

    </div>
    </form>
</body>
</html>
