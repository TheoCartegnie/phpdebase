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

?>