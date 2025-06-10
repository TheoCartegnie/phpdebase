
<?php

function GetRequestProductData()
{
   return 'SELECT * FROM products';
}

function GetProductSortedByCategorie()
{
   return 'SELECT * FROM categories c JOIN products p ON c.id = p.category_id' ;
}

function GetProductFromCategorie($categoryName)
{
    return 'SELECT * FROM categories c JOIN products p ON c.id = p.category_id WHERE c.name =  "'.$categoryName.'"';
}
?>