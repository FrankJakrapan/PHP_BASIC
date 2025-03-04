<h3>Override Method</h3>

<?php

class ParentClass{
    function getInfo(){
        return "Parent Class";
    }
}

class Product extends ParentClass{ //สืบทอด
    function getInfo(){ // ทับไปเลยหากเหมือนกัน
        return "Product";
    }
}

$product = new Product();

echo $product->getInfo();

?>