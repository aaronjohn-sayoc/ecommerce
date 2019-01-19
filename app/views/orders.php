<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { 
	if(isset($_SESSION['user']) && $_SESSION['user']['roles_id'] == 1) {
		global $conn;
	?>

	<header id="hdr-image10" class="jumbotron jumbotron-fluid text-center m-0 p-0">
		<div class="container pt-5"></div>
		<div class="container pt-5"></div>
			<div class="container pt-5">
		   <h1 id="hdr-title" class="display-4 text-white">Orders</h1>		
			</div>
	</header> <!-- end of header -->	

	<div class="container py-5">
		<div class="row">
			<div class="col-sm-8 offset-sm-2">
				<table class="table table-responsive table-striped">
					<thead>
						<th>Transaction Code</th>
						<th>Status</th>
						<th>Actions</th>
					</thead>

					<tbody>
						<?php 
							$order_query = "SELECT o.id, o.transaction_code, o.status_id, s.name AS status FROM orders o JOIN statuses s ON (o.status_id = s.id);";
							$orders = mysqli_query($conn, $order_query);
							foreach($orders as $order){
								// var_dump($order);
						 ?>
						 <tr>
						 	<td><?php echo $order['transaction_code']; ?></td>
						 	<td><?php echo $order['status']; ?></td>
						 	<td>
						 		<?php if($order['status']=="pending") { ?>
						 			<a href="../controllers/complete_order.php?id=<?php echo $order['id']; ?>" class="btn btn-lg btn-outline-dark mx-2 my-3">Complete Order</a>
						 			<a href="../controllers/cancel_order.php?id=<?php echo $order['id']; ?>" class="btn btn-lg btn-outline-dark mx-2 my-3">Cancel Order</a>
						 		<?php }; ?>
						 	</td>
						 </tr>
						<?php } ?>
					</tbody>
				</table> <!-- end table -->
			</div> <!-- end columns -->
		</div> <!-- end row -->
	</div> <!-- end container -->



<?php } else {
	header('Location: ./error.php');
} ?>
<?php } ?>