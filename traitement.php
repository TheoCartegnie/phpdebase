<?php include('Templates/header.php'); ?>
<?php include("function.php");?>
<main>
    <title> Comics pages </title>

    <body>
        <h1 class= "mainTitle"><?php echo $_POST["name"]; ?></h1>
        <div class="ComicsRect">
  
            <div class="PictureRect">
                <img class="pic" src=<?php echo $_POST["picture_url"]; ?>>
                <h1>Price = <?php echo $_POST["price"]; ?>$</h1>
                <h1>Quantity = <?php echo $_POST["quantity"];?></h1>
                <h1>Discount = <?php echo $_POST["discount"];?></h1>
                <h1> Total price = <?php echo getDiscountPrice($_POST["discount"], ( $_POST["price"] * $_POST["quantity"] )); ?></h1>

            </div>
             
            <div class="descriptionRect">
                <h3 class="description">
                <?php echo $_POST["description"]; ?>
                </h3>
            </div>

        </div>
         
        </div>
    </body>

</main>

<?php include('Templates/footer.php'); ?>