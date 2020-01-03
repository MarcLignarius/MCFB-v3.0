<?php $page_title = "Documents"; ?>

<?php include("header.php"); ?>
<?php include("navigation.php"); ?>

<div class="container-fluid">
    <h1 class="my-4 text-center"><?php echo $page_title; ?></h1>
    <p class="text-center">
        MCFB foundational, guiding, annual, and Board-related documents can be found here. If you are looking for an MCFB document that is not on this page, please contact us.
    </p>
    <ul>
        <li><a href="articles-of-incorporation.php">Articles of Incorporation</a></li>
        <li><a href="by-laws.php">By-laws</a></li>
        <li><a href="business-plan.php">Business Plan</a></li>
        <li><a href="annual-budgets.php">Annual Budgets</a></li>
        <li><a href="board-materials.php">Board Meetings Agendas & Minutes</a></li>
    </ul>
    <p class="text-center">
        <a href="about.php" class="btn btn-primary">&larr; Back</a>
        <a href="index.php" class="btn btn-primary">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>

<?php include("footer.php"); ?>