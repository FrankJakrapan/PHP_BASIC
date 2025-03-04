<form action="upload_file.php" method="post" enctype="multipart/form-data">
     <input type="file" name="file">
     <input type="submit" value="Upload">
</form>

<?php
     if(isset($_FILES["file"])){
          // echo"<pre>";print_r($_FILES["file"]);exit;
          $file = $_FILES["file"];
          $file_name = $file["name"];
          $file_tmp = $file["tmp_name"];
          $file_destination = "upload/".$file_name;

          move_uploaded_file($file_tmp, $file_destination);

          echo"File upload seccessfully";
     }
?>