<main>
    <body>
        <?php GetFormat($product);?>
    </body>
</main>


<?php
function GetFormat($article)
{
        echo '<form class ="ButtonRect" action ="traitement.php" method="POST">';
               
            echo '<input name = "name" type ="hidden" value= "<?php. echo htmlspecialchars($product["name"]);?>">' ;
            echo '<input name = "price" type ="hidden" value="<?php echo $product["price"];?>">';
            echo '<input name = "picture_url" type ="hidden" value="<?php echo $product["picture url"];?>">';
            echo '<input type ="number" value="Quantity">';
            echo '<input class ="ButtonShape" type ="submit" value="View">';
                
        echo '</form>';
}
?>
