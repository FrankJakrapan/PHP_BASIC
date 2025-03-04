<?php

$xml = simplexml_load_file("product.xml");

?>
<h3>Product List</h3>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php foreach($xml->products->product as $product){ ?>
        <tr>
            <td><?php echo $product->name; ?></td>
            <td><?php echo $product->price; ?></td>
        </tr>
    <?php } ?>
</table>