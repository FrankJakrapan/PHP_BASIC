<h3>Random Number</h3>
<?php
echo rand(1, 100);
?>

<h3>Random Ecryted Has Code</h3>

<?php 
echo md5(uniqid(rand(), true));
?>

<h3>Fix Ecryted Has Code</h3>

<?php 
echo md5(uniqid('1234', true));
?>