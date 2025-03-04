<h3>Class and Method</h3>

<?php

class Product{
    public $name;
    public $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    function gerIffo(){
        return "Name : " . $this->name . " Price : " . $this->price;
    }
}

$product = new Product('Product 1', 100);

echo $product->gerIffo();

?>