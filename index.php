<?php $page_title = "Home"; ?>
<?php include("header.php"); ?>
<?php include("navigation.php"); ?>
<?php include("banner.php"); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-12 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="about.php">
                        <img class="card-image image-1">
                        <h2 class="card-title">About</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        We are a non-profit organization and local chapter of the Oregon Farm Bureau.
                    </p>
                </div>
                <div>
                    <a href="about.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-12 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="our-approach.php">
                        <img class="card-image image-2">
                        <h2 class="card-title">Our Approach</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        The strategies we use to fulfill our mission and accomplish our vision.
                    </p>
                </div>
                <div>
                    <a href="our-approach.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-12 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="benefits.php">
                        <img class="card-image image-3">
                        <h2 class="card-title">Benefits</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        The benefits and discounts our members receive on farming resources and services.
                    </p>
                </div>
                <div>
                    <a href="benefits.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-12 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="join-us.php">
                        <img class="card-image image-4">
                        <h2 class="card-title">Join Us</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        There are many ways to participate and benefit from MCFB activities.
                    </p>
                </div>
                <div>
                    <a href="join-us.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>