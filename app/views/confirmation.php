<?php
$title = 'Crown Bakery - Confirmation'
 ?>
<?php require_once "../partials/template.php";
function get_page_content(){

        if((isset($_SESSION['user'])) && $_SESSION['user']['roles_id'] == 2) {

    global $conn;
     ?>

    <header id="hdr-image13" class="jumbotron jumbotron-fluid text-center m-0 p-0">
        <div class="container pt-5"></div>
        <div class="container pt-5"></div>
            <div class="container pt-5">
           <h1 id="hdr-title" class="display-4 text-white">Confirmation</h1>      
            </div>
    </header> <!-- end of header -->        

	<main class="container main-container my-4">
        <figure class="row">
            <div class="col-sm-12 text-center">

                <h3>Reference No.: <?php echo $_SESSION['new_txn_number']; ?></h3>
                <?php unset($_SESSION['new_txn_number']); ?>

                <p>Thank you for shopping! Your order is being processed.</p>

                <a class="btn btn-outline-dark btn-lg" href="./catalog.php">Continue Shopping</a>
            </div>
        </figure>
    </main>

<?php } else {
    header('Location: ./error.php');
} ?>

<?php }?>