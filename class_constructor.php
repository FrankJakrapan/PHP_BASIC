<h3>Class and Constructor</h3>

<?php

class Product{
    public $name;
    public $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

$product1 = new Product("Product 1", 100);
echo $product1->name;
echo "<br>";
echo $product1->price;

?>