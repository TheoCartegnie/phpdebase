<!DOCTYPE html>

<html>

   <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="index.css"/>
    </head>

<body>


      <header>
            <img class = "logo" src = "images/icons8-enclume-100.png" alt = "Picture of an enclume with a hammer on it, its the logo of the entreprise">
            <h1 class="WebSiteTitle">Asset forge</h1>
            <div class = "link">
                <a class = "headerLink" href = "ThemePage.html"> Gallery</a>
                <a class = "headerLink" href = "GamePage.html"> Jeux</a>
                <a class = "headerLink" href = "AboutUs.html"> About us</a>
            </div>
        </header>


    <div id = "Gallery">

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

   for($i = 0 ; $i < 30; $i++)
   {
        $article[$i] = GetPicture($i); 
   }

    function GetPicture($i)
    {
        
        return new Article("Cosmic ghost rider #",10,"");
    }

    function displayArticle()
    {
        for($i = 0 ; $i < 30; $i++)
        {
          echo displayTitle("Cosmic ghost rider");
          echo displayPicture("images/cosmicghostrider.jpg");
          echo displayPrice("10");
        }
    }

    function displayTitle($title)
    {
           echo "<h1>$title</h1>";
    }


    function displayPrice($price)
    {
        echo "<h3>$price</h3>";
    }

    function displayPicture($article)
    {
            echo "<img id = 'ComicsPicture' src= $article alt='test' />";
    }




    ?>




</body>



</html>