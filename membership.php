<?php $page_title = "Membership"; ?>

<?php include("header.php"); ?>
<?php include("navigation.php"); ?>

<div class="container-fluid">
    <h1 class="my-4 text-center"><?php echo $page_title; ?></h1>
    <h3>How do you join?</h3>
    <p>
        There are three levels of membership:
    </p>
    <div class="row">
        <div class="col-lg-4 mb-3">
            <div class="card h-100 text-center" style="border-radius: 0px; border: none">
                <div class="image-text-container">
                    <img style="width: 100%; height: 15vw; object-fit: cover" src="../images/placeholder.png" alt="">
                    <h2 class="card-title">Voting members ($125/year)</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card h-100 text-center" style="border-radius: 0px; border: none">
                <div class="image-text-container">
                    <img style="width: 100%; height: 15vw; object-fit: cover" src="../images/placeholder.png" alt="">
                    <h2 class="card-title">Supporting members ($125/year)</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card h-100 text-center" style="border-radius: 0px; border: none">
                <div class="image-text-container">
                    <img style="width: 100%; height: 15vw; object-fit: cover" src="../images/placeholder.png" alt="">
                    <h2 class="card-title">Associate members ($20/year)</h2>
                </div>
            </div>
        </div>
    </div>
    <p>
        Farmers with $2,500 or more per year in gross income qualify as voting members while farmers
        with less income and non-farmers qualify as supporting members. All Country Financial
        customers are automatically associate members.
    </p>
    <p>
        Membership can be attained by completing a hardcopy membership packet, by completing the OFB's
        <a href="https://oregonfb.org/join/" target="blank">online application</a> or by signing up for OFB
        through Country Financial. For more information, <a href="contact.php">contact MCFB</a>.
    </p>
    <p class="text-center">
        <a href="our-people.php" class="btn btn-primary">&larr; Back</a>
        <a href="index.php" class="btn btn-primary">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>

<?php include("footer.php"); ?>