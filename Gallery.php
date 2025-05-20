 <?php
    include 'item.php';
    (int)$MaxPictureDisplayed = 30;
class Gallery
{
    public $article = [];
    
    public function __construct()
    { 
        for($i = 0; $i < 30; $i++)
        {
            $this->article[]= new Article("Cosmic ghost rider",10,"images/cosmicghostrider.jpg");
        }    
    }

    public function GetPicturesPath($index)
    {
      return $this->article[$index]->getPicturePath();
    }

    public function GetPictureName($index)
    {
      return $this->article[$index]->getName();
    }

     public function GetPicturePrice($index)
    {
      return $this->article[$index]->getPrice();
    }
}

?>