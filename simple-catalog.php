<?php include('header.php');?>
<title> simple_catalog </title>

<body>
    <?php include('data.php');?>
    <?php sort($products, SORT_STRING);?>
    
    <?php foreach ($iPhoneProducts as $product):?>
        <h1><?php echo $product; ?></h1>

        <?php endforeach;?>
    
    <h1>First ellement is <?php echo $iPhoneProducts[array_key_first($products)];?>
    <h1>Last ellement is <?php echo $iPhoneProducts[array_key_last($products)];?></h1>

</body>

<?php include('footer.php');?>


