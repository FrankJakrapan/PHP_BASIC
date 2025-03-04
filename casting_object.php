<h3>Casting Object</h3>

<?php

class Product{
    public $name;
    public $price;

    public function __toString()
    {
        return "Product : {$this->name}, Price : {$this->price}";
    }
}

class Product2{
    public $name;
    public $price;
}

$product = new Product();
$product->name = "Product 1";
$product->price = 100;

$array = (array) $product;// object to array
echo"<pre>";print_r($array);echo"</pre>";echo"<br>";

echo (string) $product;

$product2 = new Product2();
$product2 = (object) $array; // array to object
echo"<pre>";print_r($product2);echo"</pre>";echo"<br>";

?>