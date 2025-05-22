<title> catalog with keys </title>

<main>

    <body>

    <?php include('data.php');?>
    <?php include('function.php');?>


    <div class = "gallery">
        <?php foreach ($products as $product):?>
            <div class = "ArticleRect">
        

                <h3 class ="ArticleParagraphe"><?php echo $product["name"];?></h3>
                <img class = "pictRect" src = <?php echo $product["picture url"];?>>
                <form class ="ButtonRect">
                <input type ="hidden" value=<?php echo $product["price"];?>>
                <input class ="ButtonShape" type ="submit" value="test">
                </form>
                <p class ="ArticleParagraphe"><?php echo $product["weight"];?>g</p>
                <p class ="ArticleParagraphe"><?php echo $product["price"];?>$</p>
                <p class ="ArticleParagraphe">Discount : <?php echo $product["discount"];?>%</p>
                <p class = "ArticleParagraphe"> <?php echo getDiscountPrice( $product["discount"] ,$product["price"]); ?>$</p>
             
            </div>
        <?php endforeach;?>
    </div>

    </body>

</main>
