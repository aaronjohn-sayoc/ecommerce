<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { 
	global $conn;  ?>

	<header id="hdr-image5" class="jumbotron jumbotron-fluid text-center m-0 p-0">
		<div class="container pt-5"></div>
		<div class="container pt-5"></div>
			<div class="container pt-5">
		   <h1 id="hdr-title" class="display-4 text-white">Register</h1>		
			</div>
	</header> <!-- end of header -->

	<div class="container py-5">

		<form>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="firstname">First Name:</label>
						<input type="text" id="firstname" class="form-control" name="firstname" placeholder="Enter your first name here">
						<span class="validation"></span>
					</div>

					<div class="form-group">
						<label for="lastname">Last Name:</label>
						<input type="text" id="lastname" class="form-control" name="lastname" placeholder="Enter your last name here">
						<span class="validation"></span>
					</div>

					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" id="email" class="form-control" name="email" placeholder="Enter your email here">
						<span class="validation"></span>
					</div>

					<div class="form-group mb-5">
						<label for="address">Address:</label>
						<input type="text" id="address" class="form-control" name="address" placeholder="Enter your address here">
						<span class="validation"></span>
					</div>
				</div> <!-- end left side -->

				<div class="col-sm-6">
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" id="username" class="form-control" name="username" placeholder="Enter your username here">
						<span class="validation"></span>
					</div>					

					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" id="password" class="form-control" name="password" placeholder="Enter your password here">
						<span class="validation"></span>
					</div>					

					<div class="form-group">
						<label for="confirm_password">Confirm Password:</label>
						<input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="Enter your confirm_password here">
						<span class="validation"></span>
					</div>	
				</div> <!-- end right side -->
			</div> <!-- end row -->
		</form> <!-- end form -->
		
		<div class="text-center py-4 mb-5">
			<a href="./login.php" class="btn btn-outline-dark btn-lg mx-1"> Login </a>
			<button id="add_user" type="button" class="btn btn-outline-dark btn-lg mx-1">Register</button>
		</div>


	</div> <!-- end container -->



<?php } ?>