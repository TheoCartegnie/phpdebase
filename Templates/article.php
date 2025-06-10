
<?php

    class Article
    {
        private $name = "";
        private $price;
        private $picturePath;   

        public function __construct($nom, $prix, $picturePath)
        {
            $this->name = $nom;
            $this->price = $prix;
            $this->picturePath = $picturePath;
        }


   public function getName() {
        return $this->name;
    }

   public function getPrice()
    {
        return $this->price;
    }

   public function getPicturePath()
    {
        return $this->picturePath;
    }

}

?>

