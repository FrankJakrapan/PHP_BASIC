<h3>Using Static</h3>
<?php

class Product{
    public static $name = "Product";
    public $lastname = 'Due';
    
    public static function getInfo(){
        return self::$name;
    }

    public function getInfo2(){
        return $this->lastname;
    }
}

echo Product::getInfo();
echo "<br>";

$product = new Product();
echo $product->getInfo2();

?>