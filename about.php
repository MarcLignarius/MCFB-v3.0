<?php $page_title = "About"; ?>
<?php include("header.php"); ?>
<?php include("navigation.php"); ?>
<div id="about-banner-container">
  <div id="about-banner-text-container">
    <h1 id="about-banner-text">We help local farmers be successful.</h1>
  </div>
</div>
<div class="jumbotron">
    <div class="container">
        <h1 class="mb-4"><?php echo $page_title; ?></h1>
        <p>
            The Multnomah County Farm Bureau (MCFB) is a non-profit organization, serving as a local chapter of the Oregon Farm Bureau (OFB). 
            MCFB has over 7,000 members, consisting of local farmers, local farm supporters, and COUNTRY Financial customers. MCFB is governed 
            by a member-elected Board of Directors and is managed daily by an Executive Director and a Treasurer.
        </p>
    </div>
</div>
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-lg-4 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="purpose.php">
                        <img class="card-image image-5">
                        <h2 class="card-title">Purpose</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        The vision, mission, and values that represent what we stand for, work towards and guide all of our actions.
                    </p>
                </div>
                <div>
                    <a href="purpose.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="farming.php">
                        <img class="card-image image-6">
                        <h2 class="card-title">Farming</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Multnomah County encompasses over 300,000 acres and includes both highly urbanized and less developed rural communities.
                    </p>
                </div>
                <div>
                    <a href="farming.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="our-people.php">
                        <img class="card-image image-7">
                        <h2 class="card-title">Our People</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Our people include our 7,000 members and our Board of Directors, contractors, and volunteers.
                    </p>
                </div>
                <div>
                    <a href="our-people.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="documents.php">
                        <img class="card-image image-8">
                        <h2 class="card-title">Documents</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        MCFB's foundational, guiding, annual, and Board-related documents can be found here.
                    </p>
                </div>
                <div>
                    <a href="documents.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <a href="board-meetings.php">
                        <img class="card-image image-9">
                        <h2 class="card-title">Board Meetings</h2>
                    </a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        More information about MCFB Board Meetings and how to attend can be found here.
                    </p>
                </div>
                <div>
                    <a href="board-meetings.php" class="btn btn-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3"></div>
    </div>
    <p class="text-center">
        <a href="index.php" class="btn btn-light">Back</a>
    </p>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>