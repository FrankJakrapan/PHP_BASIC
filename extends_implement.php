<h3>Extends and Implement</h3>

<?php

interface ProductInterface{
    public function getInfo();
}

class ParentClass{
    public function getInfo(){
        echo "Parent Class";
    }
}

class Product extends ParentClass implements ProductInterface{
    public function getInfo(){
        echo "Product";
    }
}

$product = new Product();
echo $product->getInfo();

?>