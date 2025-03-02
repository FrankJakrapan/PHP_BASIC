<h3>From</h3>
<form action="from.php" method="post">
<input type="text" name="name" placeholder="Name">
<input type="submit" value="Submit">
</form>

<?php  
if(isset($_POST["name"])){
    echo "Name: ".$_POST["name"];
}
?>