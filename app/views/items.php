<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { 
	if(isset($_SESSION['user']) && $_SESSION['user']['roles_id'] == 1) {
		global $conn;
		?>

	<header id="hdr-image7" class="jumbotron jumbotron-fluid text-center m-0 p-0">
		<div class="container pt-5"></div>
			<div class="container pt-5">
		   <h1 id="hdr-title" class="display-4 text-white">Items</h1>		
			</div>
		<div class="container pt-5">
			<a href="./new_item.php" class="btn btn-outline-light btn-lg mb-3">Add A New Item</a>
		</div>
	</header> <!-- end of header -->
		<div class="container">

			<?php 
			$sql = "SELECT * FROM items";
			$items = mysqli_query($conn, $sql);

			echo "<div class='row'>";
			foreach ($items as $item) {

				// var_dump($item);

			 ?>
				<div class="col-sm-3 py-3 my-3">
					<div class="card hvr-float h-100">
						<img src="<?php echo $item['image_path']; ?>" class="card-img-top img-fluid hvr-grow">
						<div class="card-body text-white">
							<h4 class="card-title"> <?php echo $item['name']; ?></h4>
							<p class="card-text"><?php echo $item['description']; ?></p>
							<p class="card-text"> Price: <?php echo $item['price']; ?></p>

							<input type="hidden" value="<?php echo $item['id']; ?>">
						</div> <!-- end card body -->

						<div class="card-footer">
							<a href="./edit_item.php?id=<?php echo $item['id']; ?>" class="btn btn-outline-light btn-lg mx-1 my-3"> Edit Item</a>
							<a href="../controllers/delete_item.php?id=<?php echo $item['id']; ?>" class="btn btn-outline-light btn-lg mx-1 my-3"> Delete Item</a>
						</div>

					</div>
				</div> <!-- end of cols -->
			<?php }; ?>
			</div> <!-- end of row -->
		</div><!--  end container -->

<?php } else {
	header('Location: ./error.php');
} ?>







<?php } ?>