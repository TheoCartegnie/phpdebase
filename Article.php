<?php

class articles
{   
    private int $id;
    private int $price;
    private string $name;
    private string $PictUrl;
    public function __construct($id, $name, $price,$PicUrl)
    {
        $this->id = $id;
        $this->price = $price;
        $this->name = $name;
        $this->PictUrl = $PicUrl;
    }






}
  




?>