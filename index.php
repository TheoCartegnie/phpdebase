<?php require('Templates/header.php');?>

<title> Comics library </title>

<body>

    <form action="BDDisplay.php">
    <input type ="submit" value="BD">
    </form>

    <form action="Manga.php">
    <input type ="submit" value="Manga">
    </form>

   <?php include('data.php');?>
   <?php include('function.php');?>
   <?php $Products =  GetComicsData()?>

<?php require('catalog-with-keys.php'); ?>

</body>

<?php require('Templates/footer.php');?>

