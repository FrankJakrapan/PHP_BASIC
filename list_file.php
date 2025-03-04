<h3>List File</h3>

<?php
$array = scandir("."); 
?>

<ul>
<?php
foreach($array as $item){
    echo "<li>".$item."</li>";
}
?>
</ul>