<?php session_start() ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title><?php echo $title ?></title>

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik|Karla" rel="stylesheet">

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="../assets/images/cupcake.png"/>

	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!-- ekko-lightbox css -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
	
	 <!-- bootstrap css -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	  <!-- hover min css -->
	  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">

	  <!-- external css -->
	  <link rel="stylesheet" href="../assets/css/style.css">
	  
	  <!-- jquery  -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	  <!-- popper -->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	  <!-- bootstrap js -->
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	  <!-- ekko lightbox js -->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

</head>
<body>
	<?php 
		require_once 'header.php';
		require_once '../controllers/connect.php';

		get_page_content();

		mysqli_close($conn);

		require_once 'footer.php';
	 ?>

<script>
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>
</body>
</html>






