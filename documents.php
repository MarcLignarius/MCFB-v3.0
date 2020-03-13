<?php $page_title = "Documents"; ?>
<?php include("header.php"); ?>
<?php include("navigation.php"); ?>
<div class="jumbotron">
    <div class="container">
        <h1 class="mb-4"><?php echo $page_title; ?></h1>
        <p>
            MCFB's foundational, guiding, annual, and Board-related documents can be found here. If you are looking for an MCFB document 
            that is not on this page, please <a href="contact.php" style="color:#007bff">Contact Us</a>.
        </p>
        <ul>
            <li><a href="articles-of-incorporation.php">Articles of Incorporation</a></li>
            <li><a href="by-laws.php">By-laws</a></li>
            <li><a href="business-plan.php">Business Plan</a></li>
            <li><a href="annual-budgets.php">Annual Budgets</a></li>
            <li><a href="board-meetings-agendas-and-minutes.php">Board Meetings Agendas & Minutes</a></li>
        </ul>
    </div>
</div>
<div class="container-fluid">
    <p class="text-center">
        <a href="about.php" class="btn btn-light">Back</a>
        <a href="index.php" class="btn btn-light">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>

<?php include("footer.php"); ?>