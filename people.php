<?php $page_title = "People"; ?>

<?php include("header.php"); ?>
<?php include("navigation.php"); ?>

<div class="container-fluid" >
    <h1 class="my-4 text-center"><?php echo $page_title; ?></h1>
    <div class="row">
        <div class="col-lg-4 mb-3">
            <div class="card h-100 text-center" style="border-radius: 0px; border: none">
                <div class="image-text-container">
                    <img style="width: 100%" src="../images/placeholder.png" alt="">
                    <h2 class="card-title">Members</h2>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, asperiores unde.
                    </p>
                </div>
                <div>
                    <a href="members.php" class="btn btn-link">Learn More &rarr;</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card h-100 text-center" style="border-radius: 0px; border: none">
                <div class="image-text-container">
                    <img style="width: 100%" src="../images/placeholder.png" alt="">
                    <h2 class="card-title">Board Of Directors</h2>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, asperiores unde.
                    </p>
                </div>
                <div>
                    <a href="board-of-directors.php" class="btn btn-link">Learn More &rarr;</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card h-100 text-center" style="border-radius: 0px; border: none">
                <div class="image-text-container">
                    <img style="width: 100%" src="../images/placeholder.png" alt="">
                    <h2 class="card-title">Staff</h2>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, asperiores unde.
                    </p>
                </div>
                <div>
                    <a href="staff.php" class="btn btn-link">Learn More &rarr;</a>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center">
        <a href="about.php" class="btn btn-primary">&larr; Back</a>   
    </p>
    <?php include("statement.php"); ?>
</div>

<?php include("footer.php"); ?>