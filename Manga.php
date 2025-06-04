
<?php require('Templates/header.php');?>

<body>

    <form action="BDDisplay.php">
    <input type ="submit" value="BD">
    </form>

    <form action="">
    <input type ="submit" value="Display all">
    </form>

   <?php include('data.php');?>
   <?php include('function.php');?>
   <?php $Products = GetMangaData()?>

<?php require('catalog-with-keys.php'); ?>


</body>


<?php require('Templates/footer.php');?>