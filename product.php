<?php
class Product{
    public $id;
    public $name;
    public $price;

    //First Question
    public function __construct($id, $name, $price){
        $this->id = $id."\n";
        $this->name = $name."\n";
        $this->price = $price."\n";
    }

    //Second Question
    public function getFormattedPrice(){
        return number_format($this->price, 2, '.', '');
    }

    //Third Question
    public function showDetails(){
       $price1 = number_format($this->price,2,'.', '');
       echo "- ID: $this->id- Name: $this->name- Price: $$price1";
    }
}


$products = new Product(1, 'T-shirt', 19.99);
echo $products->id;
echo $products->name;
echo $products->price;
$price = $products->getFormattedPrice();
echo $price."\n";
$products->showDetails();
?>