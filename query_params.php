<h3>Query Params</h3>

<?php
if(isset($_GET["name"])){
    echo "Name: ".$_GET["name"];
}else{
    echo "Name not found";
}
?>