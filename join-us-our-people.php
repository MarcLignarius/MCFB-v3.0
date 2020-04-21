<?php $page_title = "Our People"; ?>
<?php include("header.php"); ?>
<?php include("navigation.php"); ?>
<div class="banner-container" id="our-people-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="container">
    <p class="intro-text text-left">
        Our people include our 7,000 members, Board of Directors, contractors, and volunteers. We encourage you to join us in the 
        manner the best suits you.	
    </p>
</div>
<div class="container-fluid">
    <div class="grid-container-4">
        <div class="grid-item">
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
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="board.php">
                        <img class="card-image image-15">
                        <h2 class="card-title">Board</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                    MCFB's Board Officers are elected by Voting Members and meet seven times throughout each year.
                    </p>
                </div>
                <div>
                    <a href="board.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="contractors.php">
                        <img class="card-image image-16">
                        <h2 class="card-title">Contractors</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB contracts for services related to the executive director/secretary and treasurer.
                    </p>
                </div>
                <div>
                    <a href="contractors.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="volunteers.php">
                        <img class="card-image image-17">
                        <h2 class="card-title">Volunteers</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB occasionally benefits from the time and expertise of volunteers.
                    </p>
                </div>
                <div>
                    <a href="volunteers.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center">
        <a href="join-us.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>