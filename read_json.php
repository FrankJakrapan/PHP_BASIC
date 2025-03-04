<div>Read Json</div>

<?php
$json = file_get_contents("product.json");
$data = json_decode($json, true);
// echo"<pre>";print_r($data);exit;
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php foreach($data as $product){ ?>
        <tr>
            <td><?php echo $product["id"]; ?></td>
            <td><?php echo $product["name"]; ?></td>
            <td><?php echo $product["price"]; ?></td>
        </tr>
    <?php } ?>
</table>

<h3>Read Json Type</h3>

<?php
$json = file_get_contents("productType.json");
$data = json_decode($json, true);
// echo"<pre>";print_r($data);exit;
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    <?php foreach($data['productType'] as $type){ ?>
        <tr>
            <td><?php echo $type["id"]; ?></td>
            <td><?php echo $type["name"]; ?></td>
            <td>
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                    </tr>
                    <?php foreach($type["product"] as $product){ ?>
                        <tr>
                            <td><?php echo $product["id"]; ?></td>
                            <td><?php echo $product["name"]; ?></td>
                            <td><?php echo $product["price"]; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </td>
        </tr>
    <?php } ?>
</table>