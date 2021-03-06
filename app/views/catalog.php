<?php
$title = 'Crown Bakery - Shop'
 ?>
<?php require_once '../partials/template.php'; ?>


<?php function get_page_content() { 

	if(!isset($_SESSION['user']) || (isset($_SESSION['user'])) && $_SESSION['user']['roles_id'] == 2) {
?>

<?php 
	require_once '../controllers/connect.php'; 
	global $conn; //refers to the $conn outside the function 
?>

	<header id="hdr-image2" class="jumbotron jumbotron-fluid text-center m-0 p-0">
		<div class="container pt-5"></div>
		<div class="container pt-5"></div>
			<div class="container pt-5">
		   <h1 id="hdr-title" class="display-4 text-white">Menu</h1>		
			</div>
	</header> <!-- end of header -->

<main class="container py-5">
	<div class="row">

		<!-- categories -->
		<div class="col-12">
			<!-- display categories -->
			<h2 class="py-3">Categories</h2>
			<ul class="list-group">
				<a href="catalog.php">
					<li class="list-group-item mb-1"> All </li>
				</a>

				<?php 
					$sql = "SELECT * FROM categories";
					$categories = mysqli_query($conn,$sql);
					foreach ($categories as $category) { ?>
						<a href="catalog.php?category_id=<?php echo $category['id'] ; ?>">
							<li class="list-group-item mb-1">
								<?php echo $category['name']; ?>
							</li>
						</a>
					<?php }	 ?>
			</ul>

			<!-- set a get request on click of the anchor tag -->
			<h2 class="py-3">Price Sort</h2>
			<ul class="list-group">
				<a href="../controllers/sort.php?sort=asc">
					<li class="list-group-item mb-1">
						Lowest
					</li>
				</a>

				<a href="../controllers/sort.php?sort=desc">
					<li class="list-group-item mb-1">
						Highest
					</li>
				</a>
			</ul>
	

		</div> <!-- end categories -->
		
		<!-- items -->
		<figure class="col-12">
			<div class="container">

				<?php 
					$sql2 = "SELECT * FROM items";

					// filter via category
					if(isset($_GET['category_id'])) {
						$sql2 .=" WHERE category_id =".$_GET['category_id'];
					}

					// display sorted items
					if(isset($_SESSION['sort'])) {
						// var_dump($_SESSION['sort']);
						$sql2 .= $_SESSION['sort'];
					}					

					$items = mysqli_query($conn, $sql2);

					echo "<div class='row'>";

					foreach ($items as $item) { ?>
						<div class="col-md-4 col-12 my-3 mx-auto">
							<div class="card h-100 hvr-float">
								<img class="card-img-top img-fluid hvr-grow" src="<?php echo $item['image_path']; ?>">
								<div class="card-body">
									<h4 class="card-title text-white text-center">
										<strong><?php echo $item['name']; ?></strong>
									</h4>
									<p class="card-text text-white text-center">
										<?php echo $item['description']; ?>
										<br>
										<?php echo $item['price']; ?>
									</p>
								</div>
								
								<!-- add to cart -->
								<div class="card-footer">
									<input type="number" class="form-control" value="1">
									<button type="submit" class="btn btn-block btn-outline-light btn-lg add-to-cart my-3" data-id="<?php echo $item['id']; ?>"> Add to cart</button>
								</div>

							</div> <!-- end card -->
						</div> <!-- end item col -->
					<?php } echo "</div>" ; ?> <!-- end of items row -->		
			</figure> <!-- end items container -->
		</div> <!-- end items -->
	</div> <!-- end row -->


</main> <!-- end container -->


<?php } else {
	header('Location: ./error.php');
} ?>




<?php }  ?>