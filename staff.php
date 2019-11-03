<?php $page_title = "Staff"; ?>

<?php include("header.php"); ?>
<?php include("navigation.php"); ?>

<div class="container-fluid">
    <h1 class="my-4 text-center"><?php echo $page_title; ?></h1>
    <h3>Content for this page:</h3>
    <ul>
        <li>Contractors & Volunteers</li>
    </ul>
    <p class="text-center">
        <a href="people.php" class="btn btn-primary">&larr; Back</a>   
        <a href="index.php" class="btn btn-primary">Home</a>  
    </p>
    <?php include("statement.php"); ?>
</div>

<?php include("footer.php"); ?>