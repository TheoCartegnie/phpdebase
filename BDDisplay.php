
<?php require('Templates/header.php');?>

<body>

    <form action="Manga.php">
    <input type ="submit" value="Manga">
    </form>

    <form action="">
    <input type ="submit" value="Display all">
    </form>

   <?php include('data.php');?>
   <?php include('function.php');?>
   <?php $Products =  GetBDData()?>

<?php require('catalog-with-keys.php'); ?>


</body>


<?php require('Templates/footer.php');?>