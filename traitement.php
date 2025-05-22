<?php include('header.php');?>
<title> Comics pages </title>
<body>

    <h1><?php echo $_POST["name"]; ?></h1>
    
    <div class="RectFormat">
        <div class="PictureRect">
            <img src=<?php echo $_POST["picturepath"]; ?>>
        </div>
        <div class="comicsRect">
           <h3 class="description">
freestar
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi viverra dignissim velit ac tincidunt. 
Curabitur mollis imperdiet nisl, pellentesque sodales metus varius ut. Phasellus at ultrices sem, non euismod dolor. 
Curabitur dui purus, lacinia eu lobortis vel, maximus luctus ligula. Maecenas fringilla, arcu eget rutrum viverra, 
massa metus mattis sem, a varius mauris neque ac nibh. Sed in justo nec augue fringilla dictum. Ut vel justo interdum, 
aliquet libero vitae, facilisis nulla. Quisque augue ante, laoreet in risus at, auctor efficitur dui.
Curabitur sed tellus magna. Maecenas id rhoncus ipsum, eu rutrum justo. Duis id lectus cursus eros mollis tincidunt. 
Nam fringilla tincidunt felis in pulvinar. Pellentesque auctor ex vitae lectus consequat, at tincidunt felis faucibus. 
Fusce sit amet lobortis est. Etiam sollicitudin elit eu massa sodales, ut ullamcorper quam lobortis. 
Aliquam vulputate, nunc ultricies mollis ultricies, urna elit rhoncus nunc, id dignissim turpis eros et ex. 
Sed elementum consectetur augue, id sollicitudin turpis efficitur ac. Nunc ornare semper ante, eu vestibulum orci consectetur non. 
Aliquam ornare cursus nunc, in semper est hendrerit condimentum. Aenean mattis velit risus, sed condimentum magna volutpat a. 
Duis sit amet odio magna. Suspendisse potenti. Sed imperdiet faucibus massa, non congue ex fringilla vel. Aliquam. 
            </h3>

   
        </div>

 
<form action="purchase.php" method="POST">
<input type="number" name = "test">
<input type="submit">
</form>


    </div>




<?php 



?>


</body>

<?php include('footer.php');?>