<?php include 'pages/includes/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <img src="assets/img/<?php $details['image'] ?>" alt="" class="card-img-top h-300">
                    <div class="card-body">
                        <h3><?php echo $details['title'] ?></h3>
                        <p><?php echo $details['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'pages/includes/footer.php'?>
