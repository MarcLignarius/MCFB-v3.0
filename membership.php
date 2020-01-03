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
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <img class="card-image" src="../images/placeholder.png" alt="">
                    <h2 class="card-title">Voting members ($125/year)</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <img class="card-image" src="../images/placeholder.png" alt="">
                    <h2 class="card-title">Supporting members ($125/year)</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card h-100 text-center">
                <div class="image-text-container">
                    <img class="card-image" src="../images/placeholder.png" alt="">
                    <h2 class="card-title">Associate members ($20/year)</h2>
                </div>
            </div>
        </div>
    </div>
    <p>
        Farmers and ranchers with $2,500 or more/year in gross farming/ranching income qualify as voting members. Voting members may:
    </p>
    <ul>
        <li>Attend all county board meetings, annual meetings, events, and outings</li>
        <li>Vote annually at the annual county meeting for board directors and officers</li>
        <li>Attend the annual state and national conventions</li>
        <li>Run for county and state boards and officer positions</li>
        <li>Represent the county as a voting delegate at the annual state convention</li>
        <li>Receive all of the benefits from the state farm bureau</li>
    </ul>
    <p>
        Click <a href="benefits.php" target="blank">HERE</a> to learn more about benefits.
    </p>
    <p>
        Farmers and ranchers with less than $2,500/year in gross farming/ranching income and non-farmers qualify as supporting members. Supporting members may:
    </p>
    <ul>
        <li>Attend all county board meetings, annual meetings, events, and outings</li>
        <li>Attend the annual state and national conventions</li>
        <li>Receive all of the benefits from the state farm bureau</li>
    </ul>
    <p>
        Click <a href="benefits.php" target="blank">HERE</a> to learn more about benefits.
    </p>
    <p>
        Membership can be attained by completing a hard copy membership packet, by completing the OFB's
        <a href="https://oregonfb.org/join/" target="blank">online application</a> or by signing up for OFB
        through Country Financial. For more information, <a href="contact.php">contact MCFB</a>.
    </p>
    <p>
        Through a special arrangement with Country Financial, all Country Financial customers are automatically associate members. Only Country Financial customers can be associate members. Associate members support the MCFB and OFB financially with annual dues and may attend meetings, events, and outings with approval from the MCFB Board President or Executive Director.
    </p>
    <p class="text-center">
        <a href="our-people.php" class="btn btn-primary">&larr; Back</a>
        <a href="index.php" class="btn btn-primary">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>

<?php include("footer.php"); ?>