	<nav class="navbar navbar-expand-lg navbar-light bg-white p-1">
		<a class="navbar-brand" href="./home.php">
			<img id="brandlogo" src="../assets/images/crownbakery.png">
		</a>

		<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbar-nav">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div id="navbar-nav" class="collapse navbar-collapse text-center">
			<ul class="navbar-nav ml-auto px-5">
				<?php 

					if(!isset($_SESSION['user']) || (isset($_SESSION['user'])) && ($_SESSION['user']['roles_id'] ==2)) {
				?>

				<li class="nav-item mx-1">
					<a class="nav-link" href="./home.php"> Home </a>
				</li>

				<li class="nav-item mx-1">
					<a class="nav-link" href="./catalog.php"> Shop </a>
				</li>

				<li class="nav-item mx-1">
					<a class="nav-link" href="./cart.php"><i class="fas fa-shopping-cart"></i> Cart <span class="badge badge-primary text-white" id="cart-count">
						<?php
							if (isset($_SESSION['cart'])) {
								echo array_sum($_SESSION['cart']);
							} else {
								echo 0;
							}
						 ?>
					</span> </a>
				</li>

			<?php } elseif(isset($_SESSION['user']) && ($_SESSION['user']['roles_id']==1)) { ?>

				<li class="nav-item mx-1">
					<a href="./items.php" class="nav-link">Items</a>
				</li>

				<li class="nav-item mx-1">
					<a href="./orders.php" class="nav-link">Orders</a>
				</li>

				<li class="nav-item mx-1">
					<a href="./users.php" class="nav-link">Users</a>
				</li>
				
			<?php }; ?>

				<?php if(isset($_SESSION['user'])) { ?>

				<li class="nav-item mx-1">
					<a class="nav-link" href="./profile.php">Welcome, <?php echo $_SESSION['user']['firstname']; ?> </a>
				</li>

				<li class="nav-item mx-1">
					<a class="nav-link" href="../controllers/logout.php"> Logout </a>
				</li>

				<?php } else { ?>

				<li class="nav-item mx-1">
					<a class="nav-link" href="./login.php"> Login </a>
				</li>
				
				<li class="nav-item mx-1">
					<a class="nav-link" href="./register.php"> Register </a>
				</li>

				<?php }; ?>


			</ul>
		</div> <!-- end navbar nav -->
	</nav> <!-- end nav -->

<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
    });
</script> 