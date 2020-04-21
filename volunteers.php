<?php $page_title = "Volunteers"; ?>
<?php include("header.php"); ?>
<?php include("navigation.php"); ?>
<div class="banner-container" id="volunteers-container">
    <div class="banner-text-container">
        <h1 class="banner-title"><?php echo $page_title; ?></h1>
    </div>
</div>
<div class="jumbotron">
    <div class="container" id="team">
        <h1 class="mb-4"><?php echo $page_title; ?></h1>
        <p>
            MCFB occasionally benefits from the time and expertise of volunteers. Volunteers lead or help with activities such as website 
            development and maintenance, social media management, and event hosting. If you would like to volunteer or have a volunteer 
            idea, please <a href="contact.php">Contact Us</a>.
        </p>
        <p class="font-weight-bold mt-4">
            Current MCFB Volunteers:
        </p>
        <div class= "row mt-5">
            <div class = "col-lg-4 align-self-center">
                <img src="../images/marc_davies.jpg" alt="..." class="rounded-circle">
            </div>
            <div class = "col-lg-8 align-self-center">
                <h4>Marc Davies, Web Developer</h4>
                <p>
                    Marc is a web developer who has been working on MCFB’s website since the fall of 2019. Marc has a Bachelor of Arts in 
                    International Business from the University of Portsmouth and a Master’s degree in International Commerce from the 
                    KEDGE Business School. Marc has also studied computer programming.
                </p> 
            </div>
        </div>
        <div class= "row mt-5">
            <div class = "col-lg-4 align-self-center">
                <img src="../images/rain_mower.jpg" alt="..." class="rounded-circle">
            </div>
            <div class = "col-lg-8 align-self-center">
                <h4>Rain Mower, Social Media</h4>
                <p>
                    Rain is a social media wiz who graduated from Portland’s Grant High School in 2017. When she is not working hard to satisfy the needs of retail customers, she enjoys spending time in the outdoors with her dog Ranger.
                </p> 
            </div>
        </div>
    </div>
</div>
<div class="container">
    <p class="font-weight-bold">
        Current Volunteer Opportunities:
    </p>
    <p>
       MCFB is not currently recruiting for volunteers. If you have an interest in and an idea for volunteer activities, please <a href="contact.php">Contact Us</a>.
    </p>
</div>
<div class="container-fluid">
    <p class="text-center">
        <a href="our-people.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>
<?php include("footer.php"); ?>