<!DOCTYPE html>

<html>

   <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="index.css"/>
    </head>

<body>


      <header>
            <img class = "logo" src = "images/icons8-enclume-100.png" alt = "Picture of an enclume with a hammer on it, its the logo of the entreprise">
            <h1 class="WebSiteTitle">Comics library</h1>
            <div class = "link">
                <a class = "headerLink" href = "ThemePage.html"> Gallery</a>
                <a class = "headerLink" href = "GamePage.html"> Jeux</a>
                <a class = "headerLink" href = "AboutUs.html"> About us</a>
            </div>
        </header>


    <div class = "gallery">
         <?php displayArticle()?>
    </div>


    <?php








    /*
        A - refaire la gallery
            1 - Se connecter a l'api marvel
            2 - telecharger 20 images de super hero 
            3 -  <h1 id = "ComicsName"><?php echo $article->GetName()?></h1>
               <h3 id = "ComicsPrice"><?php echo $article->GetPrice()?></h3>
    */ 
    include 'item.php';
  
    $article = [30]; //new Article("Cosmic ghost riders",10,"images/cosmicghostrider.jpg");

   for($i = 0 ; $i < 100; $i++)
   {
        $article[$i] = GetPicture($i); 
   }

    function GetPicture()
    {
        return new Article("Cosmic ghost rider",10,"images/cosmicghostrider.jpg");
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
          echo '<input class="styled" type="button" value="Add" />';
          echo '</div>';
        }
    }

    function Add()
    {
        var_dump("TEST");
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




</body>



</html>