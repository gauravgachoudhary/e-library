<?php
  session_start();
  include_once 'include.php';
  if (isset($_POST['upload'])) {
    $file = $_FILES['file'];
    $filename = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.',$filename);
    $fileActualExt = strtolower(end($fileExt));
    $allow = array('jpg','jpeg','png','pdf');
    if(in_array($fileActualExt,$allow))
    {
        if($fileError===0)
            {
              if($fileSize<1000000)
              {
                $userid = $_SESSION['Id'];
                $fileNameNew ="profile".$_SESSION['Id'].".jpg";
                $fileDestination = 'PROFILE/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE member SET img_status=0 WHERE Id = $userid";
                $result = mysqli_query($conn, $sql);
                header("Location:index.php?uploadsuccess");
              }
              else {
                echo "Your file is too big";
              }
            }
            else {
              echo "There was an uploading error";
            }
          
        
    }
    else 
    {
       echo "This type of file can't be allowed";
    }
    
  }
    else
    {
      echo "file data can't be reach";
    }
?>