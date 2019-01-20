<?php
$title = 'Crown Bakery - New Item'
 ?>
<?php require_once '../partials/template.php'; ?>


<?php function get_page_content() { 

	if(isset($_SESSION['user']) && $_SESSION['user']['roles_id'] == 1) {
?>
<?php global $conn; ?>

	<header id="hdr-image9" class="jumbotron jumbotron-fluid text-center m-0 p-0">
		<div class="container pt-5"></div>
		<div class="container pt-5"></div>
			<div class="container pt-5">
		   <h1 id="hdr-title" class="display-4 text-white">Add Item</h1>		
			</div>
	</header> <!-- end of header -->

<main class="container py-5">
	<div class="row">
		<div class="col-sm-8 offset-sm-2">
			<form action="../controllers/process_add_item.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" name="name" id="name" required>
				</div>
				<div class="form-group">
					<label for="price">Price:</label>
					<input type="text" class="form-control" min="1" name="price" id="price" required>
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea type="text" class="form-control col-8" rows="5" name="description" id="description"></textarea>
				</div>
				<div class="form-group">
					<label for="categories">Category:</label>
					<select class="form-control col-8" name="category_id" id="categories" required>
						<?php 

						$sql = "SELECT * FROM categories";
						$categories = mysqli_query($conn, $sql);
						foreach($categories as $category) {
							//extract is another way of getting data. it transforms the columns into variables
							extract($category);
							echo "<option value='$id'>$name</option> ";
						}

						 ?>
					</select>
				</div>
				<div class="form-group">
					<label for="image" class="custom-file-upload">
					    <i class="fas fa-cloud-upload-alt"></i> Upload Image
					</label>
					<input id="image" name="image" type="file"/>
				</div>
				<button type="submit" class="btn btn-block btn-outline-dark mb-3">Add New Item</button>
			</form> <!-- end form -->
		</div> <!-- end 8 cols -->
	</div> <!-- end row -->
</main> <!-- end container -->

<?php } else {
	header('Location: ./error.php');
} ?>

<?php } ?>