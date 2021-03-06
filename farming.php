<?php $page_title = "Farming"; ?>
<?php include("header.php"); ?>
<?php include("navigation.php"); ?>
<div class="banner-container" id="farming-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <p>
            Multnomah County encompasses over 300,000 acres and includes both highly urbanized and
            less developed rural communities. Within the county, there are over 650 farms made up of
            more than 25,000 acres. These farms are both big and small, urban and rural, organic and
            conventional, and food and non-food producing. Multnomah County farm commodity sales total
            over $74 million annually and are thus a critical part of the local economy. Farmers from all
            sectors are welcome and encouraged to join and participate in MCFB.
        </p>
    </div>
</div>
<div class="container-fluid">
    <div class="grid-container-3">
        <div class="grid-item">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="farm-stands-and-agritourism.php">
                        <img class="card-image" id="image-2-2-1">
                        <h2 class="card-title">Farm Stands & Agritourism</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB promotes local farm stands every year to assist local farmers in getting the word out to our communities.
                    </p>
                </div>
                <div>
                    <a href="farm-stands-and-agritourism.php" class="btn btn-light">Learn More</a>
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