<h3>Oject and Array</h3>

<?php

class Product{
    public $name;
    public $price;
}

$p1 = new Product();
$p1->name = "Product 1";
$p1->price = 100;

$p2 = new Product();
$p2->name = "Product 2";
$p2->price = 200;

$p3 = new Product();
$p3->name = "Product 3";
$p3->price = 300;

$products = array($p1, $p2, $p3);

?>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php foreach($products as $product){?>
        <tr>
            <td><?php echo $product->name; ?></td>
            <td><?php echo $product->price; ?></td>
        </tr>
    <?php } ?>
</table>