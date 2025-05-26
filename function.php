<?php

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
                echo '<input name = "picture_url" type ="hidden"value="' . htmlspecialchars($article["picture_url"]) . '">"';
                echo '<input type ="number" value="Quantity">';
                echo '<input class ="ButtonShape" type ="submit" value="View">';
                    
            echo '</form>';
    }


?>