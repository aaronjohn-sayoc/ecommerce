<?php
$title = 'Crown Bakery - Users'
 ?>
<?php require_once '../partials/template.php'; ?>


<?php function get_page_content() { 

if(isset($_SESSION['user']) && $_SESSION['user']['roles_id'] == 1) {

global $conn;
?>

	<header id="hdr-image11" class="jumbotron jumbotron-fluid text-center m-0 p-0">
		<div class="container pt-5"></div>
		<div class="container pt-5"></div>
			<div class="container pt-5">
		   <h1 id="hdr-title" class="display-4 text-white">Users</h1>		
			</div>
	</header> <!-- end of header -->	

	<main class="container">
		<div class="row">
			<figure class="col-sm-10 offset-sm-1">
				<table class="table table-responsive table-striped">
					<thead>
						<tr class="text-center">
							<th>Username</th>
							<th colspan="2">First Name</th>
							<th colspan="2">Last Name</th>
							<th>Email</th>
							<th>Role</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$get_user_detail_query = "SELECT u.id, u.username, u.firstname, u.lastname, u.email, r.name AS role FROM users u JOIN roles r ON (u.roles_id = r.id); ";
						$user_details = mysqli_query($conn, $get_user_detail_query);
						foreach ($user_details as $indiv_user) {
								// var_export($indiv_user);
						 ?>
						 <tr>
						 	<td><?php echo $indiv_user['username']; ?></td>
						 	<td colspan="2"><?php echo $indiv_user['firstname']; ?></td>
						 	<td colspan="2"><?php echo $indiv_user['lastname']; ?></td>
						 	<td><?php echo $indiv_user['email']; ?></td>
						 	<td><?php echo $indiv_user['role']; ?></td>
						 	<td>
						 		<?php 
						 		$id = $indiv_user['id'];
						 		if($indiv_user['role'] =="admin"){
						 			echo "<a href='../controllers/grant_admin.php?id=$id' class='btn btn-lg btn-outline-dark'> Revoke Admin </a>";
						 		}  else {
					 				echo "<a href='../controllers/grant_admin.php?id=$id' class='btn btn-lg btn-outline-dark'> Make Admin </a>";
						 		}
						 		 ?>
						 	</td>
						 </tr>
						<?php }; ?>
					</tbody>
				</table>

			</figure> <!-- end cols -->
		</div> <!-- end row -->
	</main><!--  end container -->







<?php } else {
	header('location: ./error.php');
} ?>

<?php } ?>