<?php $page_title = "Our People"; ?>
<?php include("header.php"); ?>
<?php include("navigation.php"); ?>
<div class="banner-container our-people-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="container">
    <p class="intro-text text-left">
        Our people include our 7,000 members and our Board of Directors, contractors, and volunteers. We encourage you to join us in the 
        manner the best suits you.	
    </p>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="membership.php">
                        <img class="card-image image-14">
                        <h2 class="card-title">Membership</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        More information about the different levels of membership and how to apply.
                    </p>
                </div>
                <div>
                    <a href="membership.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="board.php">
                        <img class="card-image image-15">
                        <h2 class="card-title">Board</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Meet the people on our Board.
                    </p>
                </div>
                <div>
                    <a href="board.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="contractors.php">
                        <img class="card-image image-16">
                        <h2 class="card-title">Contractors</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Meet our contractors.
                    </p>
                </div>
                <div>
                    <a href="contractors.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="volunteers.php">
                        <img class="card-image image-17">
                        <h2 class="card-title">Volunteers</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Meet our volunteers and more information about volunteering opportunities.
                    </p>
                </div>
                <div>
                    <a href="volunteers.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center">
        <a href="about.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>