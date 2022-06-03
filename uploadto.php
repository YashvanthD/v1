<?php
error_reporting(0);
ini_set('upload_max_filesize', '50M');
ini_set('post_max_size', '50M');
ini_set('max_input_time', 300);
ini_set('max_execution_time', 300);

?>
<?php
  $msg = "";

  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    echo 'Uploading...if';
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "image/".$filename;
          echo $_FILES["uploadfile"]["name"];
          echo $_FILES["uploadfile"]["tmp_name"];  
    // $db = mysqli_connect("localhost", "root", "", "files");
  
    //     // Get all the submitted data from the form
    //     $sql = "CREATE TABLE IF NOT EXISTS files(
    //       subject varchar(30),
    //       filename varchar(100),
    //       fileid int
    //     )";
    //     $sql = "INSERT INTO image (filename) VALUES ('$filename')";
  
    //     // Execute query
    //     mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  $result = mysqli_query($db, "SELECT * FROM image");
  echo 'Uploading...';


  
?>