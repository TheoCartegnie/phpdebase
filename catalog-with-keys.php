<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<title> catalog with keys </title>

<main>

    <body>

    <?php include('data.php');?>
    <?php include('function.php');?>

    <div class = "gallery">
        <?php foreach ($products as $product):?>
            <div class = "ArticleRect">
                <h3 class ="ArticleParagraphe"><?php echo $product["name"];?></h3>
                <img class = "pictRect" src = <?php echo $product["picture_url"];?>>
                <?php GetFormat($product);?>    
                <?php include ("Templates/ArticleInfo.php");?>             
            </div>
        <?php endforeach;?>
    </div>

    </body>

</main>
