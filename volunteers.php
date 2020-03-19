<?php $page_title = "Volunteers"; ?>
<?php include("header.php"); ?>
<?php include("navigation.php"); ?>
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
            <div class = "col-md-4 align-self-center">
                <img src="../images/1.3.4_Volunteers.jpg" alt="..." class="rounded-circle">
            </div>
            <div class = "col-md-8 align-self-center">
                <h4>Marc Davies, Web Developer</h4>
                <p>
                    Marc is a web developer who has been working on MCFB’s website since the fall of 2019. Marc has a Bachelor of Arts in 
                    International Business from the University of Portsmouth and a Master’s degree in International Commerce from the 
                    KEDGE Business School. Marc has also studied computer programming.
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
        Social Media Volunteer. <a href="contact.php">Contact Us</a> if interested.
    </p>
</div>
<div class="container-fluid">
    <p class="text-center">
        <a href="our-people.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>