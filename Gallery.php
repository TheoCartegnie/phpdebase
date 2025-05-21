 <?php
    include 'item.php';
    (int)$MaxPictureDisplayed = 30;
  
    

class Shop
{
    public $article = [];


    public function __construct()
    {
      $this->article[]= new Article("",0,"");
    }

    public function addArticle($article)
    {
      $article->array_push($article);
    }
}

class Gallery
{
    public $article = [];
    public $shop;
    public function __construct()
    { 
      $shop = new Shop();
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