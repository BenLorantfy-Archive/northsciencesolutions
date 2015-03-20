<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head.php"); ?>
</head>
<body>
	<header>
		<?php include("includes/nav.php"); ?>
		<div class="jumbotron"></div>
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
					<img src="img/homer.png" />
					<p>Jack Johnson</p>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru</p>
				</div>
				<div class="col-md-4">
					<img src="img/homer.png" />
					<p>Jack Johnson</p>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru</p>
				</div>
				<div class="col-md-4">
					<img src="img/homer.png" />
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
					<img src="img/homer.png" />
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
					<h4 class="modal-title">Category title</h4>
				</div>
				<img src="img/homer.png" class=""/>
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
				</div>
			</div>
			<div class="row sectionContent">
				<div class="col-md-3 categoryImage">
					<a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><img src="img/homer.png" class="img-responsive col-md-12 center-block"/></a>
				</div>
				<div class="col-md-3 categoryImage">
					<img src="img/homer.png" class="img-responsive col-md-12 center-block"/>
				</div>
				<div class="col-md-3 categoryImage">
					<img src="img/homer.png" class="img-responsive col-md-12 center-block"/>
				</div>
				<div class="col-md-3 categoryImage">
					<img src="img/homer.png" class="img-responsive col-md-12 center-block"/>
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
				<div class="col-md-12">
					<img src="http://xocai.xocaistore.com/media/wysiwyg/Xocai/InfoPages/group_of_scientists.jpg">
				</div>
			</div>
			<form>
				<div id="contactInput">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<input class="form-control" placeholder="Name"/>
							<input class="form-control" placeholder="Email"/>
						</div>
	
						<div class="col-md-1"></div>
					</div>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<textarea id="commentInput" class="form-control" rows="10" placeholder="Type message here"></textarea>
						</div>
						<div class="col-md-1"></div>
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