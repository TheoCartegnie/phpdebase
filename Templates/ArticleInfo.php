<main>
    <body>
        <p class ="ArticleParagraphe"><?php echo $product["weight"];?>g</p>
        <p class ="ArticleParagraphe"><?php echo $product["price"];?>$</p>
        <p class ="ArticleParagraphe">Discount : <?php echo $product["discount"];?>%</p>
        <p class ="ArticleParagraphe"> <?php echo getDiscountPrice( $product["discount"] ,$product["price"]); ?>$</p>
    </body>
</main>