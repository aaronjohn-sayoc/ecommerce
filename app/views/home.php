<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { ?>

	<header id="hdr-image" class="jumbotron jumbotron-fluid text-center m-0 p-0">
		<div class="container pt-5"></div>
		<div class="container pt-5"></div>
			<div class="container pt-5">
		   <h1 id="hdr-title" class="display-4 pt-3 text-white">The Exquisite Bakery In The South</h1>		
			</div>
			<div class="container pt-5">
		   <p id="hdr-slogan" class="text-white">Only the finest ingredients are used!</p>		
			</div>
			<div class="container py-5">
		   <a class="btn btn-outline-light btn-lg" href="#">Shop Now</a>			
			</div>
	</header> <!-- end of header -->


	<section class="container-fluid p-0 m-0 bg-primary">
		<div class="row">
		    <div id="myimages" class="col-md-12">
		        <div class="row">
		            <a href="../assets/images/rawpixel-460973-unsplash.jpg?image=1" data-toggle="lightbox" data-gallery="bakery-gallery" data-title="Christmas Themed Cupcakes" class="col-sm-4 mx-0 px-0 hvr-grow">
		                <img src="../assets/images/rawpixel-460973-unsplash.jpg?image=1" class="img-fluid">
		            </a>
		            <a href="../assets/images/hello-i-m-nik-1094728-unsplash.jpg?image=2" data-toggle="lightbox" data-gallery="bakery-gallery" data-title="Cupcake Variety" class="col-sm-4 mx-0 px-0 hvr-grow">
		                <img src="../assets/images/hello-i-m-nik-1094728-unsplash.jpg?image=2" class="img-fluid">
		            </a>
		            <a href="../assets/images/max-panama-387824-unsplash.jpg?image=3" data-toggle="lightbox" data-gallery="bakery-gallery" data-title="Chocolate Cake Strawberry Desert" class="col-sm-4 mx-0 px-0 ">
		                <img src="../assets/images/max-panama-387824-unsplash.jpg?image=3" class="img-fluid">
		            </a>
		        </div>
		    </div>
		</div>	
	</section> <!-- end of gallery -->


<?php } ?>