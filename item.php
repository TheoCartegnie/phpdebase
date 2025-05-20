
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

?>

