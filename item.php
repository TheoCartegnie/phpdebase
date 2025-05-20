<!DOCTYPE html>
<html>
    <body>
    <?php

    class Article
    {
        public $name = "";
        public $price;
        private $picturePath;        
        public function __construct($nom, $prix, $picturePath)
        {
            $this->name = $nom;
            $this->price = $prix;
            $this->picturePath = $picturePath;
        }


    function GetName() {
        echo $this->name;
    }

    function GetPrice()
    {
        echo $this->price;
    }

    function GetPicturePath()
    {
        echo $this->picturePath;
    }

}


    $article = new Article("Cosmic ghost riders",10,"images/cosmicghostrider.jpg");

    ?>


    <h1><?php echo $article->GetName()?></h1>
    <img src="<?php echo $article->GetPicturePath() ?>" alt="test" />
    <h3><?php echo $article->GetPrice()?></h3>
   
    
</body>



    


</html>