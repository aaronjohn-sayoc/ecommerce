<?php require_once '../partials/template.php'; ?>

<?php
$title = 'Crown Bakery - Edit Item'
 ?>

<?php function get_page_content() { 

	if(isset($_SESSION['user']) && $_SESSION['user']['roles_id'] == 1) {

	global $conn;
?>
	<?php 
	$item_id = $_GET['id'];
	$sql = "SELECT * FROM items WHERE id='$item_id' ";
	$result = mysqli_query($conn, $sql);
	$item = mysqli_fetch_assoc($result);
	// var_dump($item);
	?>

	<header id="hdr-image8" class="jumbotron jumbotron-fluid text-center m-0 p-0">
		<div class="container pt-5"></div>
		<div class="container pt-5"></div>
			<div class="container pt-5">
		   <h1 id="hdr-title" class="display-4 text-white">Edit Item</h1>		
			</div>
	</header> <!-- end of header -->

	<div class="container py-3">
		<div class="row">
			<div class="col-sm-8 offset-sm-2">
				<form action="../controllers/process_edit_item.php" method="POST">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" value="<?php echo $item['name']; ?>" required>
					</div>

					<div class="form-group">
						<label for="price">Price:</label>
						<input type="text" class="form-control" name="price" value="<?php echo $item['price']; ?>" required>
					</div>


					<div class="form-group">
						<label for="description">Description:</label>
						<textarea class="form-control col-8" name="description" id="description" rows="5"><?php echo $item['description']; ?></textarea>
					</div>

					<div class="form-group">
						<label for="categories">Categories</label>
						<select class="form-control col-8" name="category_id" id="category" required>
							<?php 
							$sql = "SELECT * FROM categories";
							$categories = mysqli_query($conn, $sql);
							foreach ($categories as $category) {
								extract($category);

								//ternary operator
								$selected = $item['category_id'] == $id ? 'selected': '';
								echo "<option value='$id' $selected>$name</option>";
							}

							 ?>
						</select>
					</div>

					<input type="hidden" name="id" value="<?php echo $item['id']; ?>">
					<button type="submit" class="btn btn-outline-dark">Update Changes</button>
				</form> <!-- end edit form -->
			</div> <!-- end 8 cols -->
		</div> <!-- end row -->
	</div> <!-- end container -->

<?php } else {
	header('location: ./error.php');
} ?>

<?php } ?>