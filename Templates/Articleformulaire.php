<main>
    <body>
        <form class ="ButtonRect" action ="traitement.php" method="POST">
               
                <input name = "name" type ="hidden" value= "<?php echo htmlspecialchars($product["name"])?>"> 
                <input name = "price" type ="hidden" value="<?php echo $product["price"];?>">
                <input name = "picture_url" type ="hidden" value="<?php echo $product["picture url"];?>">
                <input type ="number" value="Quantity">
                <input class ="ButtonShape" type ="submit" value="View">
                
        </form>
    </body>
</main>