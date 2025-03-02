<?php
$name = "Johm DUE ";
?>

<h3>STRING FUNTION</h3>
<div>Count: <?php echo strlen($name); ?></div>
<div>Index of: <?php echo strpos($name, "m") ?></div>
<div>Upper Case:  <?php echo strtoupper($name) ?></div>
<div>Lower Case: <?php echo strtolower($name) ?></div>
<div>Replace : <?php echo str_replace("johm", "Frank", $name) ?></div>
<div>Substring : <?php echo substr($name, 0, 5) ?></div>