<?php require('header.php');?>
<title> catalog with keys </title>

<main>

    <body>

    <?php include('data.php');?>
    
    <?php foreach ($products as $product):?>
    <div class>
        <h3><?php echo $product["name"];?></h3>
        <img class = "pictRect" src = <?php echo $product["picture url"];?>>
        <p class ="ArticleParagraphe"><?php echo $product["weight"];?>g</p>
        <p class ="ArticleParagraphe"><?php echo $product["price"];?>$</p>
    </div>
    <?php endforeach;?>

    </body>

</main>
<?php require('footer.php');?>
