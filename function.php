<?php
include('SQLrequest.php');
$TVA = 0.0;

    function formatPrice()
    {

    }


    function getHorsTaxes($price)
    {
        global $TVA;

        return ((100 /$price ) / (100 + $TVA));
    }

    function getPriceWithTva($price)
    {

    }

    function getDiscountPrice($discount, $price)
    {
            if ($discount <= 0 && $discount >= 100) {
            return ($price);
        } 
    
            else {
            $discountedPrice = $price * (1 - $discount / 100);
            return ($discountedPrice);
        }
    }


function GetFormat($article)
    {
        echo '<form class ="ButtonRect" action ="traitement.php" method="POST">';
                
            echo '<input name="name" type="hidden" value="' . htmlspecialchars($article["name"]) . '">';
            echo '<input name = "price" type ="hidden" value="' . htmlspecialchars($article["price"]) . '" >';
            echo '<input name = "description" type ="hidden" value="' . htmlspecialchars($article["description"]) . '" >';
            echo '<input name = "picture_url" type ="hidden"value="' . "images/" . ''. htmlspecialchars($article["picURL"]) .'">';
            echo '<input name = "discount" type ="hidden"value="' . htmlspecialchars($article["discount"]) . '">';
            echo '<input name = "quantity" type ="number" value="'. 0 .'">';
            echo '<input class ="ButtonShape" type ="submit" value="Selectionner">';
                    
        echo '</form>';
    }

function Connection()
{

    try 
    {
        return $mysqlClient = new PDO(
            'mysql:host=localhost;dbname=my_app;charset=utf8',
            'TheoC',
            'motdepasse'
        );
    }
    catch(Exception $e)
    {
    return die('Erreur : ' . $e->getMessage());
    }

}

function GetMangaData()
{
    $SqlQuery = GetProductFromCategorie("Manga");
    return GetDataFromRequest($SqlQuery);
}

function GetBDData()
{
    $SqlQuery = GetProductFromCategorie("Comics");
    return GetDataFromRequest($SqlQuery);
}

function GetDataFromRequest($Request)
{
    $MySqlClient = Connection();

    $recipesStatement = $MySqlClient->prepare($Request);

    $recipesStatement->execute();
    $recpies = $recipesStatement->fetchAll();
    return $recpies;
}

function GetComicsData()
{
    $SqlQuery = GetRequestProductData();
    return GetDataFromRequest($SqlQuery);
}

?>