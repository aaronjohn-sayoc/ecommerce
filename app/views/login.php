<?php
$title = 'Crown Bakery - Login'
 ?>
<?php require_once '../partials/template.php'; ?>


<?php function get_page_content() { ?>

	<header id="hdr-image4" class="jumbotron jumbotron-fluid text-center m-0 p-0">
		<div class="container pt-5"></div>
		<div class="container pt-5"></div>
			<div class="container pt-5">
		   <h1 id="hdr-title" class="display-4 text-white">Login</h1>		
			</div>
	</header> <!-- end of header -->	
	
	<div class="container py-5">

		<form>
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
				<span class="validation"></span>
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
				<span class="validation"></span>
			</div>

		</form>
			<div class="text-center py-5">
				<button type="button" class="btn btn-outline-dark mx-1 btn-lg" id="login">Login</button>
				<a href="./register.php" class="btn btn-outline-dark mx-1 btn-lg">Register</a>
			</div>
	</div> <!-- end container -->

<?php } ?>