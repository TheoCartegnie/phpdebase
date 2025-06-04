<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<title> catalog with keys </title>
    <div class = "gallery">
        <?php foreach ($Products as $product):?>
            <div class = "ArticleRect" ID = "articleRect">
                <h3 class ="ArticleParagraphe"><?php echo $product["name"];?></h3>
                <img class = "pictRect" src =<?php echo "images/" . $product["picURL"];?>>
                <?php GetFormat($product);?>    
                <?php include ("Templates/ArticleInfo.php");?>             
            </div>
        <?php endforeach;?>
    </div>
