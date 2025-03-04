<h3>Class and Object</h3>

<?php

class Product{
    public $name;
    public $price;
}

$product = new Product();
$product->name = "Product 1";
$product->price = 100;

echo $product->name;
echo "<br>";
echo $product->price;

?>