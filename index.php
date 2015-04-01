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
				<h1>Title</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu
				</p>
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

	<div id="teamSection" class="container">
		<div class="team">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Team</h1>
				</div>
			</div>
			<div class="row sectionContent">
				<div class="col-md-4">
					<img src="img/member_1.jpg" class="img-circle member-photo" />
					<p>Jack Johnson</p>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru</p>
				</div>
				<div class="col-md-4">
					<img src="img/member_2.jpg" class="img-circle member-photo" />
					<p>Jack Johnson</p>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru</p>
				</div>
				<div class="col-md-4">
					<img src="img/member_3.jpg" class="img-circle member-photo" />
					<p>Jack Johnson</p>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru</p>
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
				<div class="col-md-6">
					<img src="img/about_image.jpg" class="img-rounded img-responsive" />
				</div>
				<div class="col-md-6">
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru</p>
				</div>
			</div>
		</div>
	</div>

	<!-- CATEGORY MODALS -->
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Test tubes</h4>
				</div>
				<div class="container col-md-12 category-modal">
					<div class="row product-row">
						<div class="col-md-4">
							<img src="img/product_1.jpg" class="product-image img-thumbnail img-responsive center-block"/>
						</div>
						<div class="col-md-7 center-block">
							<p>
								<h3>Description</h3>
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
								<h3>Description</h3>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
							</p>
						</div>
					</div>
					<div class="row product-row">
						<div class="col-md-4">
							<img src="img/product_3.jpg" class="product-image img-thumbnail img-responsive center-block"/>
						</div>
						<div class="col-md-7 center-block">
							<p>
								<h3>Description</h3>
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
					<p>
						Click an image to learn more about its products
					</p>
				</div>
			</div>
			<div class="row sectionContent">
				<div class="col-md-3 categoryImage">
					<a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><img src="img/category_1.jpg" class="img-responsive img-thumbnail center-block category-photo"/></a>
				</div>
				<div class="col-md-3 categoryImage">
					<img src="img/category_2.jpg" class="img-responsive img-thumbnail center-block category-photo"/>
				</div>
				<div class="col-md-3 categoryImage">
					<img src="img/category_3.jpg" class="img-responsive img-thumbnail center-block category-photo"/>
				</div>
				<div class="col-md-3 categoryImage">
					<img src="img/category_4.jpg" class="img-responsive img-thumbnail center-block category-photo"/>
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
						<h3 class="text-center">123 Sesame Street</h3>
					</div>
				</div>
			</div>
			<div class="row sectionContent">
				<div class="col-md-12 map-image">
					<img src="img/map.png">
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-10">
					<div id="errors""></div>
				</div>
			</div>
			
			<form name="frmContact" id="frmContact" method="post" action="">
				<div id="contactInput">
					<div class="row">
						<div class="col-md-6 text-center">
							<label for="fullName">Name</label>
							<input type="text" name="fullName" id="fullName" class="form-control" placeholder="Name"/>
						</div>
						<div class="col-md-6 text-center">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Email"/>
						</div>
					</div>
					<div class="row comment-div">
						<div class="col-md-offset-2 col-md-8">
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
	<footer></footer>
</body>
</html>