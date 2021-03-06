<?php
$title = 'Crown Bakery - Checkout'
 ?>
<?php require_once '../partials/template.php'; ?>


<?php function get_page_content() {
	global $conn;

		if((isset($_SESSION['user'])) && $_SESSION['user']['roles_id'] == 2) {
 ?>

	<?php 
		if (!isset($_SESSION['user'])) {
			header("Location: ./login.php");
		}

	 ?>

	<header id="hdr-image12" class="jumbotron jumbotron-fluid text-center m-0 p-0">
		<div class="container pt-5"></div>
		<div class="container pt-5"></div>
			<div class="container pt-5">
		   <h1 id="hdr-title" class="display-4 text-white">Orders</h1>		
			</div>
	</header> <!-- end of header -->	

	<main class="container">

	 <form target="_blank" method="POST" action="../controllers/placeorder.php">
	 	<div class="container mt-4">
	 		<div class="row">
	 			<div class="col-8">
	 				<h4>Shipping Address</h4>
		 			<div class="form-group">
		 				<input type="text" class="form-control" name="addressLine1" value="<?php echo $_SESSION['user']['address']; ?>">
		 			</div>
	 			</div> <!-- end col -->
		 		<div class="col-sm-4">
		 			<h4>Payment Methods</h4>
		 			<select name="payment_mode" id="payment_mode" class="form-control">
		 				<?php 
		 				$payment_mode_query = "SELECT * FROM payment_modes";
		 				$payment_modes = mysqli_query($conn, $payment_mode_query);
		 				foreach ($payment_modes as $payment_mode){
		 					extract($payment_mode);
		 					echo "<option value='$id'>$name</option>";
		 				}
		 				?>
		 			</select>
		 		</div> <!-- payment methods -->
	 		</div> <!-- end row -->

			
			<h4>Order Summary</h4>
			<div class="row">
				<div class="col-sm-6">
					<p> Total </p>
				</div>

				<div class="col-sm-6" id="total_price">
					<?php 
						$cart_total = 0;
						// var_dump($_SESSION['cart']);
						foreach($_SESSION['cart'] as $id => $qty) {
							$sql = "SELECT * FROM items WHERE id =$id";
							$result = mysqli_query($conn, $sql);
							$item = mysqli_fetch_assoc($result);

						// var_dump($_SESSION['cart'][$id]);
							$subTotal = $_SESSION['cart'][$id] * $item['price'];
						// $cart_total = $cart_total + $subTotal
							$cart_total += $subTotal;
						}
						echo $cart_total;
					 ?>
				</div> <!-- end total price -->
			</div> <!-- end row -->

			<button type="submit" class="btn btn-outline-dark btn-block">Place Order Now</button>

			<div class="row cart-items mt-4">
				<div class="table-responsive">
					<table class="table table-striped" id="cart-items">
						<thead>
							<tr class="text-center">
								<th colspan="2"> Item Name</th>
								<th>Item Price</th>
								<th>Item Quantity</th>
								<th>Item Subtotal</th>
							</tr>
						</thead>

						<tbody>
							<?php 
							foreach ($_SESSION['cart'] as $id => $qty) {
								$sql2 = "SELECT * FROM items WHERE id=$id;";
								$result = mysqli_query($conn,$sql2);
								// var_dump($result);
								$item = mysqli_fetch_assoc($result);
								// var_dump($item);
							 ?>
							<td class="text-center" colspan="2"><?php echo $item['name']; ?></td>
							<td class="text-center"><?php echo $item['price']; ?></td>
							<td class="text-center"><?php echo $qty; ?></td>
							<td class="text-center"><?php echo $qty * $item['price']; ?></td>
						</tbody>
						<?php } ?>
					</table>
				</div>
			</div> <!-- end order summary row -->
	 	</div> <!-- end container -->
	 </form> <!-- end form -->
</main>

<?php } else {
	header('Location: ./error.php');
} ?>

<?php } ?>