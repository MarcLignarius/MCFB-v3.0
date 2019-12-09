<?php $page_title = "Advisory Committees"; ?>

<?php include("header.php"); ?>
<?php include("navigation.php"); ?>

<div class="container-fluid">
    <h1 class="my-4 text-center"><?php echo $page_title; ?></h1>
    <ul>
        <li>Lower Willamette LAC</li>
        <li>Clackamas River LAC</li>
        <li>Sandy River LAC</li>
    </ul>
    <p class="text-center">
        <a href="representing-farmers.php" class="btn btn-primary">&larr; Back</a>
        <a href="index.php" class="btn btn-primary">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>

<?php include("footer.php"); ?>