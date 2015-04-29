<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head.php"); ?>
</head>
<body data-spy="scroll" data-target="#nss-navbar">
	<header>
		<?php include("includes/nav.php"); ?>
		<div class="jumbotron">
			<div class="container jumbotron-text">
				<div class="row">
					<div class="col-md-6">
						<img src="img/logo.png" class="img-responsive jumbotron-logo-image"/>
					</div>
					<div class="col-md-6">
						<h1>North Science Solutions</h1>
						<ul class="banner-unordered-list">
							<li>Diverse stock of laboratory supplies and consumables</li>
							<li>Complete solutions, competitive prices, and tailored to your needs</li>
							<li>Round the clock customer service</li>
						</ul>
					</div>
				</div>


			</div>
		</div>
	</header>

	<!-- Admin Modal -->
	<div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="Admin" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Admin Login</h4>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Login</button>
				</div>
			</div>
		</div>
	</div>

	<div id="aboutSection"></div>
		<div class="container">
			<div class="team">
				<div class="row">
					<h1 class="text-center">About</h1>
				</div>
			<div class="row sectionContent">
				<div class="col-md-3 col-xs-3">
					<img src="img/about_image4.jpg" class="img-rounded img-responsive center-block" />
				</div>
				<div class="col-md-9 col-xs-9">
					<div class="row">
						<div class="col-md-12">
							<p>Northern Science Solutions Ltd. (NSS) provides standard and custom made laboratory products, containers, medical devices, and consumable with a specific emphasis on complete solutions, competitive prices, and specifically tailored to the customer's needs.</p>
						</div>
						<div class="col-md-12">
							<h2>Our Mission</h2>
							<p>Northern Science Solutions Ltd. (NSS) provides standard and custom made laboratory products, containers, medical devices, and consumable with a specific emphasis on complete solutions, competitive prices, and specifically tailored to the customer's needs.</p>
						</div>
						<div class="col-md-12">
							<h2>Why NSS?</h2>
							<ul class="why-nss">
								<li>NSS offers a comprehensive line of custom made, top quality product tailored towards the customers' needs. This makes NSS the first company in Canada to offer custom tailored solutions.</li>
								<li>NSS offers competitive prices for our product.</li>
								<li>NSS is flexible; providing end-to-end solution to satisfy the customers' needs.</li>
								<li>NSS is customer focused; providing high quality, personal, and friendly service providing advice and support for all of our customers' requirements.</li>
								<li>NSS also offers fast delivery to the customers to meet their deadlines.</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="teamSection" class="container">
		<div class="team">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Presidents Message</h1>
				</div>
			</div>
			<div class="row sectionContent">
				<div class="col-md-6">
					<img src="img/member_1.jpg" class="img-circle member-photo" />
				</div>
				<div class="col-md-6">
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru</p>
				</div>
			</div>
		</div>
	</div>

	<!-- CATEGORY MODALS -->
	<!-- Laboratory equipment -->
	<div class="modal fade modal-laboratory-equipment" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Laboratory Equipment</h4>
				</div>
				<div class="container col-md-12 category-modal">
					<div class="row product-row">
						<div class="col-md-4">
							<img src="img/product_1.jpg" class="product-image img-thumbnail img-responsive center-block"/>
						</div>
						<div class="col-md-7 center-block">
							<p>
								<h4>Description</h4>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Laboratory supplies -->
	<div class="modal fade modal-laboratory-supplies" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Laboratory Supplies</h4>
				</div>
				<div class="container col-md-12 category-modal">
					<div class="row product-row">
						<div class="col-md-4">
							<img src="img/product_1.jpg" class="product-image img-thumbnail img-responsive center-block"/>
						</div>
						<div class="col-md-7 center-block">
							<p>
								<h4>Description</h4>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Apparel and personal protections -->
	<div class="modal fade modal-apparel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Apparel and personal protections</h4>
				</div>
				<div class="container col-md-12 category-modal">
					<div class="row product-row">
						<div class="col-md-4">
							<img src="img/product_1.jpg" class="product-image img-thumbnail img-responsive center-block"/>
						</div>
						<div class="col-md-7 center-block">
							<p>
								<h4>Lab coat</h4>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
							</p>
						</div>
					</div>
					<div class="row product-row">
						<div class="col-md-4">
							<img src="img/product_2.jpg" class="product-image img-thumbnail img-responsive center-block"/>
						</div>
						<div class="col-md-7 center-block">
							<p>
								<h4>Gloves</h4>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Customized solutions -->
	<div class="modal fade modal-customized-solutions" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Customized solutions</h4>
				</div>
				<div class="container col-md-12 category-modal">
					<div class="row product-row">
						<div class="col-md-4">
							<img src="img/product_1.jpg" class="product-image img-thumbnail img-responsive center-block"/>
						</div>
						<div class="col-md-7 center-block">
							<p>
								<h4>Description</h4>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
							</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<div id="categoriesSection" class="container">
		<div class="team">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Categories</h1>
					<p class="text-center">
						Click an image to learn more about its products
					</p>
				</div>
			</div>
			<div class="row sectionContent">
				<div class="col-md-3 categoryImage">
					<a href="" data-toggle="modal" data-target=".modal-laboratory-equipment"><img src="img/category_1.jpg" class="img-responsive img-thumbnail center-block category-photo"/></a>
				</div>
				<div class="col-md-3 categoryImage">
					<a href="" data-toggle="modal" data-target=".modal-laboratory-supplies"><img src="img/category_2.jpg" class="img-responsive img-thumbnail center-block category-photo"/></a>
				</div>
				<div class="col-md-3 categoryImage">
					<a href="" data-toggle="modal" data-target=".modal-apparel"><img src="img/category_3.jpg" class="img-responsive img-thumbnail center-block category-photo"/></a>
				</div>
				<div class="col-md-3 categoryImage">
					<a href="" data-toggle="modal" data-target=".modal-customized-solutions"><img src="img/category_4.jpg" class="img-responsive img-thumbnail center-block category-photo"/></a>
				</div>
			</div>
		</div>
	</div>

	<div id="newsSection" class="container">
		<div class="team">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">News</h1>
				</div>
			</div>
			<!-- News item 1 begin -->
			<div class="row">
				<div class="col-md-4 col-md-offset-4 news-section-image">
					<img src="img/news-image2.png" class="img-responsive img-rounded news-item-photo"/>
				</div>
			</div>
			<div class="row news-item-text news-item">
				<div class="col-md-10 col-md-offset-1 col-xs-12">
					<h2>News item heading</h2>
					<p>
					News item #1: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
					</p>
				</div>
			</div>
			<!-- News item 1 end -->
			<!-- News item 2 begin -->
			<div class="row news-section-image">
				<div class="col-md-4 col-md-offset-4">
					<img src="img/news-image2.png" class="img-responsive img-rounded news-item-photo"/>
				</div>
			</div>
			<div class="row news-item-text news-item">
				<div class="col-md-6 col-md-offset-1 col-xs-8">
					<p>
					<h2>News item heading</h2>
					News item #2: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
					</p>
				</div>
				<div class="col-md-4 news-section-image col-xs-4">
					<img src="img/news-image2.png" class="img-responsive img-circle "/>
				</div>
			</div>
			<!-- News item 2 end -->
		</div>
	</div>

	<div id="promotionsSection" class="container">
		<div class="team">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Promotions</h1>
				</div>
			</div>
			<!-- News item 1 begin -->
			<div class="row promotion-item">
				<div class="col-md-12 promotion-item-image col-xs-12">
					<img src="img/promotion-image.png" class="img-responsive img-rounded promotion-item-photo center-block"/>
				</div>
			</div>
			<div class="row promotion-item-text promotion-item">
				<div class="col-md-10 col-md-offset-1 col-xs-12">
					<h2>Promotion item heading</h2>
					<p>
					Promotion item #1: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
					</p>
				</div>
			</div>
			<!-- News item 1 end -->
			<!-- News item 2 begin -->
			<div class="row promotion-item-image promotion-item">
				<div class="col-md-6 col-md-offset-3">
					<img src="img/promotion-image.png" class="img-responsive img-rounded promotion-item-photo center-block"/>
				</div>
			</div>
			<div class="row promotion-item-text promotion-item">
				<div class="col-md-6 col-md-offset-1 col-xs-8">
					<p>
					<h2>Promotion item heading</h2>
					Promotion item #2: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
					</p>
				</div>
				<div class="col-md-4 promotion-item-image col-xs-4">
					<img src="img/news-image2.png" class="img-responsive img-circle"/>
				</div>
			</div>
			<!-- News item 2 end -->
		</div>
	</div>

	<div id="customerServiceSection" class="container">
		<div class="team">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Customer Service</h1>
				</div>
			</div>
			<div class="row customer-service-item">
				<div class="col-md-12">
					<h3>Shipping Policy</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
				</div>
			</div>
			<div class="row customer-service-item">
				<div class="col-md-12">
					<h3>Terms</h3>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
				</div>
			</div>
			<div class="row additional-concerns customer-service-item">
				<div class="col-md-12">
					<p>
						If you have any additional concerns, please use the contact form at the bottom of this page.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="servicesSection" class="container">
		<div class="team">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Services</h1>
				</div>
			</div>
			<div class="row services-item">
				<div class="col-md-4">
					<img src="img/marketing-services-image.png" class="img-responsive img-rounded services-image"/>
				</div>
				<div class="col-md-8">
					<div class="row services-text">
						<div class="col-md-12">
							<h2 class="services-header">Marketing services</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row services-item">
				<div class="col-md-4">
					<img src="img/consulting-services-image.png" class="img-responsive img-rounded services-image"/>
				</div>
				<div class="col-md-8">
					<div class="row services-text">
						<div class="col-md-12">
							<h2 class="services-header">Consulting services</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="contactSection" class="container">
		<div class="team">
			<div class="row">
				<div class="col-md-12">
					<div id="contactUsHeader">
						<h1 class="text-center">Contact us</h1>
						<h3 class="text-center">912 Gardenpath Pl, Kitchener, ON, N2N 3S3</h3>
					</div>
				</div>
			</div>
			<div class="row sectionContent">
				<div class="col-md-12 map-image">
					<img src="img/map.png">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-offset-2 col-md-8">
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert" id="errors"></div>
					</div>
				</div>
			</div>
			<div class="row frm-clear-top">
				<div class="col-md-12">
					<form name="frmContact" id="frmContact" method="post" action="" class="col-md-12">
						<div id="contactInput">
							<div class="row">
								<div class="col-md-offset-2 col-md-8 comment-input">
									<label for="fullName">Name</label>
									<br/>
									<input type="text" name="fullName" id="fullName" class="form-control" placeholder="Name"/>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-8 comment-input">
									<label for="email">Email</label>
									<br/>
									<input type="email" name="email" id="email" class="form-control" placeholder="Email"/>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-md-offset-2 col-md-6 comment-input">
									<label for="inquiryType">Inquiry type</label>
									<br/>
									<select name="inquiryType" class="form-control">
										<option value="" selected>General</option>
										<option value="">Product</option>
										<option value="">Shipping</option>
										<option value="">Sales</option>
										<option value="">Careers</option>
									</select>
								</div>
							</div>
							<div class="row comment-div">
								<div class="col-md-offset-2 col-md-8 comment-input">
									<label for="commentInput">Comments</label>
									<textarea id="commentInput" name="commentInput" class="form-control" rows="10" placeholder="Type message here"></textarea>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<input type="submit" class="btn btn-primary"/>
								</div>
								<div class="col-md-4"></div>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
	<footer>
	</footer>
</body>
</html>