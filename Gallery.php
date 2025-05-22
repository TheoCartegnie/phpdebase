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



<?php
    /*
        A - refaire la gallery
            1 - Se connecter a l'api marvel
            2 - telecharger 20 images de super hero 
            3 -  <h1 id = "ComicsName"><?php echo $article->GetName()?></h1>
               <h3 id = "ComicsPrice"><?php echo $article->GetPrice()?></h3>
    */ 
    include 'item.php';
    $shop = new Shop();
    
    $comics = array("Name"=>"Name", "price" => 0.01,"PicturePaht"=>"images/....");
    
    $articlesInBag =[];

    

    $article = [30]; //new Article("Cosmic ghost riders",10,"images/cosmicghostrider.jpg");

   for($i = 0 ; $i < 100; $i++)
   {
        $article[$i] = GetPicture($i); 
   }

    function GetPicture()
    {
        return new Article("Cosmic ghost rider",10,"images/cosmicghostrider.jpg");
    }

    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['Add']))
    {
        add(GetPicture());
        echo "Article ajouté au panier avec succès !";
        debug_to_console("Test dans add to panier");
    }


function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

    function displayArticle()
    {
        include 'Gallery.php';
        $gallery = new Gallery();
        $articleGosthRider = new Article("Cosmic ghost rider",4,"images/cosmicghostrider.jpg");
        $articleSpawn = new Article("Spawn rebirth",8,"images/Spawn.jpg");
        $articleGeiger = new Article("The unamed : Geiger",25,"images/geigerx.jpg");

        $article = [$articleGosthRider,$articleGeiger,$articleSpawn];

        for($i = 0 ; $i < sizeof($article); $i++)
        {
          echo '<div class ="pictRect">';
          
          echo displayTitle($article[$i]->getName());
          echo displayPicture($article[$i]->getPicturePath());
          echo displayPrice($article[$i]->getPrice());
          DisplayFormulaireInput($article[$i]);

          echo '</div>';
        }
    }


    Function DisplayFormulaireInput($article)
    {
        echo '<div class = "QuantityField">';
          
        echo '<form action="traitement.php" method="POST">';
        echo '<input type="hidden" name="picturepath" value="' . $article->getPicturePath() . '">';
        echo '<input type="hidden" name="name" value ="'. $article->getName() .'">';        
        echo '<input type="submit">';
        echo '</form>';

        echo '</div>';
    }


    function DisplayViewPage($article)
    {
            
        echo '<form action="traitement.php" method="POST">';;
        echo '<input type="submit">';

        echo '</form>';
    }


    function add($article)
    {
        global $articlesInBag;
        $articlesInBag[] = $article;
    }

    function GetTotalPrice()
    {
        $TotalValue = 0;
        global $articlesInBag;
        foreach($articlesInBag as $value)
        {
            if($value instanceof Article){
                $TotalValue += $value->getprice();
            }
         
        }

        echo $TotalValue;
    }

    function displayTitle($title)
    {
        echo "<h2>$title</h2>";
    }


    function displayPrice($price)
    {
        echo '<h2 class ="price">' . $price . '$' . '</h2 class ="price">';
    }

    function displayPicture($article)
    {
       echo '<img id="ComicsPicture" src="' . $article . '" alt="test width ="180"  height = "320" " />';
    }
    ?>
