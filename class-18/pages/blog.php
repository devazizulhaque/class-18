<?php include 'pages/includes/header.php' ?>

<h1>This is Blog Page</h1>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php
            if (isset($blogs)){
                foreach ($blogs as $item){
            ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="assets/img/<?php echo $item['image'] ?>" alt="" class="card-img-top h-300">
                    <div class="card-body">
                        <h3><?php echo $item['title']; ?></h3>
                        <p><?php echo substr_replace($item['description'], '...', 165); ?></p>
                        <a href="action.php?page=detail&&id=<?php echo $item['id']; ?>" class="btn btn-outline-success float-end">Read More</a>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</section>

<?php include "pages/includes/footer.php"; ?>
